<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset">
                <h4>Login</h4>
                <form action="" methid="post"></form>
                <div class="form-group">
                    <label for="name"></label>
                    <input type="text" class="form-control" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="Pasword"></label>
                    <input type="password" class="form-control" placeholder="Enter Email">
                </div>
                <div style="margin-top :30px;">
                <button type="btn btn-block btn-primary">Sign in</button>
                <br>
                <a href="{{ route('auth.register')}}">I dont have an account</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>