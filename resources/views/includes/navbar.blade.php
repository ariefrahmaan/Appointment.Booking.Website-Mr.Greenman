<!-- Navbar -->
<div class="container">
  <nav class="row navbar navbar-expand-lg navbar-light bg-white">
    <a href="{{ route('home') }}" class="navbar-brand">
      <img src="{{ url('#') }}" alt="" />
      ManusiaHijauu
    </a>
    <button
      class="navbar-toggler navbar-toggler-right"
      type="button"
      data-toggle="collapse"
      data-target="#navb"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navb">
      <ul class="navbar-nav ml-auto mr-3">
        <li class="nav-item mx-md-2">
          <a href="/dashboard" class="nav-link active">Booking</a>
        </li>
        <li class="nav-item mx-md-2">
          <a href="{{ route('blog') }}" class="nav-link">Blog</a>
        </li>
        <li class="nav-item mx-md-2">
          <a href="#location" class="nav-link">Lokasi</a>
        </li>
        <li class="nav-item dropdown">
          <a
            href="#"
            class="nav-link dropdown-toggle"
            id="navbardrop"
            data-toggle="dropdown"
          >
            Sosial Media
          </a>
          <div class="dropdown-menu">
            <a href="https://www.tiktok.com/@manusiahijauu" target="blank" class="dropdown-item">TikTok</a>
            <a href="https://www.instagram.com/manusiahijauu/" target="blank" class="dropdown-item">Instagram</a>
            <a href="https://www.youtube.com/@mr.greenman/featured" target="blank" class="dropdown-item">Youtube</a>
          </div>
        </li>
      </ul>

    @guest
      <!-- Mobile Button -->
      <form class="form-inline d-sm-block d-md-none">
        <button class="btn btn-login my-2 my-sm-0" type="button"
                onclick="event.preventDefault(); location.href='{{ url('login') }}';">
          Masuk
        </button>
      </form>

      <!-- Desktop Button -->
      <form class="form-inline my-2 my-lg-0 d-none d-md-block">
        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                onclick="event.preventDefault(); location.href='{{ url('login') }}';">
          Masuk
        </button>
      </form>
    @endguest


    @auth
  <!-- Mobile Button -->
  <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
    @csrf
    <div class="dropdown">
      <button class="btn btn-login my-2 my-sm-0 dropdown-toggle" type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->name }}
      </button>
      <div class="dropdown-menu" aria-labelledby="userDropdown">
        <div class="dropdown-divider"></div>
        <button class="dropdown-item" type="submit">Keluar</button>
      </div>
    </div>
  </form>

  <!-- Desktop Button -->
  <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
    @csrf
    <div class="dropdown">
      <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4 dropdown-toggle" type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->name }}
      </button>
      <div class="dropdown-menu" aria-labelledby="userDropdown">
        <div class="dropdown-divider"></div>
        <button class="dropdown-item" type="submit">Keluar</button>
      </div>
    </div>
  </form>
@endauth

    </div>
  </nav>
</div>
