<?php 
	class TaiLieu extends Eloquent
	{
	    public $table = 'tailieu2';


	    public static $rules=array(
        "tuade"=>"required",
        "file"=>"required",
        "loaifile"=>"required",
        "sotrang"=>"required",
        "tacgia"=>"required",
        "tukhoa"=>"required",
        "link"=>"required",
        "intro"=>"required",
        "id_loai"=>"required|numeric",


        
    );
    
       public static $rulesUpdate=array(
        "tuade"=>"required",
     
        "loaifile"=>"required",
        "sotrang"=>"required",
        "tacgia"=>"required",
        "tukhoa"=>"required",
        "link"=>"required",
        "intro"=>"required",
        "id_loai"=>"required|numeric",
        
    );



	}















