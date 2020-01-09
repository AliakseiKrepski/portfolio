<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <title>Шаблоны сайтов</title>
  <link rel="stylesheet" href="style.css" id="styles">
  <script src="checkedMobile.js"></script>

</head>
<body>
  <div class='page'>
    <header class="" id='header'>
      <div class="wrap">
          <div class="logo">
            <img src="img/BSUIR_gerb.png">
            <h1>Шаблоны сайтов</h1>
          </div>
          <a href="#big" id="big">Большие</a>
          <a href="#average">Средние</a>
          <a class="small" href="#small">Маленькие</a>
      </div>
      <div class="user_auth">
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
      </div>
    </header>
    <div class="container">
  @yield('content')
    </div>

    <footer>
      <p>© ЦИИР БГУИР, 2002-2019</p>
    </footer>

    <img src="img/toTop.png" class="scrol_botton" id="scrol_botton">

  </div>

  <script src="scripts.js"></script>
</body>
</html>
