@extends('template.top')

@section('host')

<a href="/auth/dashboard/host/{{ $loggedUser->user_id }}">Host A place</a>
@endsection

@section('top')

<a href="/auth/dashboard/profile/{{ $loggedUser->user_id }} }}" style="color:black;">{{ $loggedUser->name }} </a>

@endsection

@section('logout')
<button class="btn btn-primary"><a href="{{ route('auth.logout') }}" style="color:black;">Logout</a></button>
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