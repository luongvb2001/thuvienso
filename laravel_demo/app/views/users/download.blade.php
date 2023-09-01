
		@extends('index')

		@section('noidung')
			<div class="news_index">
				<h2> Tài liệu nổi bật </h2>
				<?php
					$news_hot = DB::table('TaiLieu')->orderBy('MaTaiLieu', 'DESC')-> paginate(2);
				?>
				@foreach($news_hot as $item_news_hot)
				<div class="news_item_index">
				
					<a href="{{asset("chi-tiet-tin/$item_news_hot->id")}}">{{$item_news_hot->TuaDe}} <br/></a>
					<img src="{{asset("public/images/$item_news_hot->image")}}" />
					<div class="intro_news_index">
						<div class="loaifile">Loại file:</div> {{$item_news_hot->LoaiFile}} | Số trang: {{$item_news_hot->SoTrang}}
					</div>

					<!--<button> <a href="{{asset("link/$item_news_hot->link")}}" class="btn btn-large pull-right"><i class="icon-download-alt"></i> Download </a></button>-->
					
				
		
					<div class="clearfix"></div>
				</div> <!-- end div news_item_index -->
				@endforeach
			</div> <!-- end div news_index -->
			<?php 
				$news = DB::table('TaiLieu')->get();

				$totalNews = count($news);
				//tổng tin trong 1 trang
				$newinPage = 2;
				// Tổng số trang
				$totalPage = ceil($totalNews/$newinPage);
			?>

			@for($i = 1; $i <= $totalPage; $i++ )
				<a href="{{asset("thuvienso/public/home/?page=$i")}}">{{$i}} </a>
			@endfor
		@stop
	