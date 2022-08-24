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
</head>

<body>

    <head>
        <div>
            <nav id="navBar">
                <img style="scale:300%;" src="/img/logo.png" class="logo">
                <ul class="">
                    <li><a href="{{route('auth.host',['id'=>$loggedUser->user_id]) }}" class="a1">Host a Place</a> </li>
                    <li><a href="{{url('/search')}}" class="a2">Search for Rent</a> </li>
                    <li><a href="listing.html" class="a3">Popular Places</a> </li>
                </ul>
                <button class="button-13" onclick="">
                    <a href="{{ route('auth.logout') }}" class="">Sign out</a>
                </button>
        </div>
    </head>

    <body>
        <div class="container" style="margin:5%;">
            <h2>Profile Settings :</h2>

            <button class="accordion">Edit Profile</button>
            <div class="panel">
                <div class="form">
                    <form class="row g-3">
                        <div class="col-auto">
                            <label for="staticEmail2" class="visually-hidden">Email</label>
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Old Name : {{ $loggedUser->name }}">
                        </div>
                        <div class="input">

                            <div class="col-auto">
                                <label for="inputPassword2" class="visually-hidden"></label>
                                <input type="password" class="form-control" id="inputPassword2" placeholder="Edit Name">
                            </div>
                            <div class="col-auto">
                                <button type="submit" style="padding-left: 20px;" class="btn btn-primary mb-3">Confirm Name</button>
                            </div>
                        </div>
                        <div class="col-auto">
                            <label for="staticEmail2" class="visually-hidden">Name</label>
                            <input type="text" style="padding-bottom:10px;" readonly class="form-control-plaintext" id="staticEmail2" value="Old Email: {{ $loggedUser->email }} ">
                        </div>
                        <div class="input">

                            <div class="col-auto">
                                <label for="inputPassword2" class="visually-hidden">Email</label>
                                <input type="password" class="form-control" id="inputPassword2" placeholder="Edit Email ">
                            </div>
                            <div class="col-auto">
                                <button type="submit" style="padding-left: 20px;" class="btn btn-primary mb-3">Confirm Email</button>
                            </div>
                        </div>
                        <div class="col-auto">
                            <label for="staticEmail2" class="visually-hidden">Password</label>
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Old Password : ">
                        </div>
                        <div class="input">

                            <div class="col-auto">
                                <label for="inputPassword2" class="visually-hidden">Password</label>
                                <input type="password" class="form-control" id="inputPassword2" placeholder=" Edit Password">
                            </div>
                            <div class="col-auto">
                                <button type="submit" style="padding-left: 20px;" class="btn btn-primary mb-3">Confirm Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <button class="accordion">Show All Posts</button>
            <div class="panel">
                <div class="postDi">
                    <div class="pos" style="display: flex;flex-wrap:wrap;">
                        @foreach($result as $r)
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

                        @endforeach
                    </div>
                </div>
            </div>

            <button class="accordion">Show Your Requests</button>
            <div class="panel">
                <div class="postDi">
                    <div class="pos" style="display: flex;flex-wrap:wrap;">

                        @foreach($request as $r)
                        
                   
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
                                <li style="background-color:aqua;text-align:center;">Request Type : {{ $r->request_type }}</li>

                            </ul>

                        </div>
                  
                        @endforeach
                    </div>
                </div>
            </div>
            <button class="accordion"> Show Customer Requests<i style="margin-left:200px;scale:100px;" class="fas fa-bell"> {{count($requestbyothers)}}</i></button>
            <div class="panel">

            </div>
        </div>


        </div>
        <script src="{{ url('js/accordion.js') }}"></script>
    </body>

</html>