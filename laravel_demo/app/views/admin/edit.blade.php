@extends('admin.index')

@section('admin')
	<section class="header section-padding">
		<div class="background">&nbsp;</div>
		<div class="container">
			<div class="header-text">
				<h1>Edit</h1>
				<p> Edit TaiLieu page</p>
			</div>
		</div>
	</section>

	<div class="container">
		<section class="section-padding">
			<div class="jumbotron text-center">
				<h1>Edit TaiLieu {{ $tailieu-> id }}</h1>

				{{Form::open(['url'=>'/edit', 'class'=>'form'])}}
				{{Form::hidden('id', $tailieu->id)}}

				<div class="form-group">
					{{Form::label('tuade', 'Tựa đề:')}}
					{{Form::text('tuade', $tailieu->tuade, ['class'=>'form-control'])}}
				</div>
				<div>
					{{Form::label('image', 'Image:')}}
					{{Form::text('image', $tailieu->image, ['class'=>'form-control'])}}
				</div>
				<div class="form-group">
					{{Form::label('loaifile', 'Loại File:')}}
					{{Form::text('loaifile', $tailieu->loaifile, ['class'=>'form-control'])}}
				</div>
				<div class="form-group">
					{{Form::label('sotrang', 'Số trang:')}}
					{{Form::text('sotrang', $tailieu->sotrang, ['class'=>'form-control'])}}
				</div>
				<div class="form-group">
					{{Form::label('Intro', 'Intro:')}}
					{{Form::text('intro', $tailieu->intro, ['class'=>'form-control'])}}
				</div>
				<div class="form-group">
					{{Form::label('create_at', 'Ngày Upload:')}}
					{{Form::text('create_at', $tailieu->created_at, ['class'=>'form-control'])}}
				</div>

				<div class="form-group">
					{{Form::submit('Save TaiLieu', ['class'=>'btn btn-primary'])}}
				</div>
				{{Form::close()}}
			</div>
		</section>
	</div>
@stop