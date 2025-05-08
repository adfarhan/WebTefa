<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="main">
        <section id="sejarah-tefa" class="sejarah-section section light-background">
            <div class="container" data-aos="fade-up">
                <!-- Judul Section -->
                <div class="section-title" data-aos="fade-up">
                    <h2>TEFA RPL</h2>
                    <p>Sejarah & Latar Belakang</p>
                </div>

                <!-- Sejarah TEFA -->
                <div class="content sejarah" data-aos="fade-right" data-aos-delay="200">
                    <div class="image">
                        <img src="{{ asset('assets/img/illustration-1.webp') }}" alt="Sejarah TEFA RPL">
                    </div>
                    <div class="text">
                        <h3>Sejarah <span class="fw-bold">TEFA RPL</span></h3>
                        <p>
                            {{ $profile->sejarah ?? '' }}
                        </p>
                    </div>
                </div>

                <!-- Latar Belakang TEFA -->
                <div class="content latar-belakang" data-aos="fade-left" data-aos-delay="300">
                    <div class="text">
                        <h3>Latar Belakang <span class="fw-bold">TEFA RPL</span></h3>
                        <p>
                            {{ $profile->latar_belakang ?? ''}}
                        </p>
                    </div>
                    <div class="image">
                        <img src="{{ asset('assets/img/features-illustration-2.webp') }}" alt="Latar Belakang TEFA RPL">
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
                        @foreach ($industri as $industris)
                            <div class="swiper-slide"><a href="{{ route('industridetail', $industris->id) }}"><img src="{{ asset('storage/' . $industris->logo_industri) }}" class="img-fluid" alt="{{ $industris->nama_industri }}"></a></div>

                        @endforeach
                    </div>
                    {{-- <div class="swiper-pagination"></div> --}}
                </div>

            </div>

        </section><!-- /Clients Section -->

        <section id="struktur-tefa" class="struktur-section section light-background">
            <div class="container">
                <!-- Judul Section -->
                <div class="section-title">
                    <h2 class="text-white">Struktur Organisasi <span>TEFA RPL</span></h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, illo voluptatum! Atque neque odio praesentium!</p>
                </div>

                <!-- Grid Struktur Organisasi -->
                <div class="struktur-grid">
                    <!-- Ketua -->
                    @foreach ($organisasis as $organisasi)
                        <div class="card">
                            <img src="{{ asset('storage/' . $organisasi->foto) }}" alt="{{ $organisasi->jabatan }}">
                            <h3>{{ $organisasi->nama }}</h3>
                            <p class="nip">NIP: {{ $organisasi->nip }}</p>
                            <p class="jabatan">{{ $organisasi->jabatan }}</p>
                            <div class="social-icons">
                                <a href="{{ $organisasi->facebook }}" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="{{ $organisasi->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="{{ $organisasi->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="pagination-wrapper d-flex justify-content-center mt-4">
                    {{ $organisasis->withQueryString()->fragment('struktur-tefa')->links('pagination::bootstrap-4') }}
                </div>

                <style>
                    .pagination-wrapper .pagination {
                        margin: 0;
                        padding: 0;
                    }

                    .pagination-wrapper .page-item .page-link {
                        color: #007bff; /* warna teks */
                        background-color: #fff; /* background putih */
                        border: 1px solid #dee2e6; /* border abu */
                        margin: 0 2px; /* jarak antar tombol */
                    }

                    .pagination-wrapper .page-item.active .page-link {
                        background-color: #44586e; /* background biru pas aktif */
                        border-color: #007bff; /* border biru pas aktif */
                        color: white; /* teks putih */
                    }

                    .pagination-wrapper .page-item.disabled .page-link {
                        color: #6c757d; /* warna teks disable */
                        pointer-events: none;
                        background-color: #fff;
                        border-color: #dee2e6;
                    }
                </style>

            </div>

        </section>

    </main>
</x-layout>
