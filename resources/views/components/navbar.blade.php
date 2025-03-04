<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">iLanding</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('beranda') }}" class="active">Beranda</a></li>
          <li><a href="{{ route('profile') }}">Profile</a></li>
          <li class="dropdown"><a href="#"><span>Program dan Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('program') }}">Program</a></li>
              <li><a href="{{ route('layanan') }}">Layanan</a></li>
            </ul>
          </li>
          <li><a href="{{ route('produkJasa') }}">Produk atau Jasa</a></li>
          <li><a href="{{ route('galeri') }}">Galeri</a></li>
          <li><a href="{{ route('berita') }}">Berita</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.html#about"><i class="bi bi-chat-dots-fill"></i> Hubungi Kami</a>

    </div>
  </header>
