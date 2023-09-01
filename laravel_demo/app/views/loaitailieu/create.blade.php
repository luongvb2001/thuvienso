@extends('admin.test')

@section('title')
    Loại tài liệu
@stop
@section('content')
    <h1>Loại tài liệu <small>Thêm loại tài liệu</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{asset('loais')}}"><i class="icon-dashboard"></i> Loại tài liệu </a></li>
        <li class="active"><i class="icon-file-alt"></i>Thêm loại tài liệu</li>
    </ol>
    <div class='col-lg-6'>
        {{ Form::open(array('class'=>'well','id'=>'form-make')) }}
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
            </div>
        @endif

        <div><label>Tên loại</label>
            <input type='text' name='tenloai' id='tenloai' placeholder="Nhập tên loại tài liệu" class='form-control' />
        </div>

        </br>
        <div >{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}</div>

        {{ Form::close() }}

    </div>

@stop


