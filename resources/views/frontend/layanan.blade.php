<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="main">
        <section id="layanan-tefa" class="layanan-section">
            <div class="container" data-aos="fade-up">
                <!-- Judul Section -->
                <div class="section-title">
                    <h2>Layanan <span>TEFA RPL</span></h2>
                    <p>Berbagai layanan profesional berbasis teknologi yang dikembangkan oleh TEFA RPL untuk mendukung dunia industri dan pendidikan.</p>
                </div>

                <!-- Grid Layanan -->
                <div class="layanan-grid" data-aos="fade-up" data-aos-delay="200">
                    <!-- Layanan 1 -->
                    <div class="layanan-card">
                        <div class="layanan-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Pengembangan Web</h3>
                        <p>Membuat website interaktif dan profesional untuk berbagai kebutuhan bisnis dan institusi.</p>
                        <div class="btn-container">
                            <a href="{{route('layanan.Web') }}" class="btn-layanan">Selengkapnya</a>
                        </div>
                    </div>

                    <!-- Layanan 2 -->
                    <div class="layanan-card">
                        <div class="layanan-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Aplikasi Mobile</h3>
                        <p>Pengembangan aplikasi mobile berbasis Android dan iOS yang inovatif.</p>
                        <div class="btn-container">
                            <a href="#" class="btn-layanan">Selengkapnya</a>
                        </div>
                    </div>

                    <!-- Layanan 3 -->
                    <div class="layanan-card">
                        <div class="layanan-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h3>Sistem Jaringan</h3>
                        <p>Instalasi dan pemeliharaan sistem jaringan komputer untuk berbagai skala perusahaan.</p>
                        <div class="btn-container">
                            <a href="#" class="btn-layanan">Selengkapnya</a>
                        </div>
                    </div>

                    <!-- Layanan 4 -->
                    <div class="layanan-card">
                        <div class="layanan-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3>IT Support</h3>
                        <p>Layanan dukungan IT untuk perawatan perangkat keras dan perangkat lunak.</p>
                        <div class="btn-container">
                            <a href="#" class="btn-layanan">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
        /* Styling Section */
        #layanan-tefa {
            padding: 80px 20px;
            background: #f8f9fa;
            text-align: center;
            padding-top: 130px;
        }

        /* Container */
        #layanan-tefa .container {
            max-width: 1100px;
            margin: auto;
        }


        /* Grid Layanan */
        .layanan-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            justify-content: center;
        }

        /* Card Layanan */
        .layanan-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        /* Icon */
        .layanan-icon {
            font-size: 40px;
            color: #007bff;
            margin-bottom: 15px;
        }

        /* Nama Layanan */
        .layanan-card h3 {
            font-size: 20px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 10px;
        }

        /* Deskripsi */
        .layanan-card p {
            font-size: 16px;
            color: #666;
            flex-grow: 1;
        }

        /* Button Selalu di Bawah */
        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: auto;
        }

        .btn-layanan {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 8px 15px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            transition: background 0.3s ease-in-out;
        }

        .btn-layanan:hover {
            color: #fff;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .layanan-grid {
                grid-template-columns: 1fr;
            }
        }
        </style>

        <section id="features" class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
            <h2>Portofolio <span>TEFA RPL</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima facilis reprehenderit est iste? Ratione provident exercitationem cupiditate. Nobis, ratione voluptatibus?</p>
            </div><!-- End Section Title -->

            <div class="container">

            <div class="d-flex justify-content-center">

                <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                    <h4>Website</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                    <h4>Aplikasi Mobile</h4>
                    </a><!-- End tab nav item -->

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                    <h4>IT Supprot</h4>
                    </a>
                </li><!-- End tab nav item -->

                </ul>

            </div>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                <div class="tab-pane fade active show" id="features-tab-1">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                    <h3>Web Poin Pelanggaran Siswa</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.(Penjelasan Website)
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.(Fitur-fiturnya)</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris consequat. storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                    </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                    <img src="assets/img/features-illustration-1.webp" alt="" class="img-fluid">
                    </div>
                </div>
                </div><!-- End tab content item -->

                <div class="tab-pane fade" id="features-tab-2">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                    <h3>Aplikasi Mobile Sales Toko</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.(Penjelasan)
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                    </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                    <img src="assets/img/features-illustration-2.webp" alt="" class="img-fluid">
                    </div>
                </div>
                </div><!-- End tab content item -->

                <div class="tab-pane fade" id="features-tab-3">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                    <h3>Voluptatibus commodi accusamu</h3>
                    <p class="fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum voluptatem culpa repellendus quas odio necessitatibus.

                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                    </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                    <img src="assets/img/features-illustration-3.webp" alt="" class="img-fluid">
                    </div>
                </div>
                </div><!-- End tab content item -->

            </div>

            </div>

        </section><!-- /Features Section -->

        <section id="testimonials" class="testimonials section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

              <div class="row g-5">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

              </div>

            </div>

        </section><!-- /Testimonials Section -->
    </main>
</x-layout>
