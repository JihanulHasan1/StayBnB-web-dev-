<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staybnb</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/posts.css')}}">

    <link rel="icon" href="img/tab-logo.png">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <div>
        <div class="header">
            <nav id="navBar">
                <img src="img/logo.png" class="logo">
                <ul class="nav-links">
                    <li> @yield('host')</li>
                    
                </ul>
                <ul>
                    <li>@yield('top')</li>
                    <li>@yield('logout')</li>
                </ul>

            </nav>
        </div>

        <div class="posts">
            @yield('posts')
        </div>
    </div>
</body>