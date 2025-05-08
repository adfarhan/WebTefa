<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/img/logosmk.png') }}" alt="">
        <h1 class="sitename">K-ONE</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('beranda.user') }}" class="active">Beranda</a></li>
          <li><a href="{{ route('profile.user') }}">Profile</a></li>
          <li class="dropdown"><a href="#"><span>Program dan Produk</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('program.user') }}">Program</a></li>
              <li><a href="{{ route('produkJasa.user') }}">Produk atau Jasa</a></li>
            </ul>
          </li>
          <li><a href="{{ route('galeri.user') }}">Galeri</a></li>
          <li><a href="{{ route('berita.user') }}">Berita</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('kontak.user') }}"><i class="bi bi-chat-dots-fill"></i> Hubungi Kami</a>

    </div>
  </header>
