@extends('admin.index')
@section('admin')

	<div class="col-xs-12 col-sm-9" >
		<div class="list-group">
		  <a href="#" class="list-group-item active">Tài liệu</a>
		  <div class="list-group-item">
			<div class="row">


					{{ Form::open(array('files'=>'true'),['url'=>'/create', 'class'=>'form'])}}
					<div>
						{{Form::label('tuade', 'Tựa đề:')}}
						{{Form::text('tuade', null, ['class'=>'form-control'])}}
					</div>
					<!--<div>
						{{Form::label('image', 'Image:')}}
						{{Form::file('image')}}
					</div>-->
					<div>
						{{Form::label('loaifile', 'Loại File:')}}
						{{Form::text('loaifile', null, ['class'=>'form-control'])}}

					</div>
					<div>
						{{Form::label('sotrang', 'Số trang:')}}
						{{Form::text('sotrang', null, ['class'=>'form-control'])}}
					</div>
					<div>
						{{Form::label('intro', 'intro:')}}
						{{Form::text('intro', null, ['class'=>'form-control'])}}
					</div>
					<div>
						{{Form::label('created_at', 'Ngày Upload:')}}
						{{Form::text('created_at', null, ['class'=>'form-control'])}}
					</div>
					<div class="form-group">
						{{Form::submit('Create TaiLieu', ['class'=>'btn btn-primary'])}}
					</div>
					{{Form::close()}}
				</div>
			</div>
		</div>
	</div>
@stop