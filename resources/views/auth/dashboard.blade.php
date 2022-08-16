@extends('template.top')

@section('top')

<div class="navi">
<a href="/auth/dashboard/host/{{$loggedUser->user_id}}">Host A place</a>
<a href="/auth/dashboard/search/{{$loggedUser->user_id}}" class="a2">Search for Rent</a>
<a href="/auth/dashboard/popularPlaces/{{$loggedUser->user_id}}" class="a3">Popular Places</a>
<a href="/auth/dashboard/profile/{{ $loggedUser->user_id}}" style="color:black;">{{ $loggedUser->name }} </a>
<button class="btn btn-primary"><a href="{{ route('auth.logout') }}" style="color:black;">Logout</a></button>
</div>
@endsection

@section('cards')
<div class="container">
    <div class="cards">

        @foreach($dash as $d)
        <div class="card" style=" width: 18rem;">
            <img src="{{ $d->url }}" class="card-img-top" style="height:100%;width:100%;" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $d->location }}</h5>
                <p class="card-text">A new room/house in {{ $d->location }}</p>
                <a href="{{ '/index/'.$d->parmalink }}" class="btn btn-primary">Show All</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection