<?php

class HomeController extends Controller {

      public function container(){
        $conn = DB::connection("mysql");

        if(isset($_GET["buscar"]))
        {
            $buscar = htmlspecialchars(Input::get("buscar"));
            $paginacion = $conn
                ->table('tailieu2')
                ->where('TuaDe', 'LIKE', '%'.$buscar.'%')
                ->paginate(4);
        }else
        {
            $paginacion = $conn->table('tailieu2')->paginate(8);
        }
        

        return View::make('users.container', array('paginacion' => $paginacion));
        /*
        $sach = TaiLieu::all();
        $sach = DB::table('tailieu')->paginate(4);
        return View::make('users.container', compact('sach'));*/
    }

    public function tranghiensach(){
        $news = TaiLieu::all();
            if (isset($_GET['id']))
                $id = $_GET["id"];
                $cate_name =  DB::table('tailieu2')->where('id', $id)->first();
                $catename = $cate_name->TuaDe;
        $news = DB::table('tailieu2')->where('id', $id)->first();
        return View::make('users.tranghiensach', compact('news'));
    }


    public function getDownload($filename)
    {
        $file=public_path()."/download/".$filename;
        return Response::download($file);
       
    }


    public function menu()
    {
        $me = DB::table('loaitailieu')->orderby('id', 'DESC')->get();
        return View::make('users.menu_right', compact('me'));
    }

  
}
