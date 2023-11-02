<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap-grid.css') }}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('main') }}">Main</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('register.create') }}">Register</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div>
        @yield('content')
    </div>
</div>
</body>
</html>
