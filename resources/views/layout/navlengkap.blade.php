<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Laundry.in')</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
    <style>
      footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
  }

  .navbar{padding-left: 50px;}

  .checkbox-hideo{
      opacity: 0;
  }

.checkbox-group {
    display:flex;
	flex-wrap: wrap;
	justify-content: center;
	width: 90%;
	margin-left: auto;
	margin-right: auto;
	max-width: 600px;
  }
  .checkbox-group > * {
	margin: 0.5rem 0.5rem;
  }
  
  .checkbox-group-legend {
	font-size: 1.3rem;
    font-family: sans-serif;
	color: #9c9c9c;
	text-align: center;
	line-height: 1.125;
	margin-bottom: 1.25rem;
  }
  
  .checkbox-input {
	clip: rect(0 0 0 0);
	-webkit-clip-path: inset(100%);
			clip-path: inset(100%);
	height: 1px;
	overflow: hidden;
	position: absolute;
	white-space: nowrap;
	width: 1px;
    opacity: 0;
  }
  .checkbox-input:checked + .checkbox-tile {
	border-color: #5cb85c;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
	color: #5cb85c;
  }
  .checkbox-input:checked + .checkbox-tile:before {
	transform: scale(1);
	opacity: 1;
	background-color: #5cb85c;
	border-color: #5cb85c;
  }
  .checkbox-input:checked + .checkbox-tile .checkbox-icon, .checkbox-input:checked + .checkbox-tile .checkbox-label {
	color: #5cb85c;
  }
  .checkbox-input:focus + .checkbox-tile {
	border-color: #5cb85c;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1), 0 0 0 4px #b5fcbd;
  }
  .checkbox-input:focus + .checkbox-tile:before {
	transform: scale(1);
	opacity: 1;
  }
  
  .checkbox-tile {
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	width: 7rem;
	min-height: 7rem;
	border-radius: 0.5rem;
	border: 2px solid #b5bfd9;
	background-color: #fff;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
	transition: 0.15s ease;
	cursor: pointer;
	position: relative;
  }
  .checkbox-tile:before {
	content: "";
	position: absolute;
	display: block;
	width: 1.25rem;
	height: 1.25rem;
	border: 2px solid #b5bfd9;
	background-color: #fff;
	border-radius: 50%;
	top: 0.25rem;
	left: 0.25rem;
	opacity: 0;
	transform: scale(0);
	transition: 0.25s ease;
	background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='192' height='192' fill='%23FFFFFF' viewBox='0 0 256 256'%3E%3Crect width='256' height='256' fill='none'%3E%3C/rect%3E%3Cpolyline points='216 72.005 104 184 48 128.005' fill='none' stroke='%23FFFFFF' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'%3E%3C/polyline%3E%3C/svg%3E");
	background-size: 12px;
	background-repeat: no-repeat;
	background-position: 50% 50%;
  }
  .checkbox-tile:hover {
	border-color: #5cb85c;
  }
  .checkbox-tile:hover:before {
	transform: scale(1);
	opacity: 1;
  }
  
  .checkbox-icon {
	transition: 0.375s ease;
	color: #494949;
  }
  .checkbox-icon svg {
	width: 3rem;
	height: 3rem;
  }
  
  .checkbox-label {
	color: #707070;
	transition: 0.375s ease;
	text-align: center;
    font-size: smaller;
  }

  </style>
  </head>
<body>
    <div class="wrapper">
        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse">

                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <p>
                                            Akun saya
                                            <b class="caret"></b>
                                        </p>

                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="{{route('logout')}}">Logout</a></li>
                                  </ul>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>

    <div class="sidebar" data-color="orange" data-image="{{asset('img/sidebar-5.jpg')}}">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Laundry.in
                </a>
            </div>

            <ul class="nav">
                @if (Auth()->user()->level=='petugas')
                <li class="nav-item {{ Route::currentRouteName('home') == 'home'  ? 'active' : '' }}">
                    <a href="{{ route('home') }}">
                        <i class="pe-7s-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li class="nav-item {{ Route::currentRouteName('petugas') == 'petugas'  ? 'active' : '' }}">
                    <a href="{{ route('petugas') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Jadwal Angkut Sampah</p>
                    </a>
                </li>
                @elseif (Auth()->user()->level=='user')
                <li class="nav-item {{ Route::currentRouteName('home') == 'home'  ? 'active' : '' }}">
                    <a href="{{ route('home') }}">
                        <i class="pe-7s-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li class="nav-item {{ Route::currentRouteName('user') == 'user' ? 'active' : '' }}">
                    {{-- <li> --}}
                        <a href="{{ route('user') }}">
                            <i class="pe-7s-user"></i>
                            <p>Daftar TPS</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName('user-jadwal') == 'user-jadwal'  ? 'active' : '' }}">
                        <a href="{{ route('user-jadwal') }}">
                            <i class="pe-7s-note2"></i>
                            <p>Jadwal Angkut Sampah</p>
                        </a>
                    </li>
                @else
                <li class="nav-item {{ Route::currentRouteName('home') == 'home'  ? 'active' : '' }}">
                    <a href="{{ route('home') }}">
                        <i class="pe-7s-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li class="nav-item {{ Route::currentRouteName('admin') == 'admin' ? 'active' : '' }}">
                    <li>
                        <a href="{{ route('admin') }}">
                            <i class="pe-7s-user"></i>
                            <p>Data Outlet Laundry</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName('admin-histori') == 'admin-histori'  ? 'active' : '' }}">
                        <a href="{{ route('admin-histori') }}">
                            <i class="pe-7s-note2"></i>
                            <p>Histori Transaksi</p>
                        </a>
                    </li>
                @endif
            </ul>
    	</div>

    </div>
            @section('content')

            @show
   </div>
</div>



<!-- {{-- footer --}} -->
<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Laundry.in</a>, laundry no capek
        </p>
    </div>
</footer>

</body>

<!--   Core JS Files   -->
<script src="{{asset('js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{{asset('js/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('js/bootstrap-notify.js')}}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{asset('js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{asset('js/demo.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to <b>Laundry.in</b> - Sistem Manajemen Laundry"

        },{
            type: 'warning',
            timer: 4000
        });

    });
</script>
</html>
