<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staybnb</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="icon" href="img/tab-logo.png">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <div class="heaer">
        <nav id="navBar">
            <img style="scale:300%;" src="/img/logo.png" class="logo">
                <li><a href="" class="a1">Host a Place</a> </li>
                <li><a href="{{url('/search')}}" class="a2">Search for Rent</a> </li>
                <li><a href="listing.html" class="a3">Popular Places</a> </li>
            </ul>
        </nav>
        <div class="">

            <div style="margin: 5%; background-color: #ffffff;">
                <div class="posts">
                    @foreach($result as $r)
                    <button></button>
                    <div class="post" style="width: 18rem;">
                        <img src="/img/posts/{{$r->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tittle: {{ $r->area }}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Posted By: {{ $r->firstName }} {{ $r->lastName }}</li>
                            <li class="list-group-item">Price: {{ $r->price }}</li>
                            <li class="list-group-item">Block: {{ $r->block }}</li>
                            <li class="list-group-item">Restiction : {{ $r->restriction }}</li>
                            <li class="list-group-item">Posted on : {{ $r->post_date }}</li>
                        </ul>
                    </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</html>