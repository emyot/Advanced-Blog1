<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
        <div class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="{{ 'home' }}">
              <img src="{{ asset('images/onepiece-logo.png') }}" alt="DevMarketer Logo">
            </a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Learn</a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
          </div>

          <div class="navbar-end">
            @if(Auth::guest())
              <a href="#" class="navbar-item is-tab">Login</a>
              <a href="#" class="navbar-item is-tab">Sign Up</a>
            @else
              <div class="dropdown is-right is-hoverable">
                <div class="dropdown-trigger">
                  <a class="navbar-item is-tab" aria-haspopup="true" aria-controls="dropdown-menu">
                    <span>Hello Slacker</span>
                    <span class="icon is-small">
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </span>
                  </a>
                </div>
                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                  <div class="dropdown-content">
                    <a href="#" class="dropdown-item">
                      <span class="icon is-small">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                      </span>
                      Profile
                    </a>
                    <a href="#" class="dropdown-item">
                      <span class="icon is-small">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                      </span>
                      Notifications
                    </a>
                    <a href="#" class="dropdown-item">
                      <span class="icon is-small">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                      </span>
                      Settings
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                      <span class="icon is-small">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                      </span>
                      Logout
                    </a>
                  </div>
                </div>
              </div>
            @endif
          </div>
        </div>
      </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
