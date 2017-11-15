<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials._head')
</head>
<body class="body-background">

  @include('partials.nav._manage-nav')

    <div id="app" class="management-area">
        @yield('content')
    </div>

</body>
  <!-- Scripts -->
  @include('partials._scripts')
</html>
