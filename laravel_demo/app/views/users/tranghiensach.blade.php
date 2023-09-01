
        
@extends('users.index')
@section('content')
	<div class="col-xs-12 col-sm-9">
	 	<div class="list-group">
		 	<a href="#" class="list-group-item active">Thông tinh sách</a>
	        <div class="list-group-item">
	        	<div class="row">
	        		<div class="col-xs-3 col-sm-4">
	        			

		        		<img src="{{asset("/images/$news->image")}}" />
		        	</div>
		        	
		        	<div class="col-xs-9 col-sm-8">
		        		<font face="Verdana, Tahoma, Arial" color="#e74c3c"><h2>{{$news->TuaDe}}</h2></font>
		        		
		        		Loại file:<font color="#3498db"> {{$news->LoaiFile}}</font><br/>
		        		Tác giả: <font color="#3498db">{{$news->TacGia}}</font><br/>
		        		Từ khóa: <font color="#3498db">{{$news->TuKhoa}}</font><br/>
		        		Intro: <font color="#3498db">{{$news->intro}}</font><br/>
		        		Số trang: <font color="#3498db">{{$news->SoTrang}}</font><br/><hr/>
		        		<button> <a href="{{URL::route('downloadfile',$news->link)}}" class="btn btn-large pull-right"><i class="icon-download-alt"> </i> Download </a></button>
		        	</div>

		        	<div class="col-xs-12 col-sm-12">
		        		
		        		<div id="thediv_scroll">
					  	{{$news->body}}
					  
						</div>
					</div>
	       		</div>
			</div>
		</div>
	</div>
@stop
