<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
        <title>Soft7011</title>

        <!-- Scripts -->
        <!-- Bootstrap CSS -->
        <link href=" {{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="{{ asset('css/elegant-icons-style.css') }} " rel="stylesheet" />
        <link href=" {{ asset('css/font-awesome.css') }}" rel="stylesheet" />
        <!-- Custom styles -->
        <link href=" {{ asset(' css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- {{ config('app.name', 'Soft') }} -->
                        Soft7011
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        @if(session('loggedIn'))
                        <ul class="navbar-nav mr-auto">


                            @if(session('role')=='Parent')

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('parents.chat') }}">{{ __('Chat') }}</a>
                            </li>
                            @endif



                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('feedbacks.index') }}">{{ __('Feedback') }}</a>
                            </li> -->

                            @if(session('role')!=='Parent')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('homeworks.index') }}">{{ __('Homework') }}</a>
                            </li>
                            @endif
                            @if(session('role')!=='Student')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('messages.index') }}">{{ __('Messages') }}</a>
                            </li>
                            @endif
                        </ul>
                        @endif

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->


                            @if(!session('loggedIn'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">{{ __('Login') }}</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.create') }}">{{ __('Register') }}</a>
                            </li>

                            @endif

                            @if(session('loggedIn'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.logout') }}">{{ __('Logout') }}</a>
                            </li>



                            @endif



                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>

</html>