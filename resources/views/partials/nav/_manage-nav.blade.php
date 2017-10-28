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
            Hello {{ Auth::user()->name }}
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
            <a class="navbar-item" href="{{ route('manage.dashboard') }}">
              <span class="icon is-small p-r-10">
                <i class="fa fa-tasks" aria-hidden="true"></i>
              </span>
              Manage
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
</nav><!-- Main Nav -->

<div class="side-menu"><!-- This class is for scss customization -->
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{ route('manage.dashboard') }}">Dashboard</a></li>
    </ul>

    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li><a href="#">Manage Users</a></li>
      <li><a href="#">Roles &amp; Permissions</a></li>
    </ul>
  </aside>
</div>
