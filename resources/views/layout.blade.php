<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>toDo</title>
        <link rel="stylesheet" href="{{ asset('/css/front.css') }}"/>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,500&amp;subset=cyrillic" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}"/>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top text-uppercase">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="{{ route('index')}}">
                            <img src="/img/logo.png" alt="" width="80">
                        </a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav ">
                            <li class="{{ Request::is('tasks*')?'active':'' }}"><a href="{{ route('tasks.index')}}">tasks</a></li>
                            <li class="{{ Request::is('about')?'active':'' }}"><a href="{{ route('about')}}">about</a></li>
                            <li class="{{ Request::is('contact')?'active':'' }}"><a href="{{ route('contact')}}">contacts</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li class="{{ Request::is('login')?'active':'' }}"><a href="{{ route('login') }}">Login</a></li>
                                <li class="{{ Request::is('register')?'active':'' }}"><a href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="dropdown my-username">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>

                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </header>

        @yield('content')

        <footer class="footer">
            <div class="container">
                <div class="footer-content">
                    <p><span class="smile">&#x263a;</span> just have fun &#160; | &#160; photo from <span class="footer-text">yandex</span> &#160; | &#160; made by <span class="footer-text">ArtLoban</span></p>
                </div>
            </div>
        </footer>

    <script src="{{ asset('/js/front.js') }}"></script>
    </body>
</html>
