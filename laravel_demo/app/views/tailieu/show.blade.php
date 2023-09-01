@extends('admin.test')

@section('title')
    Chi tiết Sản Phẩm
@stop

@section('content')
    <h1>Tài liệu <small>Chi tiết tài liệu</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{asset('tailieu/xem-tailieu')}}"><i class="icon-dashboard"></i>Tài liệu</a></li>
        <li class="active"><i class="icon-file-alt"></i>Chi tiết tài liệu</li>
    </ol>
    <p>   <a href="{{asset('tailieu/xem-tailieu')}}">Tất cả sản phẩm</a></p>



    <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <td>{{{$v->id}}}</td>
        </tr>
        <tr>
            <th>Tên tài liệu</th>
            <td>{{$v->TuaDe}}</td>
        </tr>

        <tr>
            <th>Hình ảnh</th>
            <td><img src="<?php echo asset("uploads/{$v->file}") ?>" width='200' height='280' /></td>
        </tr>

        <tr>
            <th>Loại file</th>
            <td>{{$v->LoaiFile}}</td>
        </tr>


        <tr>
            <th>Tác giả</th>
            <td>{{$v->TacGia}}</td>
        </tr>

        <tr>
            <th>TuKhoa</th>
            <td>{{$v->TuKhoa}}</td>
        </tr>

        <tr>
            <th>link</th>
            <td>{{$v->link}}</td>
        </tr>

        <tr>
            <th>intro</th>
            <td>{{$v->intro}}</td>
        </tr>
        <tr>
            <th>Loại tài liệu</th>
            <td>{{$v->intro}}</td>
        </tr>

        <tr>
            <td colspan="2">
                <a href="<?php echo asset("tailieu/xem-tailieu/{$v->id}") ?>" class="btn btn-info">Edit</a>
                <a href="<?php echo asset("sanpham/xoa-sanpham/{$v->id}") ?>" class="btn btn-danger">Delete</a>
            </td>

        </tr>

    </table>
@stop