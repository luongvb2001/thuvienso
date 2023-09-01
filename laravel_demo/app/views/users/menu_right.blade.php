<div class="list-group">
      @if(Auth::user())
            <a href="#" class="list-group-item active">Chào khách</a>
            <div class="list-group-item">
            <font color="red"><li>{{ ucwords(Auth::user()->username)}}</li></font>
            <li> {{HTML::link('admin', 'Đổi mật khẩu')}}</li>
            <li>{{HTML::link('logout', 'Logout')}}</li>
      @else
            <a href="#" class="list-group-item active">Chào khách</a>
            <div class="list-group-item">Nhấp vào <a href="{{Asset('login')}}"> đây </a> để đăng nhập
            <br/> Nếu bạn chưa có tài khoản hãy đăng ký tại <a href="{{Asset('register')}}"> đây </a>
      @endif

      </div>


      <div class="list-group">
      <?php
      $me = DB::table('loaitailieu')->orderby('id', 'ESC')->get();

      ?>
      <a href="#" class="list-group-item active">Tài Liệu Thư Viện Số</a>
      @foreach($me as $menu)
      <a href="{{$menu->id}}" class="list-group-item">{{$menu->tenloaitailieu}}</a>
      @endforeach
</div>