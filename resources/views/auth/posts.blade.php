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
    <div style="margin: 5%;">
    <div class="posts">
    @foreach($allPosts as $p)
   
        <div class="post" style="width: 18rem;">
            <img src="/img/posts/{{$p->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tittle: {{ $p->area }}</h5>
                <p class="card-text">Posted By: {{ $p->description }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Posted By: {{ $p->firstName }} {{ $p->lastName }}</li>
                <li class="list-group-item">Price: {{ $p->price }}</li>
                <li class="list-group-item">Block: {{ $p->block }}</li>
                <li class="list-group-item">Restiction : {{ $p->restriction }}</li>
                <li class="list-group-item">Posted on : {{ $p->post_date }}</li>
            </ul>
        </div>
  
    @endforeach
    </div>
    </div>
<body>