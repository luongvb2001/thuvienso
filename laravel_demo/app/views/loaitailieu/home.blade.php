@extends('admin.test')
@section('content')
    <a href="{{asset('loaitailieu/create')}}">Thêm loại tài liệu</a>

    @if ($loaitl->isEmpty())
        <p>Currently, there is no task!</p>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <td class="header">Tên loại tài liệu</td>
                    <td class="header">id</td>
                </tr>
                </thead>
                <tbody>
                @foreach($loaitl as $loai)
                    <tr>
                        <td>{{ $loai->tenloaitailieu}}</td>
                        <td>{{ $loai->id}}</td>
                        <td>
                            <a href="#"
                               class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>Edit</a>
                        </td>`
                        <td>
                            <a href="#"
                               class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</a>
                        </td>


                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    @endif

@stop