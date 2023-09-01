<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Thư viện số</title>

	 	<link rel="stylesheet" href="{{Asset('css/bootstrap.css')}}" />
	 	<link rel="stylesheet" href="{{Asset('css/slider.css')}}" />
		<link rel="stylesheet" href="{{Asset('css/navbar-fixed-top.css')}}" />
	  	<script type="text/javascript" href="public/js/ie-emulation-modes-warning.js"></script>
	  	<style>
		body{
			
			padding: 0px;
		}
		menu{
			margin-bottom: 30px;
		}
		form{
			width: 300px;
			margin-right: auto;
			margin-left: auto;
		}
		form input{
			margin-bottom: 3px;
		}
		.list-group{
			width:990px;
			margin-top: 30px;
		}
		.row{
			margin-top: 15px;
			margin-right: 2px;
		}
		</style>
		
		
	</head>
	<body>
		

    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="{{Asset('container')}}">Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{action('TasksController@home')}}">Tailieu</a></li>
            <li><a href="{{action('TasksController@Users')}}">Users</a></li>
            <li><a href="{{action('TasksController@users')">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Logout</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container">
        @yield('admin') 
    </div>


    </div> 
		
		<script type="text/javascript" src="public/js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="public/js/bootstrap.js"></script>
		<script type="text/javascript" src="public/js/ie10-viewport-bug-workaround.js"></script>
		
	</body>

        