<?php
    class LoaiController extends BaseController{
        public function getXemLoaiTL()
        {
            $loaitl = LoaiTaiLieu::orderBy('id', 'desc')->paginate(7);
            return View::make('loaitailieu.home')->with('loaitl', $loaitl);
        }

        public function getCreateLoaiTL()
        {
            return View::make('loaitailieu.create');
        }
        
        public function postCreateLoaiTL()
        {
            $input = Input::all();

            $loaitl = new LoaiTaiLieu;
            $loaitl->tenloaitailieu = $input['tenloai'];
            $loaitl->save();

            return Redirect::action('LoaiController@getXemLoaiTL');

        }
    }
