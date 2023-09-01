<?php

class TaiLieuController extends BaseController
{
    public function getXemTaiLieu()
    {
        $tailieu = TaiLieu::orderBy('id', 'desc')->paginate(7);
        return View::make('tailieu.home')->with('tailieu', $tailieu);
    }

    public function getThemTaiLieu()
    {
        $loais = LoaiTaiLieu::get();
        return View::make('tailieu.create')->with('loais', $loais);
    }

    public function postThemTaiLieu()
    {
        $input = Input::all();
        $validation = Validator::make($input, TaiLieu::$rules);
        if ($validation->passes()) {
            $image = Input::file('file');
            $imageName = $image->getClientOriginalName();
            $nameArray = explode('.', $imageName);
            $imageType = strtolower(end($nameArray));
            $imageRules = array("jpg", "jpeg", "png");
            if (in_array($imageType, $imageRules)) { //neu dung thi tien hanh insert vao csdl
                $imageNewName = uniqid(rand(), true);
                $imageNewName = md5($imageNewName);
                $imageNewName = substr($imageNewName, 0, 6);
                $imageNewName .= "." . $imageType;
                Input::file('file')->move('images', $imageNewName); // upload hinh anh

                //sau khi upload thi insert vao csdl
                $tailieu = new TaiLieu();
                $tailieu->TuaDe = Input::get('tuade');
                $tailieu->image = $imageNewName;
                $tailieu->LoaiFile = Input::get('loaifile');
                $tailieu->TacGia = Input::get('tacgia');
                $tailieu->TuKhoa = Input::get('tukhoa');
                $tailieu->link = Input::get('link');
                $tailieu->intro = Input::get('intro');
                $tailieu->loaitailieu_id = Input::get('id_loai');
                $tailieu->save();
                // luu logfile
                return Redirect::to('tailieu/xem-tailieu');

            } else {
                return Redirect::to('tailieu/them-tailieu')
                    ->with('errorImage', "Không đúng định dạng hình ảnh");
            }

        } else {

            return Redirect::to('tailieu/them-tailieu')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'There were validation errors.');
        }

    }


    public function getXoaTaiLieu()
    {
        $tailieu = TaiLieu::findOrFail(Input::get('id'));
        $tailieu->delete();

        return Redirect::action('TasksController@home');
    }

    public function getSuaTaiLieu($tailieu)
    {
        $loais = LoaiTaiLieu::get();
        return View::make('tailieu.edit')->with('tailieu', $tailieu)
            ->with('loais', $loais);
    }


    public function postSuaTaiLieu()
    {
        $input = Input::all();
        $validation = Validator::make($input, Tailieu::$rulesUpdate);

        if ($validation->passes()) {

            $image = Input::file('file');
            if (!is_null($image)) {// nếu có thay doi hinh anh
                $imageName = $image->getClientOriginalName();
                $nameArray = explode('.', $imageName);
                $imageType = end($nameArray);
                $imageRules = array("jpg", "jpeg", "png");
                if (in_array($imageType, $imageRules)) { //neu dung thi tien hanh insert vao csdl
                    $imageNewName = uniqid(rand(), true);
                    $imageNewName = md5($imageNewName);
                    $imageNewName = substr($imageNewName, 0, 6);
                    $imageNewName .= "." . $imageType;
                    Input::file('file')->move('images', $imageNewName); // upload hinh anh

                    //sau khi upload thi insert vao csdl
                    $tailieu = TaiLieu::find(id);
                    $tailieu->TuaDe = Input::get('tuade');
                    $tailieu->hinhanh = $imageNewName;
                    $tailieu->LoaiFile = Input::get('loaifile');
                    //$tailieu->SoTrang=Input::get('sotrang');
                    $tailieu->TacGia = Input::get('tacgia');
                    $tailieu->TuKhoa = Input::get('tukhoa');
                    $tailieu->link = Input::get('link');
                    $tailieu->intro = Input::get('intro');
                    $tailieu->id_loai = Input::get('id_loai');
                    //luu logfile
                    //$info=  TaiLieu::where('id','=',id)->get()->toArray();
                    //Logfileadmin::addData("Sửa", "Sản Phẩm", $tailieu->id, $tailieu->TuaDe,$info);
                    //hoan tat update
                    $tailieu->save();

                    return Redirect::to("tailieu/xem-tailieu/{$tailieu->id}");

                } else {
                    return Redirect::to("tailieu/sua-tailieu/{id}")
                        ->with('errorImage', "Không đúng định dạng hình ảnh");
                }
            } else {
                //nếu không thay doi hinh anh
                $tailieu = TaiLieu::find(id);
                $tailieu->TuaDe = Input::get('tuade');
                $tailieu->LoaiFile = Input::get('loaifile');
                $tailieu->TacGia = Input::get('tacgia');
                $tailieu->TuKhoa = Input::get('tukhoa');
                $tailieu->link = Input::get('link');
                $tailieu->intro = Input::get('intro');
                $tailieu->id_loai = Input::get('id_loai');
                //luu logfile
                //$info = TaiLieu::where('id', '=', id)->get()->toArray();
                //Logfileadmin::addData("Sửa", "Sản Phẩm", $tailieu->id, $tailieu->TuaDe, $info);
                //hoan tat update
                $tailieu->save();
                return Redirect::to("tailieu/xem-tailieu/{$tailieu->id}");

            }
        } else {

            return Redirect::to("tailieu/sua-tailieu/{id}")
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'There were validation errors.');
        }
    }
        public function getChiTietTaiLieu()
        {
            $sp=  TaiLieu::find(id);
            if(is_null($sp)){  return Redirect::to('tailieu/xem-tailieu'); }else
                return View::make('tailieu.show')->with('v', $sp);
        }

}