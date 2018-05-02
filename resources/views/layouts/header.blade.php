{{--
<nav>
  <div class="box header">Header</div>
</nav>
--}} {{--
<div class="background-image"></div> --}}
<div class="wrapper header" id="header">
  <header>
    <nav>
      <div class="menu-icon">
        <i class="fa fa-bars fa-2x"></i>
      </div>
      <div class="logo">
        WaterWork
      </div>
      <div class="menu">
        <ul>
          <li><a href="#header"><i class="fas fa-home"></i> Home</a></li>
          <li><a href="#about"><i class="fas fa-question-circle"></i> About</a></li>
          <li><a href="#portfolio"><i class="fa fa-suitcase" aria-hidden="true"></i> Portfolio</a></li>
          <li><a href="#contact"><i class="fas fa-address-card"></i> Skills & Contact</a></li>
          @guest
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
          @else
          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
              Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
          @endguest
        </ul>
      </div>
    </nav>
    <div class="header-content">
      <h1> Web and Android Development </h1>
      <br>
      <a href="#about" class="navigate">
        <div><i class="fas fa-angle-double-down"></i></div>
      </a>
    </div>
  </header>
</div>
