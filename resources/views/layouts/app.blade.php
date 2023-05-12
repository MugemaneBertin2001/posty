<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <title>Posty</title>
    </head>
<body>
    <nav class="bg-light">
        <div>

            <ul>
                <li> <a href="">Home</a> </li>
                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li><a href="{{route('posts')}}">Posts</a>
                </li>
            </ul>
            <ul>
                @auth
                    <li> <a href=""></a>{{ auth()->user()->name}} </li>
                    <li>
                         <a  href="{{route('logout')}}">Logout</a>
                    </li>
                       
                @endauth
                @guest
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a>
                    
                @endguest
                    
              
                </li>
            </ul>
        </div>

    </nav>
    
    @yield('content')
    <footer class="p-8 bg-light mt-8">  
</body>

</html>