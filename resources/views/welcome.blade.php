<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="welcome.css">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
        <title>Rotaract Mora - Membership</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>

        <nav class="navbar fixed-top navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="logo.png" alt="logo" width="150px"></a>

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link bar" href="#">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link bar myBtn" id="myBtn" href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Login</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <img src="logo.png" alt="logo" width="500px">
                <div class="title m-b-md">
                    Membership Portal
                </div>

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="loginmodal-container">
                            <h1>Login to Your Account</h1><br>
                            <form>
                                <input type="email" name="user" placeholder="Username" required>
                                <input type="password" name="pass" placeholder="Password" required>
                                <input type="submit" name="login" class="login loginmodal-submit btn btn-primary" value="Login">
                            </form>

                            <div class="login-help">
                                <a href="#" class="forgot">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="links">
                    <a href="#" class="btn btn-lg btn-primary no-outline myBtn">Login</a>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function(){
                $(".myBtn").click(function(){
                    $("#myModal").modal();
                });
            });
        </script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    </body>

</html>
