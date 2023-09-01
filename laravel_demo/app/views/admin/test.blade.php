<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/jquery-ui.css')}}" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Add custom CSS here -->
    <link href="{{asset('css/admin/sb-admin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/font-awesome.min.css')}}">
      <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
        <!-- Page Specific Plugins -->
    <script src="{{asset('js/admin/jquery.tablesorter.js')}}"></script>
    <script src="{{asset('js/admin/tables.js')}}"></script>
    

    
    
    <!-- sctip validate-->
    <script type='text/javascript' src="{{asset('js/admin/jquery-ui.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/jquery-validate/jquery.validate.js')}}"></script>
    <style>
        label.error{
      color:#e74c3c;
            }
        .header{
          color: #3498db;
        }
    </style>
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{asset('admin')}}">Administration</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span> Trang Chủ</a></li>
            
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-book"></span> Tài liệu <span class="caret"></span></a>
              <ul class="dropdown-menu">
                   <li><a href="{{asset('tailieu/xem-tailieu')}}"><span class="glyphicon glyphicon-hand-right"></span> Tất Cả tài liệu</a></li>
            
              </ul>
            </li>

            <li>
              <a href="{{asset('loaitailieu/xem-loaitl')}}" ><span class="glyphicon glyphicon-folder-close"></span> Loại tài liệu</a>
            </li>
            
            
            
           
            
            <li><a href="{{asset('nguoidung')}}"><span class="glyphicon glyphicon-hand-right"></span>  Thành Viên</a></li>
          
        

            
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
             <li class="dropdown user-dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Admin <b class="caret"></b></a>
                 <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Inbox <span class="badge">7</span></a></li>
                <li><a href="{{asset('users/doi-matkhau')}}"><span class="glyphicon glyphicon-asterisk"></span> Đổi mật khẩu</a></li>
                <li class="divider"></li>
                <li><a href="{{asset('users/thoat')}}"><span class="glyphicon glyphicon-off"></span> Thoát</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
       
            
            @yield('content')
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

  

  </body>
</html>