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
    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>

        </style>
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
                                <button type="submit"  style="padding-left: 20px;" class="btn btn-primary mb-3">Confirm Name</button>
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
                                <button type="submit"  style="padding-left: 20px;" class="btn btn-primary mb-3">Confirm Email</button>
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
                                <button type="submit"  style="padding-left: 20px;" class="btn btn-primary mb-3">Confirm Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <button class="accordion">Section 2</button>
            <div class="panel">
            </div>

            <button class="accordion">Section 3</button>
            <div class="panel">
            </div>
        </div>
        <script src="{{ url('js/accordion.js') }}"></script>
    </body>

    </html>