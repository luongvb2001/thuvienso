<?php
/* admin*/
Route::get('admin', function(){
	return View::make('admin.home');
});
/* tailieu */
Route::get('tailieu/xem-tailieu', 'TaiLieuController@getXemTaiLieu');
Route::get('tailieu/them-tailieu', 'TaiLieuController@getThemTaiLieu');
Route::post('tailieu/them-tailieu', 'TaiLieuController@postThemTaiLieu');

Route::get('tailieu/sua-tailieu/{tailieu}', 'TaiLieuController@getSuaTaiLieu');
Route::post('tailieu/sua-tailieu', 'TaiLieuController@postSuaTaiLieu');
Route::get('tailieu/xoa-tailieu/{tailieu}', 'TaiLieuController@getXoaTaiLieu');

/*Loại tài liêu*/
Route::get('loaitailieu/xem-loaitl', 'LoaiController@getXemLoaiTL');
Route::get('loaitailieu/create', 'LoaiController@getCreateLoaiTL');
Route::post('loaitailieu/create', 'LoaiController@postCreateLoaiTL');


/*người dùng*/
Route::get('nguoidung', 'NguoiDungController@getXemNguoiDung');

/* login and resgister */
Route::get('/', 'HomeController@container');
Route::get('login', 'LoginController@getLogin');
Route::get('register', 'LoginController@getRegister');
Route::post('register', 'LoginController@postRegister');
Route::post('login', 'LoginController@postLogin');
Route::get('logout', 'LoginController@logout');


Route::group(array('before' => 'auth'), function(){
	Route::get('container', 'HomeController@container');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//chat rooms
Route::get('/api/chat-rooms', array('uses' => 'ChatRoomController@getAll'));
Route::post('/api/chat-rooms', array('uses' => 'ChatRoomController@create'));

//message api

Route::get('/api/messages/{chatRoom}', array('uses' => 'MessageRoomController@getByChatRoom'));
Route::post('/api/messages/{chatRoom}', array('uses' => 'MessageRoomController@createInChatRoom'));
Route::get('/api/messages/{lastMessageId}/{chatRoom}', array('uses'=>'MessageController@getUpdate'));


//Users api 
Route::get('/api/users/login/kareem', array('uses' => 'UserController@gloginKareem'));
Route::get('/api/users/login/mohamed', array('uses' => 'UserController@gloginMohamed'));




/* admin*/

Route::get('tet', function(){
	return View::make('admin.test');
});
Route::model('tailieu', 'TaiLieu');


	
Route::get('/create', 'TasksController@create');
Route::post('/create', 'TasksController@saveCreate');

Route::get('/edit/{tailieu}', 'TasksController@edit');
Route::post('/edit', 'TasksController@doEdit');


Route::get('/delete/{tailieu}', 'TasksController@delete');
Route::post('/delete', 'TasksController@doDelete');


Route::model('users', 'user');

Route::get('users', 'TasksController@Users');
	
Route::get('/create', 'TasksController@create');
Route::post('/create', 'TasksController@saveCreate');

Route::get('/edit/{tailieu}', 'TasksController@edit');
Route::post('/edit', 'TasksController@doEdit');


Route::get('/delete/{tailieu}', 'TasksController@delete');
Route::post('/delete', 'TasksController@doDelete');


/* end: admin*/

Route::post('home', function(){
	return View::make('users.home');
});


/* search */

Route::get('search', 'SearchController@getSearch');


/* users */
Route::get('about', function(){
	return View::make('users.about');
});

Route::get('/container', 'HomeController@container');
Route::get('/menu', 'HomeController@menu');

Route::get('/upload', array('before'=>'check-login' , 'uses' =>'UploadController@getupload'));
Route::post('/upload', array('before'=>'check-login' , 'uses' =>'UploadController@postUpload'));

Route::get('tranghiensach/container.php', 'HomeController@tranghiensach');


/************login************


	Route::get('/login', 'LoginController@getlogin');

	Route::post("login", 'LoginController@postlogin');

	Route::get('/register', 'LoginController@getregister');		

	Route::post('register', 'LoginController@postregister');

	Route::get('profile', 'LoginController@get_profile');

	Route::get('logout', 'LoginController@get_logout');
	

	
	Route::group(array("prefix"=>"check"), function(){
		Route::post("check-username", function(){
			if(User::check_username(Input::get("username")))
				return "true";
			else return "false";
		});
		Route::post("check-email", function(){
			if(User::check_email(Input::get("email")))
				return "true";
			else return "false";
		});

	});
/*Route::group(array('before' => 'auth'), function(){
	Route::get('container', 'HomeController@container');
});*/
 

Route::get('downloads/{filename}',['as'=>'downloadfile','uses'=>'HomeController@getDownload']);



Route::get("TaiLieu", function(){
	$TL1=array("TuaDe"=>"phần mềm phân tích và tính toán lưới điện", "image"=>"1.jpg" ,"LoaiFile"=>"PDF", "SoTrang"=>"50 trang","intro"=>"Giới thiệu về phân tích và thiết kế hệ thống, chu kỳ phát triển hệ thống, nghiên cứu sơ bộ, mô...", "loaitailieu_id"=>"2", "user_id"=>"1");
	$TL3=array("TuaDe"=>"Nhập liệu và kiểm tra hợp lệ","image"=>"4.jpg", "LoaiFile"=>"PDF", "SoTrang"=>"90 trang", "intro"=>"Mục đích của CSDL Lưu trữ lâu dài Khai thác hiệu quả Yêu cầu đ/v thiết kế CSDL Đảm bảo...", "loaitailieu_id"=>"3", "user_id"=>"3");
	$TL4=array("TuaDe"=>"Phân tích và thiết kế hệ thống", "image"=>"3.jpg", "LoaiFile"=>"PDF", "SoTrang"=>"50 trang", "intro"=>"Giới thiệu về phân tích và thiết kế hệ thống, chu kỳ phát triển hệ thống, nghiên cứu sơ bộ, mô...","loaitailieu_id"=>"2", "user_id"=>"1" );
	$TL5=array("TuaDe"=>" phần mềm Kỹ Thuật A-Z", "image"=>"9.jpg", "LoaiFile"=>"PDF", "SoTrang"=>"50 trang", "intro"=>"Giới thiệu về phân tích và thiết kế hệ thống, chu kỳ phát triển hệ thống, nghiên cứu sơ bộ, mô...","loaitailieu_id"=>"3", "user_id"=>"1" );
	

	DB::table("tailieu2")->insert(array($TL1,$TL3,$TL4, $TL5));
});


Route::get("LoaiTaiLieu", function(){
	$TL1=array("TenLoaiTaiLieu"=>"Công nghệ thông tin");
	$TL2=array("TenLoaiTaiLieu"=>"Công nghệ phần mềm");
	$TL3=array("TenLoaiTaiLieu"=>"Kế toán - Tin học");

	DB::table("loaitailieu")->insert(array($TL1,$TL2,$TL3));
});

Route::get("NguoiDung", function(){
	$TL1=array("username"=>"admin", "password"=>"123456", "email"=>"admin.cit@gmail.com", "isadmin"=>"0");
	$TL2=array("username"=>"hoangnhi", "password"=>"hoangnhi", "email"=>"hoangnhi.cit@gmail.com", "isadmin"=>"1");
	$TL3=array("username"=>"vanset", "password"=>"vanset", "email"=>"vanset.cit@gmail.com", "isadmin"=>"1");

	DB::table("users")->insert(array($TL1, $TL2, $TL3));

});

Route::get("Down", function(){
	$TL1=array("user_id"=>"1", "tailieu_id"=>"1", "NgayDownload"=>"2014-10-27");
	$TL2=array("user_id"=>"3", "tailieu_id"=>"2", "NgayDownload"=>"2014-10-10");
	$TL3=array("user_id"=>"2", "tailieu_id"=>"3", "NgayDownload"=>"2014-05-05");

	DB::table("download")->insert(array($TL1, $TL2, $TL3));
});

Route::get("TuKhoa", function(){
	$TL1=array("tailieu_id"=>"1", "TenTuKhoa"=>"Bài tập giải tích | giải tích | Các phương pháp giải tích ");
	$TL2=array("tailieu_id"=>"2", "TenTuKhoa"=>"CSDL | Hệ quản trị CSDL | SQL server ");
	$TL3=array("tailieu_id"=>"3", "TenTuKhoa"=>"HTTTKT | Các phương pháp đặc tả | Đặc tả ");

	DB::table("TuKhoa")->insert(array($TL1, $TL2, $TL3));
});

Route::get("Tacgia", function(){
	$TL1=array("tailieu_id"=>"1", "tentacgia"=>"Nguyễn Văn Sét | Nguyễn Thị Thảo | Nguyễn Duy Lâm");
	$TL2=array("tailieu_id"=>"2", "tentacgia"=>"Nguyễn Thị Ly Sa | Nguyễn Thị Ngọc | Huỳnh Kim Thuyết");
	$TL3=array("tailieu_id"=>"3", "tentacgia"=>"Trần Chánh Hiệp | Lê Hoàng long | Trần Xuân Sang");

	DB::table("TacGia")->insert(array($TL1, $TL2, $TL3));
});








