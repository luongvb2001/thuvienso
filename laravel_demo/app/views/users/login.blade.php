@extends('users.index')
@section('content')
<div class="col-xs-12 col-sm-9">
	 <div class="list-group">
	 	 <a href="#" class="list-group-item active">Ðăng Nhập</a>
         <div class="list-group-item">
			{{Form::open(array('url' => 'login'))}}
				@if($errors->any())
				<div class="alert alert-error">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					{{implode('', $errors->all('<li class="error">:message</li>'))}}

				</div>
				@endif
				{{Form::text('email', '', array('placeholder'=>'Email', 'class' => 'form-control'))}}<br>
				{{Form::password('password', array('placeholder'=> 'Password', 'class' => 'form-control'))}}<br>
				<label>
					<input type="checkbox" name="remember" id="remember"/>
					Remember me
				</label><br/>
				{{Form::submit('Login', array('class="btn btn-lg btn-primary btn-block'))}}

				
			{{Form::close()}}
	</div>
	</div>
</div>
@stop
