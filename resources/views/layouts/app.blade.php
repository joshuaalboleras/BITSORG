<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('styles/index.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"> <!-- AOS CSS -->

  @hasSection('styles')
    @yield('styles')
  @endif
</head>

<body>
  <div id="app">
    @hasSection('nav')
    @yield('nav')
  @else
  <nav>
    <div class="nav-container">
    <img src="https://ucarecdn.com/c630466c-0578-4d87-8f48-28e3f95cd5f4/-/format/auto/" alt="BITS Logo"
      class="nav-logo">

    <div class="hamburger-menu" id="hamburgerMenu">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="nav-links" id="navLinks">

      @auth
      <a href=" {{route('user.home')}} ">Home</a>
      <a href="{{ route('about.us') }}">About Us</a>
      <form action="{{ route('logout') }}" method="post">
      @csrf
      <button id="logout" style="border: none;color:#0066ff; background-color: white;">Logout |
      {{ auth()->user()->name  }}</button>
      </form>
    @endauth

      @guest
      <a href=" {{ route('login') }} ">Login</a>
      <a href=" {{ route('register') }} ">Register</a>
      <a href="{{ route('about.us') }}">About Us</a>
    @endguest

    </div>
    </div>
  </nav>
@endif

    <main>
      @yield('content')
    </main>
  </div>


  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const hamburgerMenu = document.getElementById('hamburgerMenu');
      const navLinks = document.getElementById('navLinks');

      hamburgerMenu.addEventListener('click', function () {
        hamburgerMenu.classList.toggle('active');
        navLinks.classList.toggle('active');
      });

      // Initialize AOS
      AOS.init({
        duration: 1000, // Animation duration in milliseconds
        once: true, // Animation runs only once
      });
    });
  </script>


  @hasSection('scripts')
    @yield('scripts')
  @endif

</body>

</html>