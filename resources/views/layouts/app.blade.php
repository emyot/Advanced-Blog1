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
<body class="body-background">
    <div id="app">
      <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand is-active">
          <a class="navbar-item" href="{{ route('home') }}">
            <img src="{{ asset('images/onepiece-logo.png') }}" alt="DevMarketer Logo">
          </a>
          <button id="nav-button" class="button navbar-burger" data-target="navMenu" type="button">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
        <div class="navbar-menu" id="navMenu">
          <div class="navbar-start">
            <a class="navbar-item is-tab"href="#">Learn</a>
            <a class="navbar-item is-tab"href="#">Discuss</a>
            <a class="navbar-item is-tab"href="#">Share</a>
          </div>
          <div class="navbar-end">
            @if(Auth::guest())
              <a class="navbar-item is-tab" href="{{ route('login') }}">Login</a>
              <a class="navbar-item is-tab" href="{{ route('register') }}">Join the Community</a>
            @else
              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                  Hello Slacker
                </a>
                <div class="navbar-dropdown is-right">
                  <a class="navbar-item" href="#">
                    <span class="icon is-small p-r-10">
                      <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </span>
                    Profile
                  </a>
                  <a class="navbar-item" href="#">
                    <span class="icon is-small p-r-10">
                      <i class="fa fa-bell" aria-hidden="true"></i>
                    </span>
                    Notifications
                  </a>
                  <a class="navbar-item" href="#">
                    <span class="icon is-small p-r-10">
                      <i class="fa fa-cog" aria-hidden="true"></i>
                    </span>
                    Settings
                  </a>
                  <hr class="dropdown-divider">
                  <a class="navbar-item" href="{{ route('logout') }}">
                    <span class="icon is-small p-r-10">
                      <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </span>
                    Logout
                  </a>
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

    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function () {

        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

          // Add a click event on each of them
          $navbarBurgers.forEach(function ($el) {
            $el.addEventListener('click', function () {

              // Get the target from the "data-target" attribute
              var target = $el.dataset.target;
              var $target = document.getElementById(target);

              // Toggle the class on both the "navbar-burger" and the "navbar-menu"
              $el.classList.toggle('is-active');
              $target.classList.toggle('is-active');

          });
        });
      }

      });
    </script>
</body>
</html>
