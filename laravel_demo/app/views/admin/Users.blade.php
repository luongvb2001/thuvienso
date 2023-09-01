@extends('admin.index')
@section('admin')
	<button><a href="{{action('TasksController@Users')}}">Create</a></button>
	<div class="col-xs-12 col-sm-9" >
    <div class="list-group">
      <a href="#" class="list-group-item active">Users</a>
      <div class="list-group-item">
        <div class="row">
					
						@if ($users->isEmpty())
							<p>Currently, there is no task!</p>
							@else
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<td>id</td>
											<td>Username</td>
											<td>password</td>
											<td>Email</td>
											<td>Ngày gia nhập</td>
											
										</tr>
									</thead>
									<tbody>
										@foreach($users as $user)
											<tr>
												<td>{{ $user->id}}</td>
												<td>{{ $user->username}}</td>
												<td>{{ $user->password}}</td>
												<td>{{ $user->email}}</td>
												<td>{{ $user->created_at}}</td>
												<td>
												<td>
														<a href="{{ action('TasksController@editUser', $user->id)}}"
														class="btn btn-info">Edit</a>
												</td>
												<td>
														<a href="{{ action('TasksController@deleteUsers', $user->id)}}"
														class="btn btn-info">Delete</a>
													
												</td>
											</td>
											</tr>
										@endforeach
									</tbody>
								</table>

							</div>

						@endif
					
				</div>
			</div>
		
	</div>
	
@stop