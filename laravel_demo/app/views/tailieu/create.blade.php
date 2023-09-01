@extends('admin.test')

	@section('title')
	Thêm tài liệu
	@stop

@section('content')
<h1>Tài liệu <small>Thêm mới tài liệu</small></h1>
            <ol class="breadcrumb">
              <li><a href="{{asset('tailieu')}}"><i class="icon-dashboard"></i>Tài liệu</a></li>
              <li class="active"><i class="icon-file-alt"></i>Thêm mới tài liệu</li>
            </ol>
<div class='col-lg-6'>
    <form id='form-make' class='well' enctype="multipart/form-data" action="{{asset('tailieu/them-tailieu')}}" method='post'>
       @if ($errors->any())
<div class='alert alert-danger'>
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
</div>   
@endif

    @if(Session::has('errorImage'))
    <div class='alert alert-danger'>
        <ul>
            <li>{{Session::get('errorImage')}}</li>
        </ul>    
        </div>  
    {{Session::forget('errorImage')}}
    @endif
        
        
        <div>
            <label>Tựa đề sách</label>
            <input type='text' name='tuade' id='tuade' placeholder="Nhập tên tài liệu" class='form-control' />
        </div>
        
        <div>
            <label>Hình ảnh</label> </br>
            <input type='file' name='file' id='file' placeholder="Chọn hình ảnh"  />
        </div>
        </br>

       <div>
            <label>Loại file</label>
            <input type='text' name='loaifile' id='loaifile' placeholder="Loại file" class='form-control' />
        </div>
        
        <div>
            <label>Tác giả</label>
            <input type="text"  name='tacgia' id='tacgia' placeholder="Tác giả" class="form-control" />
        </div>
        <div>
            <label>Từ khóa</label>
            <input type="text" name='tukhoa' id='tukhoa' placeholder="Từ khóa" class="form-control" />
        </div>
        
        <div>
            <label>link</label>
            <input type="text" name='link' id='link' placeholder="link" class="form-control" />
        </div>

        <div>
            <label>Intro</label>
            <textarea name='intro' id='intro' cols="40" rows="10" class="form-control"></textarea>
        </div>
        
        <div>
            <label>Ngày đăng</label>
            <input type="text" name='ngaydang' id='ngaydang' placeholder="Ngày đăng" class="form-control" />
        </div>

        <div>
            <label>Loại tài liệu</label>
            <select name='id_loai' id='id_loai' class="form-control" multiple="">
               @foreach($loais as $loai)
               <option value="{{$loai->id}}">{{$loai->tenloaitailieu}}</option>
               @endforeach
            </select>
        </div>
        </br>
        <div>
            <input type='submit' class='btn btn-info' value="Submit" />
            <a href='{{asset("tailieu")}}' >Quay về</a>
        </div>
    </form>
    
</div>
@stop



@stop