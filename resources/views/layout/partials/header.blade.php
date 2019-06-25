<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="{{ url('/home') }}">EasyRent.dk</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="#band">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">About</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li>
          </ul>
        </li>
        @if (Route::has('login'))
          @auth
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php $user=Auth::user(); echo $user->name;  ?></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/logout') }}">Logout</a></li>
              </ul>
            </li>
          @else
              <li><a href="{{ route('login') }}">Login</a></li>

              @if (Route::has('register'))
                  <li><a href="{{ route('register') }}">Register</a></li>
              @endif
          @endauth
        @endif
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>