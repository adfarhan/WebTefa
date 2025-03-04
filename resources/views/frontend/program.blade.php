<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="main">
        <section id="program-tefa" class="program-section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <!-- Judul Section -->
                <div class="section-title">
                    <h2>Program <span>TEFA RPL</span></h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam quisquam possimus non porro nisi expedita rem cupiditate, alias nesciunt voluptas.</p>
                </div>

                <!-- Grid Program -->
                <div class="program-grid" data-aos="fade-up" data-aos-delay="200">
                    <!-- Program 1 -->
                    <div class="program-card">
                        <div class="card-image">
                            <img src="assets/img/services.jpg" alt="Program 1">
                        </div>
                        <div class="card-content">
                            <h3>Nama Program 1</h3>
                            <p>Sebuah program inovatif untuk manajemen sekolah berbasis web.</p>
                            <a href="#" class="btn-detail">
                                <span>Lihat Detail</span> <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Program 2 -->
                    <div class="program-card">
                        <div class="card-image">
                            <img src="assets/img/services.jpg" alt="Program 2">
                        </div>
                        <div class="card-content">
                            <h3>Nama Program 2</h3>
                            <p>Aplikasi berbasis mobile untuk sistem pemesanan online.</p>
                            <a href="#" class="btn-detail">
                                <span>Lihat Detail</span> <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Program 3 -->
                    <div class="program-card">
                        <div class="card-image">
                            <img src="assets/img/services.jpg" alt="Program 3">
                        </div>
                        <div class="card-content">
                            <h3>Nama Program 3</h3>
                            <p>Software keuangan untuk UMKM dengan fitur laporan otomatis.</p>
                            <a href="#" class="btn-detail">
                                <span>Lihat Detail</span> <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
        #program-tefa {
            padding: 80px 20px;
            background: #fff;
            padding-top: 130px;
        }

        #program-tefa .container {
            max-width: 1100px;
            margin: auto;
        }

        #program-tefa .section-title p {
            font-size: 18px;
            color: #666;
        }

        /* Grid Program */
        #program-tefa .program-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            justify-content: center;
        }

        /* Card Program */
        #program-tefa .program-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        #program-tefa .program-card:hover {
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
        }

        /* Gambar */
        #program-tefa .card-image {
            width: 100%;
            height: 200px;
            overflow: hidden;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        #program-tefa .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        #program-tefa .program-card:hover .card-image img {
            transform: scale(1.05);
        }

        /* Konten */
        #program-tefa .card-content {
            padding: 20px;
        }

        #program-tefa .card-content h3 {
            font-size: 20px;
            color: #007bff;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: center;
        }

        #program-tefa .card-content p {
            font-size: 16px;
            color: #666;
            margin-bottom: 15px;
        }

        /* Tombol */
        #program-tefa .btn-detail {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #007bff;
            color: white;
            padding: 8px 13px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 11px;
            font-weight: bold;
            transition: background 0.3s ease-in-out;
        }

        #program-tefa .btn-detail i {
            transition: transform 0.3s ease-in-out;
        }

        #program-tefa .btn-detail:hover {
            background: #0056b3;
        }

        #program-tefa .btn-detail:hover i {
            transform: translateX(2px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            #program-tefa .program-grid {
                grid-template-columns: 1fr;
            }
        }
        </style>


        <section id="keunggulan-tefa" class="keunggulan-section">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Manfaat Program</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum alias dolorem ab aspernatur. Dolor modi, sit saepe, necessitatibus minima, vel ipsa harum ratione cum repellendus earum distinctio consequatur in nam?</p>
                </div>

                <div class="keunggulan-grid">
                    <div class="keunggulan-card">
                        <i class="fas fa-laptop-code"></i>
                        <h3>Teknologi Terkini</h3>
                        <p>Menggunakan teknologi terbaru dalam pengembangan perangkat lunak.</p>
                    </div>
                    <div class="keunggulan-card">
                        <i class="fas fa-briefcase"></i>
                        <h3>Berorientasi Industri</h3>
                        <p>Program dirancang sesuai kebutuhan dunia industri dan pasar kerja.</p>
                    </div>
                    <div class="keunggulan-card">
                        <i class="fas fa-user-graduate"></i>
                        <h3>Pengalaman Nyata</h3>
                        <p>Siswa mendapatkan pengalaman kerja langsung dalam proyek nyata.</p>
                    </div>
                    <div class="keunggulan-card">
                        <i class="fas fa-network-wired"></i>
                        <h3>Jaringan Profesional</h3>
                        <p>Kesempatan untuk membangun koneksi dengan perusahaan dan startup.</p>
                    </div>
                </div>
            </div>
        </section>

        <style>
        /* Styling Keunggulan */
        #keunggulan-tefa {
            padding: 80px 20px;
            background: #f9f9f9;
            text-align: center;
        }

        #keunggulan-tefa .container {
            max-width: 1100px;
            margin: auto;
        }


        #keunggulan-tefa .section-title p {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }

        /* Grid Keunggulan */
        .keunggulan-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            justify-content: center;
        }

        /* Card Keunggulan */
        .keunggulan-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .keunggulan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
        }

        .keunggulan-card i {
            font-size: 40px;
            color: #007bff;
            margin-bottom: 15px;
        }

        .keunggulan-card h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }

        .keunggulan-card p {
            font-size: 16px;
            color: #666;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .keunggulan-grid {
                grid-template-columns: 1fr;
            }
        }
        </style>




    </main>
</x-layout>
