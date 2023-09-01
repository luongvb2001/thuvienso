<?php
class TasksController extends BaseController
{
	public function home()
	{
		$tailieu = TaiLieu::all();
		return View::make('tailieu.home', compact('tailieu'));
	} 

	public function create()
	{
		return View::make('admin.create');
	}

	public function edit(TaiLieu $tailieu)
	{
		return View::make('admin.edit', compact('tailieu'));
	}


	public function delete(TaiLieu $tailieu)
	{
		return View::make('admin.delete', compact('tailieu'));
	}

	public function saveCreate()
	{
		$input = Input::all();

		$tailieu = new TaiLieu;
		$tailieu->tuade = $input['tuade'];
		//$tailieu->image = $input['image'];
		$tailieu->loaifile = $input['loaifile'];
		$tailieu->sotrang = $input['sotrang'];
		$tailieu->create_at = $input['created_at'];
		$tailieu->save();

		return Redirect::action('TasksController@home');
	}
	public function doEdit(){
		$TaiLieu = TaiLieu::findOrFail(Input::get('id'));
		$TaiLieu->tuade = Input::get('tuade');
		//$TaiLieu->image = Input::get('image');
		$TaiLieu->loaifile = Input::get('loaifile');
		$TaiLieu->sotrang = Input::get('sotrang');
		$TaiLieu->created_at= Input::get('created_at');
		$TaiLieu->save();

		return Redirect::action('TasksController@home');
		
	}

	public function doDelete()
	{
		$tailieu = TaiLieu::findOrFail(Input::get('id'));
		$tailieu->delete();

		return Redirect::action('TasksController@home');
	}

	public function Users()
	{
		$users = User::all();
		return View::make('admin.Users', compact('users'));
	} 

}