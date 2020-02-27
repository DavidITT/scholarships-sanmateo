<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <title>
                    Becas 2020
                </title>
                <link href="{!! asset ('images/logo.png') !!}" rel="icon" type="text/css">
                    <!-- CSRF Token -->
                    <meta content="{{ csrf_token() }}" name="csrf-token">
                        <!-- Scripts -->
                        <script defer="" src="{{ asset('js/app.js') }}">
                        </script>
                        <!-- Fonts -->
                        <link href="//fonts.gstatic.com" rel="dns-prefetch">
                            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
                                <!-- Styles -->
                                <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                                </link>
                            </link>
                        </link>
                    </meta>
                </link>
            </meta>
        </meta>
    </head>
    <body style="background-color: white">
        <div class="container" style="background-color: white">
            <div class="jumpbotron">
                <div class="row">
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-4">
                        <img height="100px" src="{!! asset ('images/logo.png') !!}" width="100%">
                        </img>
                    </div>
                    <div class="col-sm-5">
                        <img height="100px" src="{!! asset ('images/adelante.png') !!}" width="100%">
                        </img>
                    </div>
                    <div class="col-sm-2">
                    </div>
                </div>
                <br>
                    <div id="app">
                        <nav class="navbar navbar-expand-sm bg-light navbar-light navbar-collapse">
                            <div class="container">
                                <a class="navbar-brand" href="{{ url('/') }}">
                                </a>
                                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                                    <span class="navbar-toggler-icon">
                                    </span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <!-- Left Side Of Navbar -->
                                    <ul class="navbar-nav mr-auto">
                                    </ul>
                                    <!-- Right Side Of Navbar -->
                                    <ul class="navbar-nav ml-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">
                                                {{ __('Iniciar Sesión') }}
                                            </a>
                                        </li>
                                        @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">
                                                {{ __('Registrarse') }}
                                            </a>
                                        </li>
                                        @endif
                        @else
                                        <li class="nav-item dropdown">
                                            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button" v-pre="">
                                                {{ Auth::user()->name }}
                                                <span class="caret">
                                                </span>
                                            </a>
                                            <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <br>
                            <br>
                                <main class="py-4">
                                    @yield('content')
                                </main>
                            </br>
                        </br>
                    </div>
                    <br>
                        <br>
                            <footer>
                                <img height="100px" src="{!! asset ('images/abajologo.png') !!}" width="100%">
                                </img>
                            </footer>
                        </br>
                    </br>
                </br>
            </div>
        </div>
    </body>
</html>
