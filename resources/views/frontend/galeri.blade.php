<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="main">
        <section id="dokumentasi" class="dokumentasi-section">
            <div class="container" data-aos="fade-up">
                <!-- Judul Section -->
                <div class="section-title">
                    <h2>Dokumentasi <span>Kegiatan TEFA RPL</span></h2>
                    <p>Momen-momen penting dari berbagai kegiatan yang telah dilakukan.</p>
                </div>

                <!-- Carousel Dokumentasi -->
                <div class="carousel">
                    <div class="carousel-item active">
                        <img src="assets/img/services.jpg" alt="Workshop">
                        <div class="carousel-caption">
                            <h3>Workshop Pemrograman</h3>
                            <p>Pelatihan coding bersama siswa dan instruktur.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/services.jpg" alt="Seminar">
                        <div class="carousel-caption">
                            <h3>Seminar Teknologi</h3>
                            <p>Diskusi tren IT bersama profesional industri.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <video src="assets/video/kegiatan3.mp4" autoplay loop muted></video>
                        <div class="carousel-caption">
                            <h3>Kunjungan Industri</h3>
                            <p>Melihat langsung lingkungan kerja di perusahaan IT.</p>
                        </div>
                    </div>
                    <!-- Navigasi Carousel -->
                    <button class="carousel-prev" onclick="moveSlide(-1)">&#10094;</button>
                    <button class="carousel-next" onclick="moveSlide(1)">&#10095;</button>
                </div>

                <!-- Galeri Dokumentasi -->
                <div class="galeri-grid">
                    <div class="galeri-item">
                        <img src="assets/img/services.jpg" alt="Hackathon">
                        <div class="overlay">
                            <h3>Hackathon</h3>
                        </div>
                    </div>
                    <div class="galeri-item">
                        <img src="assets/img/services.jpg" alt="Pelatihan">
                        <div class="overlay">
                            <h3>Pelatihan UI/UX</h3>
                        </div>
                    </div>
                    <div class="galeri-item">
                        <video src="assets/video/kegiatan6.mp4" autoplay loop muted></video>
                        <div class="overlay">
                            <h3>Project Showcase</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
        /* Section */
        #dokumentasi {
            padding: 80px 20px;
            background: #f9f9f9;
            text-align: center;
        }

        /* Judul */
        #dokumentasi .section-title h2 {
            font-size: 28px;
            font-weight: bold;
        }

        #dokumentasi .section-title span {
            color: #007bff;
        }

        /* Carousel */
        .carousel {
            position: relative;
            max-width: 800px;
            margin: auto;
            overflow: hidden;
            border-radius: 12px;
        }

        .carousel-item {
            display: none;
            position: relative;
            width: 100%;
        }

        .carousel-item.active {
            display: block;
        }

        .carousel-item img, .carousel-item video {
            width: 100%;
            border-radius: 12px;
            object-fit: cover;
        }

        .carousel-caption {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 123, 255, 0.8);
            color: white;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
        }

        .carousel-prev, .carousel-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 50%;
        }

        .carousel-prev { left: 10px; }
        .carousel-next { right: 10px; }

        .carousel-prev:hover, .carousel-next:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        /* Galeri Grid */
        .galeri-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .galeri-item {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
        }

        .galeri-item img, .galeri-item video {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .galeri-item:hover img, .galeri-item:hover video {
            transform: scale(1.1);
        }

        .overlay {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: rgba(0, 123, 255, 0.9);
            color: white;
            padding: 10px;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .galeri-item:hover .overlay {
            opacity: 1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .carousel-caption {
                font-size: 14px;
                padding: 8px;
            }

            .carousel-prev, .carousel-next {
                padding: 5px 10px;
            }

            .galeri-grid {
                grid-template-columns: 1fr;
            }
        }
        </style>

        <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll(".carousel-item");

        function moveSlide(step) {
            slides[currentIndex].classList.remove("active");
            currentIndex = (currentIndex + step + slides.length) % slides.length;
            slides[currentIndex].classList.add("active");
        }

        // Auto-slide setiap 5 detik
        setInterval(() => moveSlide(1), 5000);
        </script>


    </main>
</x-layout>
