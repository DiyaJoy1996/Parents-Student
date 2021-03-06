<div class="container">




    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
            <meta name="author" content="GeeksLabs">
            <meta name="keyword"
                content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
            <link rel="shortcut icon" href="img/favicon.png">

            <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

            <!-- Bootstrap CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <!-- bootstrap theme -->
            <link href="css/bootstrap-theme.css" rel="stylesheet">
            <!--external css-->
            <!-- font icon -->
            <link href="css/elegant-icons-style.css" rel="stylesheet" />
            <link href="css/font-awesome.css" rel="stylesheet" />
            <!-- Custom styles -->
            <link href="css/style.css" rel="stylesheet">
            <link href="css/style-responsive.css" rel="stylesheet" />

            <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
            <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

            <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
        </head>

        <body class="login-img3-body" style="background: url(/img/bg-1.jpg) no-repeat center center fixed;">

            <div class="container">
                <form class="login-form" method="POST" action="{{route('users.login')}}">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="login-wrap">
                        <p class="login-img"><i class="icon_lock_alt"></i></p>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input name="email" type="text" class="form-control" placeholder="Username" autofocus>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                        <label class="checkbox">
                            <input name="rememberme" type="checkbox" value="remember-me"> Remember me
                            <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
                        </label>
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                        <button class="btn btn-info btn-lg btn-block" href="{{route('users.create')}}"
                            disabled>Signup</button>
                    </div>
                </form>
                <div class="text-right">
                    <div class="credits">
                        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>


        </body>

    </html>






    <!-- <div class="row justify-content-center">
        <div class="col-md-8">

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('users.login')}}">
                        @csrf

                        <div class=" form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
</div>