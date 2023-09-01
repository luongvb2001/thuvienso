<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<title>Thư viện số</title>
	 	<link rel="stylesheet" href="{{Asset('css/bootstrap.css')}}" />
	 	<link rel="stylesheet" href="{{Asset('css/navbar.css')}}" />
	 	<link rel="stylesheet" href="{{Asset('css/body.css')}}" />

	 		<script type="text/javascript" src="{{Asset('js/jquery-validate/jquery-1.11.0.min.js')}}"></script>

	 	<script type="text/javascript" src="{{Asset('js/jquery-validate/jquery.validate.js')}}"></script>
	 	
	 	<script type="text/javascript" src="{{Asset('js/application.js')}}"></script>	
	 	<script type="text/javascript" src="{{Asset('js/jquery.js')}}"></script>

		<style type="text/css">
		/* About */
				#accordiondemo h3 {
					cursor: pointer;
				 	border: 1px solid #ccc;
				 	background: #EFEFEF;
				  	padding: 4px 8px;
		}

		.btn-primary{
			width:400px;
			margin-left: 8px;
		}
		.list-group-item{
			list-style-type: none;
		}
		.thumbnail {
			margin-top: 8px;
		}
		.form-control{
			width:500px;
		}
		.well{
			background-color: #fff;
			border: none;
			margin-left: 3px;
		}
		</style>


		
	</head>
	
	<body>
		
		<div class="container">
			@include('users.menu')
			 
	    </div> <!-- /container -->
	    <div class="container">
	    	@include('users.slider')
	    </div>
	   
	    	

    	<div class="container">
     	 	<div class="row row-offcanvas row-offcanvas-right">
      		 	@yield('content')
       
		      	<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
				@include('users.menu_right')
		      	</div><!--/row-->
      		</div>
      	<hr>
     	</div>

     	
	    <footer>
	    	<p>&copy; Thư viện số <p>
	       <p>&copy; design by HoangNhi_12ICLC</p>
	      
	    </footer>

    	</div><!--/.container-->

		
		<script type="text/javascript" src="{{Asset('js/ie10-viewport-bug-workaround.js')}}"></script>
		<script type="text/javascript" src="{{Asset('js/ie-emulation-modes-warning.js')}}"></script>

		<script type="text/javascript" src="{{Asset('js/slider/jquery.cycle2.js')}}"></script>
		<script type="text/javascript" src="{{Asset('js/slider/jquery.min.js')}}"></script>

		<script type="text/javascript" src="{{Asset('js/scoll/jquery142.min.js')}}"></script>
		<script type="text/javascript" src="{{Asset('js/scoll/autoScroll.js')}}"></script>

		<script type="text/javascript" src="{{Asset('js/scoll/jquery.waterwheelCarousel.js')}}"></script>
		
		<script type="text/javascript">
			$(function() {
			// Ẩn tất cả .accordion trừ accordion đầu tiên
				$("#accordiondemo .accordion:not(:first)").hide();
				// Áp dụng sự kiện click vào thẻ h3
				$("#accordiondemo h5").click(function(){
					// chọn .accordion (do phần tử đi đi ngay sau phần tử h3 nên ta dùng .next())
				  $accordion = $(this).next();
				  // Kiểm tra nếu đang ẩn thì sẽ hiện và ẩn các phần tử khác
				  // Nếu đang hiện thì click vào h3 sẽ ẩn
				  if ($accordion.is(':hidden') === true) {
				    $("#accordiondemo .accordion").slideUp();
				    $accordion.slideDown();
				  } else {
				    $accordion.slideUp();
				  }
				});
			});
		</script>
		
	</body>
</html>
