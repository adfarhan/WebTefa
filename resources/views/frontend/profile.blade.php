<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="main">
        <section id="sejarah-tefa" class="sejarah-section">
            <div class="container" data-aos="fade-up">
                <!-- Judul Section -->
                <div class="section-title" data-aos="fade-up">
                    <h2>TEFA RPL</h2>
                    <p>Sejarah & Latar Belakang</p>
                </div>

                <!-- Sejarah TEFA -->
                <div class="content sejarah" data-aos="fade-right" data-aos-delay="200">
                    <div class="image">
                        <img src="assets/img/illustration-1.webp" alt="Sejarah TEFA RPL">
                    </div>
                    <div class="text">
                        <h3>Sejarah <span class="fw-bold">TEFA RPL</span></h3>
                        <p>
                            Teaching Factory (TEFA) di jurusan Rekayasa Perangkat Lunak (RPL) SMKN 1 Kawali mulai dikembangkan
                            untuk menjembatani dunia industri dengan pendidikan. Dengan pendekatan berbasis proyek nyata, siswa dilatih agar
                            siap menghadapi dunia kerja dengan keterampilan profesional. Sejak berdirinya, TEFA RPL telah menjadi tempat pelatihan
                            berbasis industri bagi siswa untuk mengembangkan kemampuan mereka.
                        </p>
                    </div>
                </div>

                <!-- Latar Belakang TEFA -->
                <div class="content latar-belakang" data-aos="fade-left" data-aos-delay="300">
                    <div class="text">
                        <h3>Latar Belakang <span class="fw-bold">TEFA RPL</span></h3>
                        <p>
                            Latar belakang dibentuknya TEFA RPL adalah untuk memberikan pengalaman belajar yang sesuai dengan standar industri.
                            Dengan adanya TEFA, siswa tidak hanya belajar teori tetapi juga menerapkan keahlian dalam proyek nyata, seperti
                            pembuatan aplikasi berbasis web dan mobile, serta layanan IT lainnya. Hal ini diharapkan dapat menciptakan lulusan yang
                            lebih kompeten dan siap kerja.
                        </p>
                    </div>
                    <div class="image">
                        <img src="assets/img/illustration-1.webp" alt="Latar Belakang TEFA RPL">
                    </div>
                </div>
            </div>
        </section>

        <section id="clients" class="clients section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                    "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                    "breakpoints": {
                    "320": {
                        "slidesPerView": 2,
                        "spaceBetween": 40
                    },
                    "480": {
                        "slidesPerView": 3,
                        "spaceBetween": 60
                    },
                    "640": {
                        "slidesPerView": 4,
                        "spaceBetween": 80
                    },
                    "992": {
                        "slidesPerView": 6,
                        "spaceBetween": 120
                    }
                    }
                }
                </script>
                <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            </div>

        </section><!-- /Clients Section -->

        <section id="struktur-tefa" class="struktur-section">
            <div class="container" data-aos="fade-up">
                <!-- Judul Section -->
                <div class="section-title" data-aos="fade-up">
                    <h2 class="text-white">Struktur Organisasi <span>TEFA RPL</span></h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, illo voluptatum! Atque neque odio praesentium!</p>
                </div>

                <!-- Grid Struktur Organisasi -->
                <div class="struktur-grid" data-aos="fade-up" data-aos-delay="200">
                    <!-- Ketua -->
                    <div class="card">
                        <img src="assets/img/avatar-2.webp" alt="Ketua TEFA">
                        <h3>Nama Ketua</h3>
                        <p class="nip">NIP: 1234567890</p>
                        <p class="jabatan">Ketua TEFA RPL</p>
                        <div class="social-icons">
                            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>

                    <!-- Wakil Ketua -->
                    <div class="card">
                        <img src="assets/img/wakil.jpg" alt="Wakil Ketua TEFA">
                        <h3>Nama Wakil</h3>
                        <p class="nip">NIP: 0987654321</p>
                        <p class="jabatan">Wakil Ketua TEFA</p>
                        <div class="social-icons">
                            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>

                    <!-- Sekretaris -->
                    <div class="card">
                        <img src="assets/img/sekretaris.jpg" alt="Sekretaris TEFA">
                        <h3>Nama Sekretaris</h3>
                        <p class="nip">NIP: 1122334455</p>
                        <p class="jabatan">Sekretaris</p>
                        <div class="social-icons">
                            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>

                    <!-- Bendahara -->
                    <div class="card">
                        <img src="assets/img/bendahara.jpg" alt="Bendahara TEFA">
                        <h3>Nama Bendahara</h3>
                        <p class="nip">NIP: 2233445566</p>
                        <p class="jabatan">Bendahara</p>
                        <div class="social-icons">
                            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>

                    <!-- Tim Produksi -->
                    <div class="card">
                        <img src="assets/img/tim1.jpg" alt="Tim Produksi">
                        <h3>Nama Tim</h3>
                        <p class="nip">NIP: 3344556677</p>
                        <p class="jabatan">Tim Produksi</p>
                        <div class="social-icons">
                            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <img src="assets/img/tim2.jpg" alt="Tim Pengembangan">
                        <h3>Nama Tim</h3>
                        <p class="nip">NIP: 4455667788</p>
                        <p class="jabatan">Tim Pengembangan</p>
                        <div class="social-icons">
                            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>
</x-layout>
