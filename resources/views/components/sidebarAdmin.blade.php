 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('berandautama.admin') }}">
          <i class="fa fa-home"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="fas fa-clipboard-list"></i><span>Review Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('beranda.admin') }}">
              <i class="bi bi-circle"></i><span>Beranda</span>
            </a>
          </li>
          <li>
            <a href="{{ route('profile.admin') }}">
              <i class="bi bi-circle"></i><span>Profile</span>
            </a>
          </li>
          <li>
            <a href="{{ route('program.admin') }}">
              <i class="bi bi-circle"></i><span>Program</span>
            </a>
          </li>
          <li>
            <a href="{{ route('proja.admin') }}">
              <i class="bi bi-circle"></i><span>Produk atau Jasa</span>
            </a>
          </li>
          <li>
            <a href="{{ route('galeri.admin') }}">
              <i class="bi bi-circle"></i><span>Galeri</span>
            </a>
          </li>
          <li>
            <a href="{{ route('berita.admin') }}">
              <i class="bi bi-circle"></i><span>Berita</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->




      <li class="nav-heading">Page</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('pro.user') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('kontaks.index') }}">
            <i class="fas fa-globe-americas"></i>

          <span>Media Sosial</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a class="nav-link collapsed" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-in-left"></i>
            <span>Logout</span>
        </a>
    </li>



    </ul>
</aside><!-- End Sidebar-->
