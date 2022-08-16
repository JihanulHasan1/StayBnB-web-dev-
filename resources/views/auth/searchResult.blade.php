@extends('auth.search')



@section('result')
<div class="container">

<div style="margin: 5%;">
    <div class="posts">
        @foreach($result as $r)

        <div class="post" style="width: 18rem;">
            <img src="/img/posts/{{$r->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tittle: {{ $r->area }}</h5>
                <p class="card-text">Posted By: {{ $r->description }}</p>
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
@endsection