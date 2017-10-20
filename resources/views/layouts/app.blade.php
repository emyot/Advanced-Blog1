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
              <img src="{{ asset('images/devmarketer-logo.png') }}" alt="DevMarketer Logo">
            </a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Learn</a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
            <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
          </div>
        </div>
      </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
