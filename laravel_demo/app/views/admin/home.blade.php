@extends(admin.test);
@section('content')
    <h1>Trang Chủ <small>Xin chào Admin!</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{asset('admin')}}"><i class="icon-dashboard"></i> Trang Chủ</a></li>

    </ol>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <label>Điều khoản sử dụng</label>
        <ol>
            <li>Admin có thể cập nhật các thông tin về sản phẩm.</li>
            <li>Admin có thể cập nhật đơn hàng</li>
            <li>Admin có thể quản lý tài khoản của người dùng</li>
        </ol>

    </div>

@stop