<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AddTen</title>

	<link href="/css/app.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/AdminLTE.min.css">
	

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	  <!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="{{ asset('/css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fullcalendar.print.css') }}" media="print">

    <link rel="stylesheet" href="{{ asset('/css/square/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/skin-blue.min.css') }}" >

    <link rel="icon" href="{{ asset('/img/logoo3.png') }}" type="image/x-icon">
	<link rel="shortcut icon" href="{{ asset('/img/logoo3.png') }}" type="image/png" />
  @yield('scripts')

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="skin-blue sidebar-mini">
	<div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>10</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="{{ asset('/img/logo.png') }}" alt="Add Ten" /><b>Add</b>Ten</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
			@if(!Auth::guest())
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/{{Auth::user()->image}}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->username }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                  <img src="/{{Auth::user()->image}}" class="img-circle" alt="User Image">
                    <p>
                      {{ Auth::user()->username }}
                      <small>School Admin</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="{{ url('/account/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
                
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
            @endif
          </div>
        </nav>
      </header>
      @if(Session::has('message'))
        {!! Session::get('message') !!}
      @endif
      @yield('content')
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2015 
          <a href="http://www.pottersmedia.com">
            Pottersmedia Support Services
          </a>.
        </strong> All rights reserved.
      </footer>

	 </div><!-- ./wrapper -->
	<!-- Scripts -->
	<script src="{{ asset('/js/jQuery.js')}}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.slimscroll.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset('/js/fastclick.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('/js/app.min.js') }}"></script>
  <script src="{{ asset('/js/dropzone.js') }}"></script>
	<script src="{{ asset('/js/icheck.min.js') }}"></script>
	<script src="{{ asset('/js/select2.min.js') }}"></script>
	<script src="{{ asset('/js/countdown.jquery.js')}}"></script>
	<script src="{{ asset('/js/paginate.js')}}"></script>
	<script src="{{ asset('/js/custom.js')}}"></script>
	<script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>
</html>
