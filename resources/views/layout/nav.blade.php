<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome</span></a>
                </li>
                @auth
                
                    <li class="nav-item">
                        <a class="nav-link cursor-pointer" onclick="event.preventDefault(); document.getElementById('logout').submit();">Logout</span></a>
                        {{ Form::open(['route' => 'logout', 'method' => 'post', 'id' => 'logout']) }}
                        {{ Form::close() }}
                    </li>

                @else

                    <li class="nav-item dropdown {{ Request::is('login') ? 'active' : '' }} {{ Request::is('register') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ env('APP_NAME') }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                            <a class="dropdown-item {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                        </div>
                    </li>

                @endauth
            </ul>
        </div>
    </div>
</nav>