<footer id="footer" class="footer">
    <div class="container footer-top">
      <div class="row gy-4">

        <!-- Alamat -->
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Alamat</span>
          </a>
          <div class="footer-contact pt-3">
            <p>{{ $kontak->nama?? ''}}</p>
            <p class="mt-3"><strong>Phone:</strong> <span>{{ $kontak->nomor_telepon?? '' }}</span></p>
            <p><strong>Email:</strong> <span>{{ $kontak->email?? '' }}</span></p>
          </div>
        </div>

        <!-- Menu -->
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Menu</h4>
          <ul>
            <li><a href="{{ route('beranda.user') }}">Beranda</a></li>
            <li><a href="{{ route('profile.user') }}">Profile</a></li>
            <li><a href="{{ route('program.user') }}">Program</a></li>
            <li><a href="{{ route('produkJasa.user') }}">Produk</a></li>
            <li><a href="{{ route('galeri.user') }}">Galeri</a></li>
            <li><a href="{{ route('berita.user') }}">Berita</a></li>
          </ul>
        </div>

        <!-- Media Sosial -->
        <div class="col-lg-4 col-md-6 footer-media-sosial">
          <h4>Media Sosial</h4>
          <ul class="social">
            <li><a href="{{ $kontak->facebook?? '' }}"><span class="icon-circle"><i class="fab fa-facebook-f"></i></span> Facebook</a></li>
            <li><a href="{{ $kontak->instagram ?? ''}}"><span class="icon-circle"><i class="fab fa-instagram"></i></span> Instagram</a></li>
            <li><a href="{{ $kontak->twitter?? '' }}"><span class="icon-circle"><i class="fab fa-twitter"></i></span> Twitter</a></li>
            <li><a href="{{ $kontak->tiktok?? '' }}"><span class="icon-circle"><i class="fab fa-tiktok"></i></span> TikTok</a></li>
            <li><a href="{{ $kontak->youtube?? '' }}"><span class="icon-circle"><i class="fab fa-youtube"></i></span> YouTube</a></li>
          </ul>
        </div>

        <!-- Internal Style untuk Media Sosial -->
        <style>
          .footer-media-sosial h4 {
            color: #4d555e;
            margin-bottom: 20px;
            font-size: 18px;
          }

          .social {
            list-style: none;
            padding: 0;
            margin: 0;
          }

          .social li {
            margin-bottom: 12px;
          }

          .social li a {
            color: #696f75;
            text-decoration: none;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: color 0.3s ease;
          }

          .social li a:hover,
          .icon-circle i:hover {
            color: #000;
          }

          .icon-circle {
            width: 30px;
            height: 30px;
            background-color: #f9f9f9;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
          }

          .icon-circle i {
            font-size: 14px;
          }
        </style>

        <div class="col-lg-2 col-md-3 footer-links">
            <h4>Pertanyaan</h4>
            <ul>
            <li><a href="{{ route('beranda.user') }}#keunggulan-cards">Apa Keunggulan Web TEFA?</a></li>
            <li><a href="{{ route('profile.user') }}">Bagaimana Sejarah TEFA?</a></li>
            <li><a href="{{ route('program.user') }}">Program yang ditawarkan?</a></li>
            <li><a href="{{ route('produkJasa.user') }}">Produk yang tersedia?</a></li>
            <li><a href="{{ route('galeri.user') }}">Galeri kegiatan?</a></li>
            <li><a href="{{ route('berita.user') }}">Berita terbaru?</a></li>
            </ul>
        </div>


      </div>
    </div>

    <!-- Copyright -->
    <div class="container copyright text-center mt-4">
      <p style="font-size: 16px;">
        © <span>Copyright</span> <strong class="px-1 sitename">Web Tefa | SMKN 1 Kawali</strong> <span>All Rights Reserved</span>
      </p>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center d-none">
    <i class="bi bi-chat-dots-fill"></i>
  </a>
