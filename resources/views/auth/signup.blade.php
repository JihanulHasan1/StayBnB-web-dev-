<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{url('fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{url('css/signupstyle.css')}}">

</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <!-- FORM -->
                        <form method="POST" autocomplete="nope" action="{{route('auth.store')}}" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="search" name="Uname" id="Username" placeholder="Your Name" />
                                <span class="text-danger" style="color: red;">@error('Uname'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="Uemail" id="email" placeholder="Your Email" />

                                <span class="text-danger" style="color: red;">@error('Uemail'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" autocomplete="new-password" name="Upass" id="pass" placeholder="Password" />
                               
                               <!-- Another way of showing error message -->
                                @error('Upass')
                                <div class="alert alert-danger"  style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                                @error('term')
                                <div class="alert alert-danger"  style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <a href="{{url('/staybnb')}}">
                            <figure><img src="/img/signup.png" alt="sing up image"></figure>
                        </a>
                        <a href="{{ route('auth.home') }}" class="">I am already member</a>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/autocompletestop.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>