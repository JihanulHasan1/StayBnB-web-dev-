<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staybnb</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/post.css')}}">

    <link rel="icon" href="img/tab-logo.png">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>


<body style="background-color:beige ;">

    <nav class="navBar">
        <div class="">
            <a style="" href="/auth/dashboard/host/{{$user->user_id}}">Host A place</a>
            <a href="/auth/dashboard/popularPlaces/{{$user->user_id}}" class="a3">Popular Places</a>
            <a href="/auth/dashboard" style="color:black;">Back </a>
            <button class="btn btn-primary"><a href="{{ route('auth.logout') }}" style="color:black;">Logout</a></button>
        </div>
    </nav>
    <div class="search">


        <form action="/auth/dashboard/search/{{$user->user_id}}" method="POST">
            @csrf
            <div class="Hotbg">
                <input type="text" name="search" class="Hotbg-txt" placeholder="Search >>>">
                <a href="#" class="Hotbg-btn">
                    <i class="fa fa-search"></i>
                </a>
            </div>
        </form>
    </div>
    </head>

    <body>
        <div>
            @yield('result')
        </div>



    </body>


</body>

</html>