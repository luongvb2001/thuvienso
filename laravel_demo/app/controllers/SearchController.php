<?php
	class SearchController extends BaseController
	{


		public function getSearch()
		{
		
			$keyword = Input::get('keyword');
				return View::make('users.search')
				->with('tailieu', TaiLieu::where('tuade', 'LIKE', '%'.$keyword.'%')->get())
				->with('keyword', $keyword);
			return View::make('users.container', compact('keyword'));
		}
		/*public function getSearch()
		{
			return View::make('users.search');
		}
		public function postsearch()
		{
			$q = Input::get('keyword');
			$posts = TaiLieu::where('tuade','like',"%{$q}%")->get();
			dd($posts->toArray());
			//return View::make('users.container')->width('tailieu', $post);

		}*/

	}


?>









