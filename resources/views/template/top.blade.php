<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staybnb</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/post.css')}}">

    <link rel="icon" href="">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <div>
        <div class="header">
            <nav id="navBar">
                <img src="{{url('img/tab-logo.png')}}" class="logo">
             
                    @yield('top')
                    
                

            </nav>
            <H1 style="color:azure;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Welcome to StayBnB</H1>

        </div>

        <div class="">
            @yield('posts')
        </div>
    </div>
</body>