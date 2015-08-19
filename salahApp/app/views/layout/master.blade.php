<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    
    <link type="text/css" href="{{ secure_url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- you need to include the shieldui css and js assets in order for the components to work -->
    <link rel="stylesheet" type="text/css" href="{{ secure_url('assets/css/shieldui-all.min.css') }}" />
    
    <link id="gridcss" rel="stylesheet" type="text/css" href="{{ secure_url('assets/css/all.min.css') }}" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="{{ secure_url('assets/css/bootstrap-timepicker.min.css') }}" />

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    .rounded {
        border-radius: 5px;
    }
    
    .long {
        width:110px;
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ secure_url('user') }}">Salah manager</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  @if(Auth::check())
                    <li>
                        <a href="{{ secure_url('user/create') }}">Create User</a>
                    </li>
                    <li>
                        <a href="{{ secure_url('salah/preferences') }}">Preferences</a>
                    </li>
                    <li>
                        <a href="{{ secure_url('user/logout') }}">Logout</a>
                    </li>
                  @else
                    <li>
                        <a href="{{ secure_url('user') }}">Login</a>
                    </li>
                  @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

      @if(Auth::check())
       
        @section('content')
        Default content
        @show
      @else
        <div class="container">
          <h2>LOGIN</h2>
          {{ Session::get('login_error') }}
          {{ Form::open(array('url' => secure_url('user/login'))) }}
            <div class="row">
              <span>
                  <label class="col-span3" for="username">Username:</label>
              </span>
              <span>
                  <input class="col-span4" type="text" name="username"/>
              </span>
            </div>
            <div class="row">
              <span class="col-span3">
                  <label for="password">Password:</label>
              </span>
              <span class="col-span3">
                  <input type="password" name="password"/>
              </span>
            </div>
            <input type="submit" value="Login"/>
          {{ Form::close() }}
        </div>
      @endif

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="{{ secure_url('assets/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ secure_url('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_url('assets/js/shieldui-all.min.js') }}"></script>
    <script src="{{ secure_url('assets/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ secure_url('assets/js/salah.js') }}"></script>
    
    
    @section('script')
    @show
    
    <script type="text/javascript">
      $(function ($) 
      {
        $("#switch1").shieldSwitch({
            onText: "ON",
            offText: "OFF"
        });
        $("#switch2").shieldSwitch({
            onText: "ON",
            offText: "OFF"
        });
        $("#switch3").shieldSwitch({
            onText: "Yes, save it",
            width:"200px",
            offText: "No, delete it",
            cls: "long",
        });
        $("#switch4").shieldSwitch({
            onText: "Yes",
            offText: "No",
            cls: "rounded",
        });
        $("#switch5").shieldSwitch({
            onText: "Yes",
            offText: "No",
            cls: "rounded",
        });
      });
    </script>

</body>

</html>
