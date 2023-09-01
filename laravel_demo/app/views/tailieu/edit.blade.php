@extends('admin.test')

@section('title')
Chỉnh sửa tài liệu
@stop

@section('content')
<h1>Sản Phẩm <small>Chỉnh sửa tài liệu</small></h1>
            <ol class="breadcrumb">
              <li><a href="{{asset('tailieu/xem-tailieu')}}"><i class="icon-dashboard"></i>Tài liệu</a></li>
              <li class="active"><i class="icon-file-alt"></i>Chỉnh sửa tài liệu</li>
            </ol>
<div class='col-lg-6'>
    <form id='form-make' class='well' enctype="multipart/form-data" action="<?php echo asset("tailieu/sua-tailieu/{$tailieu->id}"); ?>" method='post'>
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
            <label>Tên sản phẩm</label>
            <input type='text' name='tuade' value="{{$tailieu->TuaDe}}" id='tuade' placeholder="Nhập tên sản phẩm" class='form-control' />
        </div>
        

        <div>
            <label>Hình ảnh</label></br>
            <div><img src="<?php echo asset("images/{$tailieu->image}") ?>" width='120' height='190' /></div>
            <input type='file' name='file' value="{{$tailieu->image}}" id='file' placeholder="Chọn hình ảnh"  />
        </div>
        </br>


       <div>
            <label>Loại file</label>
            <input type='text' name='loaifile' value="{{$tailieu->LoaiFile}}" id='loaifile' placeholder="Loại file" class='form-control' />
        </div>
        
        
        <div>
            <label>Tác Gỉa</label>
            <input name='tacgia' id='tacgia' value="{{$tailieu->TacGia}}" class="form-control" />
        </div>

        <div>
            <label>TuKhoa</label>
            <input name='tukhoa' id='tukhoa' value="{{$tailieu->TuKhoa}}" class="form-control">
        </div>

        <div>
            <label>link</label>
            <input name='link' id='link' value="{{$tailieu->link}}" class="form-control">
        </div>
        <div>
            <label>intro</label>
            <textarea name='intro' id='intro'  cols="40" rows="10" class="form-control">{{$tailieu->intro}}</textarea>
        </div>

        <div>
            <label>Loại sản phẩm</label>
            <select name='id_loai' id='id_loai' class="form-control" multiple="" >
               @foreach($loais as $loai)
               <option value="{{$loai->id}}" <?php if($loai->id==$tailieu->id_loai) echo "selected='selected'"; ?>>{{$loai->tenloaitailieu}}</option>
               @endforeach
            </select>
        </div>
        </br>
        <div>
            <input type='submit' class='btn btn-info' value="Submit" />
            <a href='{{asset("tailieu/xem-tailieu")}}' >Quay về</a>
        </div>
    </form>
    
</div>
@stop

