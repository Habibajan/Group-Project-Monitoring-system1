{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url(img_flwr.gif), url(paper.gif);
                background-position: right bottom, left top;
                background-repeat: no-repeat, repeat;
                padding: 15px;                
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Group Project Monitoring System
                </div>

            </div>
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project Monitoring</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      margin-top:1px;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    .jumbotron{
       background-image: url("https://thedailybytetwentytwelve.files.wordpress.com/2012/08/citizenjournalism.jpg");
       
    }
    .navbar-inverse{
      background-color:#00b3b3;
      border-color:#00b3b3;
      color:white;
    }
    .navbar-nav{
      color:white;
    }
    .navbar-brand{
      height:80px;
    }
    .navbar-inverse .navbar-brand{
            color:white;

    }
    .navbar-inverse .navbar-nav > li > a{
      color:white;
    font-size:15px;
    }
    .navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:focus, .navbar-inverse .navbar-nav > .active > a:hover{
      background-color: #009999;
      color:#fff;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header" style="color:green;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Project Monitoring</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        {{-- <li><a href="#">Gallery</a></li> --}}
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       @if (Route::has('login'))
        <li>
         @auth
             <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"> Login</span> </a></li>
                        <li>  @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                    </li> 
      </ul>
      @endif
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Welcome to</h1>      
    <p>Project Monitoring System</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Group Activities</h3><br><br>
  <div class="row">
    <div class="col-sm-3">
      <p>First project</p>
      <img src="https://thedailybytetwentytwelve.files.wordpress.com/2012/08/handshake.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Second project</p>
      <img src="https://thedailybytetwentytwelve.files.wordpress.com/2012/08/handshake.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Third project</p>
      <img src="https://thedailybytetwentytwelve.files.wordpress.com/2012/08/handshake.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Fourth project</p>
      <img src="https://thedailybytetwentytwelve.files.wordpress.com/2012/08/handshake.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

{{-- <div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br> --}}

<footer class="container-fluid text-center">
  <p>Group Project Monitoring System</p>
</footer>

</body>
</html>