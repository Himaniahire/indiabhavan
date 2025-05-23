<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>India Bhavan</title>

    <link rel="shortcut icon" href="{{asset('images/bhavan/India-logo.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/bhavan/India-logo.png')}}">

    <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <img class="img-fluid logo-dark mb-2" src="{{asset('images/bhavan/India-logo.png')}}"
                    alt="Logo">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            @include('flash_data')
                            <form method="POST" action="{{ route('userlogin') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <input type="password" name="password" class="form-control pass-input">
                                        <span class="fas fa-eye toggle-password"></span>
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-block btn-success w-100" type="submit" style="background-color: #3E350C">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('admin_assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('admin_assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('admin_assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('admin_assets/js/script.js') }}"></script>
</body>

</html>
