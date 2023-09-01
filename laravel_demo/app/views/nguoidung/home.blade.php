@extends('admin.test')
@section('content')

    <h1>Người dùng <small>Chỉnh sửa người dùng</small></h1>
    @if ($nguoidung->isEmpty())
        <p>Currently, there is no task!</p>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <td class="header">Username</td>
                    <td class="header">Email</td>
                    <td class="header">password</td>
                    <td class="header">Quyền</td>

                </tr>
                </thead>
                <tbody>
                @foreach($nguoidung as $NguoiDung)
                    <tr>
                        <td>{{ $NguoiDung->username}}</td>
                        <td>{{ $NguoiDung->email}}</td>
                        <td>{{ $NguoiDung->password}}</td>
                        <td>{{ $NguoiDung->isadmin}}</td>

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