<?php
	class UploadController extends BaseController
	{
		public function getupload()
		{
			$loais = LoaiTaiLieu::get();
			return View::make('users.upload')->with('loais', $loais);
		}

		public function postUpload()
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
					$tailieu->link = Input::get('tailieu');
					$tailieu->intro = Input::get('intro');
					$tailieu->loaitailieu_id = Input::get('id_loai');
					$tailieu->save();
					// luu logfile
					return Redirect::to('container');

				} else {
					return Redirect::to('upload')
						->with('errorImage', "Không đúng định dạng hình ảnh");
				}

			} else {

				return Redirect::to('upload')
					->withInput()
					->withErrors($validation)
					->with('message', 'There were validation errors.');
			}

		}
			

			
			//$input = Input::all();
			//$upload = new TaiLieu;
			//$upload->category_id = Input::get('category_id');
			//$upload->tuade = Input::get('tuade');
			//$upload->loaifile= Input::get('loaifile');
			//$upload->sotrang= Input::get('sotrang');
			//$upload->intro= Input::get('intro');

			//$upload->loaitailieu = input::get('loaitailieu');
			//$upload->tukhoa = Input::get('tukhoa');
			//$upload->tacgia = Input::get('tacgia');

			//$link = Input::file('image')->getClientOriginalName();
			//$link->move(public_path().'/download')
			//var_dump($link);
			//$filelink =/*time()."-".*/$link->getClientOriginalName();
			//Input::file('image')->move(public_path().'/download/', $filelink);
			//$upload->link = 'link/'.$filename;


			//$image = Input::file('image');
			//$filename =time()."-".$image->getClientOriginalName();
			//Input::file('image')->move(public_path().'/images/', $filename);
			// $imagelink=asset('/images/'.$filename);
			//Image::make($image->getRealPath())->resize(468,249)->save(public_path().'/images/'.$filename);
			

			//return Redirect::action('UploadController@container');
			
			

		
	}