@extends('admin.index')
@section('admin')
	<section class="header section-padding">
		<div class="background">&nbsp;</div>
		<div class="container">
			<div class="header-text">
				<h1> Delete </h1>
				<p>Delete TaiLieu page</p>
			</div>
		</div>
	</section>
	<div class="container">
		<section class="section-padding">
			<div class="jumbotron text-center">
				<h1>Do you want to delete TaiLieu {{$tailieu->id}}?</h1>

				{{ Form::open(['url'=>'/delete', 'class'=>'form'])}}
				{{ Form::hidden('id', $tailieu->id)}}

				<div class="form-group">
					{{Form::submit('Delete TaiLieu', ['class' => 'btn btn-primary'])}}
					<a href="{{action('TasksController@home')}}"
					class="btn btn-danger">No</a>
				</div>
				{{Form::close()}}
			</div>
		</section>
	</div>
@stop