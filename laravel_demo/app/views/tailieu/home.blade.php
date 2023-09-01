@extends('admin.test')
@section('content')
	<a href="{{asset('tailieu/them-tailieu')}}">Thêm tài liệu</a>
	
						@if ($tailieu->isEmpty())
							<p>Currently, there is no task!</p>
							@else
							<div class="table-responsive">
								<table class="table table-striped table-bordered">
									<thead>
										<tr>
											<td class="header">id</td>
											<td class="header">Tựa Đề</td>
											<td class="header">image</td>
											<td class="header">Loại file</td>
											<td class="header">Tác giả</td>
											<td class="header">Từ Khóa</td>
											<td class="header">link</td>
											<td class="header">Intro</td>
											<td class="header">ID_Loại tài liệu</td>
											<td class="header">Ngày Upload</td>
											
										</tr>
									</thead>
									<tbody>
										@foreach($tailieu as $TaiLieu)
											<tr>
												<td>{{ $TaiLieu->id}}</td>
												<td>{{ $TaiLieu->TuaDe}}</td>
												<td><img src="<?php echo asset("images/{$TaiLieu->image}") ?>" width='100' height='100' /></td>
												<td>{{ $TaiLieu->LoaiFile}}</td>
												<td>{{ $TaiLieu->TacGia}}</td>
												<td>{{ $TaiLieu->TuKhoa}}</td>
												<td>{{ $TaiLieu->link}}</td>
												<td>{{ $TaiLieu->intro}}</td>
												<td>{{ $TaiLieu->loaitailieu_id}}</td>
												<td>{{ $TaiLieu->created_at}}</td>
												
												<td>
													<a href="{{action('TaiLieuController@getSuaTaiLieu', $TaiLieu->id)}}"
													class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>Edit</a>
												</td>`
												<td>
													<a href="{{action('TaiLieuController@getXoaTaiLieu', $TaiLieu->id)}}"
													class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</a>
												</td>
												
											
											</tr>
										@endforeach
									</tbody>
								</table>
								{{$tailieu->links()}}
							</div>
						@endif
					
	
@stop