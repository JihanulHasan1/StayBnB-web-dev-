<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staybnb</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/post.css')}}">
    <link rel="stylesheet" href="{{url('css/button.css')}}">
    <link rel="icon" href="img/tab-logo.png">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>


<body>

</body>
<div class="PostContain">

    <div class="postImg">
        <img style="display:flex;margin-left:50%;" src="/img/posts/{{$post->image}}" alt="">
    </div>
    <div class="postDiv">


        <div class="postDiv2">
            <h5 style="padding:1% ;">Post Title : </h5>
            <div> <Label class="content">{{$post->tittle}}</Label></div>
            <h5 style="padding:1% ;">Description : </h5>
            <div> <Label class="content">{{$post->description}}</Label></div>
            <h5 style="padding:1% ;">Area : </h5>
            <div> <Label class="content">{{$post->area}}</Label></div>
            <h5 style="padding:1% ;">Block : </h5>
            <div> <Label class="content">{{$post->block}}</Label></div>
            <h5 style="padding:1% ;">Adress : </h5>
            <div> <Label class="content">{{$post->adress}}</Label></div>
            <h5 style="padding:1% ;">restriction : </h5>
            <div> <Label class="content">{{$post->restriction}}</Label></div>

        </div>
        <div class="postDiv2">

            <h5 style="padding:1% ;">Price : </h5>
            <div> <Label class="content">{{$post->price}}</Label></div>
            <h5 style="padding:1% ;">Advance For: </h5>
            <div> <Label class="content">{{$post->advance}}</Label></div>
            <h5 style="padding:1% ;">Last Date Of Payment : </h5>
            <div> <Label class="content">{{$post->payment_date}}</Label></div>

        </div>

    </div>
    <div class="postDiv3">

        <h5 style="padding:1% ;">Posted by : </h5>
        <div> <Label class="content">{{$post->firstName}} {{$post->lastName}}</Label></div>
        <h5 style="padding-left:1% ;">Phone : </h5>
        <div> <Label class="content">{{$post->phone_no}} </Label></div>
        <h5 style="padding:1% ;">Email: </h5>
        <div> <Label class="content">{{$post->email}} </Label></div>
        <h5 style="padding:1% ;">Posted on: </h5>
        <div> <Label class="content">{{$post->post_date}}</Label></div>
    </div>

    <div style="display:flex;height: 100px;width:100%;margin-left:40%;">
        <form action="" method="POST">
            @csrf
            <input type="hidden" name="yes">
            <Button class="button" style="margin:5%;" formaction="{{ route('post.request1', ['User_id'=>$User_id,'post_id'=>$post->post_id]) }}">Rent out</Button>
            <Button class="button" style="margin:5%;" formaction="{{ route('post.request2', ['User_id'=>$User_id,'post_id'=>$post->post_id]) }}">Request Visit</Button>
        </form>
    </div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
</div>

</html>