 <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Thư viện số</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="{{Asset('container')}}">Home</a></li>
              <li><a href="{{Asset('about')}}">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="{{Asset('upload')}}">Upload</a></li>
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
              {{Form::open(array
                    (
                      'action'=>'HomeController@container',
                      'method'=>'GET',
                      'role'=>'form',
                      'class'=>'form-inline'
                    ))
              }}
              {{Form::input('text', 'buscar', Input::get('buscar'), array('class'=>'form-control'))}}
              {{Form::input('submit', null, 'Search', array('class'=>'btn btn-default'))}}
              {{Form::close()}}
              <!--
              <form method="get" class="navbar-form navbar-right" action="{{ URL::action('SearchController@getSearch')}}">
                <input type="text" name="keyword" class="form-control" placeholder="Search...">
                <button type="submit" value="submit" class="btn btn-default">Search</button>
                {{Form::token()}}
              </form>
              -->
            </ul>

			</form>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>