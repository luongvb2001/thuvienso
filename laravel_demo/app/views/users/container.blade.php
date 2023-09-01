
@extends('users.index')
@section('content')


  <div class="col-xs-12 col-sm-9" >
    <div class="list-group">
      <a href="#" class="list-group-item active">Tài liệu</a>
      <div class="list-group-item">
        <div class="row">
           
            @foreach ($paginacion as $tailieu)
              
                <div class="col-xs-6 col-md-3">
                <a href="{{Asset("tranghiensach/container.php?id=$tailieu->id")}}" class="thumbnail"><img src="{{asset("/images/$tailieu->image")}}"></a>
                
                <p>
                  <h4><a href="#">{{$tailieu->TuaDe}}</a> </h4>
                 
                  Loại File: {{$tailieu->LoaiFile}}<br/>
                  Số trang: {{$tailieu->SoTrang}}<br />
                
                  </p>
                  
                  <button> <a href="{{URL::route('downloadfile',$tailieu->link)}}" class="btn btn-large pull-right"><i class="icon-download-alt"> </i> Download </a></button>
                </div>
            @endforeach
          </div>  
        <div class="container">
          {{$paginacion->links()}}
        </div>
    </div>
  </div>
</div>

 @stop