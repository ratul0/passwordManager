<html>
<head>
	<meta charset="UTF-8">
	<title>{{$title}}</title>
	{{HTML::style('/css/bootstrap.min.css')}}
	{{HTML::style('/css/bootswatch.min.css')}}
  	{{HTML::style('/css/main.css')}}
	{{HTML::script('/js/jquery.min.js')}}
	{{HTML::script('/js/bootstrap.min.js')}}
	{{HTML::script('/js/bootswatch.js')}}



</head>
<body>
	

		<div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                  {{ HTML::linkRoute('accounts.index','Password Portal',$parameters =[],$attributes=['class'=>'navbar-brand']) }}
                </div>
                <div class="navbar-collapse collapse navbar-inverse-collapse">
                  <ul class="nav navbar-nav">
                    
                    
                    @if(Auth::check())
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounts <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li>{{ HTML::linkRoute('accounts.index','View Accounts') }}</li>
                        <li>{{ HTML::linkRoute('accounts.create','Add Accounts') }}</li>

                      </ul>
                    </li>




                    <li>{{ HTML::linkRoute('adminchange','Admin') }}</li>
                    @endif
                    
                    
                    
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    @if(!Auth::check())
                    
                    
                    <li>{{ HTML::linkRoute('login','Login') }}</li>
                    @else
                        
                       <li>{{ HTML::linkRoute('logout','Logout ('.Auth::user()->email.')') }}</li> 
                    @endif
                  </ul>
                </div><!-- /.nav-collapse -->
              </div><!-- end navbar -->


    <div id="container">
              <div id="content">
              	@if(Session::has('message'))
              		<p id="message">{{Session::get('message')}}</p>
              	@endif

              	@yield('content')
              </div> <!-- end content -->


              
              <footer>
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                      
                      <hr>
                      <p>Web Engineering Project <br/> &copy; {{date('Y')}}</p>
                    </div>
                  </div>
                </div>
              </footer><!-- end footer -->



	</div> <!-- end container -->
	
</body>
</html>