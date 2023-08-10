<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <title>Posty</title>
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('posts') }}">Posts</a>
              </li>
            </ul>
      
            <ul class="navbar-nav ml-auto">
              @auth
              <div class='row'>
                  <div class="col-sm-12">
                      <li class="nav-item toggler"  data-toggle="collapse" data-target="#logout">
                        <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
                      </li>
                      <li class="nav-item">
                        <a  href="{{route('logout')}}">Logout</a>
                   </li>
                  </div>
                  <div class="col-sm-12 stick-top">
                      <li class="nav-item collapse collapse" id="logout">
                        <a class="nav-link" href="{{ route('logout') }}">
                            Logout</a>
                      </li>
                  </div>
              </div>
              @endauth
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>
              @endguest
            </ul>
          </div>
        </div>
      </nav>
    <main>
        @yield('content')

    </main>
    

</body>

</html>