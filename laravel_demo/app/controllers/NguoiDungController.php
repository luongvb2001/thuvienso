<?php
       class NguoiDungController extends BaseController{
           public function getXemNguoiDung()
           {
               $nguoidung = User::orderBy('id', 'desc')->paginate(7);
               return View::make('nguoidung.home')->with('nguoidung', $nguoidung);
           }


       }