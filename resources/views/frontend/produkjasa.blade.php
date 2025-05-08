<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="main">
        <section id="produk" class="produk-section">
            <div class="container" data-aos="fade-up">
                <!-- Judul Section -->
                <div class="section-title">
                    <h2>Produk <span>TEFA RPL</span></h2>
                    <p>Berbagai produk inovatif hasil karya siswa dalam program TEFA RPL.</p>
                </div>

                  <!-- Grid Produk -->
                <div class="produk-grid">
                    @foreach ($produks as $produk)
                    <div class="produk-card">
                        <div class="swiper produk-slider">
                            <div class="swiper-wrapper">
                                <!-- Gambar utama -->
                                @if ($produk->gambar)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }} - Utama">
                                </div>
                                @endif

                                <!-- Gambar tambahan -->
                                @foreach ($produk->gambars as $gambar)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $gambar->path_gambar) }}" alt="{{ $produk->nama_produk }}">
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="card-content">
                            <h4>{{ $produk->nama_produk }}</h4>
                            <p>{{ \Illuminate\Support\Str::limit($produk->deskripsi, 50) }}</p>

                            <div class="btn-wrapper">
                                <a href="{{ route('produkdetail', $produk) }}" class="btn-selengkapnya">
                                    <span>Selengkapnya</span> <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>



        <style>
        /* Section Produk */
        #produk {
            padding: 120px 0;
            background: #f9f9f9;
            text-align: center;
        }
        .card-content p{
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 16px;
            color: #555;
            /* text-indent: 20px; */
            word-break: break-word;
            overflow-wrap: break-word;
            }

        /* Grid Produk */
        .produk-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            justify-content: center;
        }

        /* Card Produk */
        .produk-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            text-align: center;
            height: 100%;
        }

        .produk-card:hover {
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
        }

        /* Swiper */
        .swiper {
            width: 100%;
            height: 200px;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Agar konten utama tetap di atas dan tombol tetap di bawah */
        .card-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            padding: 20px;
            margin-top: 20px;
        }

        /* Tombol */
        .btn-wrapper {
            margin-top: auto;
            margin-bottom: 20px;
        }

        .btn-selengkapnya {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #007bff;
            color: white;
            padding: 8px 13px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
            transition: background 0.3s ease-in-out;
        }

        #produk .btn-selengkapnya i {
            transition: transform 0.3s ease-in-out;
        }

        #produk .btn-selengkapnya:hover i {
            transform: translateX(2px);
        }

        .btn-selengkapnya:hover {
            color: #fff;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .produk-grid {
                grid-template-columns: 1fr;
            }
        }
        </style>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.produk-slider').forEach(function (slider) {
            new Swiper(slider, {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },
                pagination: {
                    el: slider.querySelector('.swiper-pagination'),
                    clickable: true
                },
                navigation: {
                    nextEl: slider.querySelector('.swiper-button-next'),
                    prevEl: slider.querySelector('.swiper-button-prev')
                }
            });
        });
    });
</script>

    </main>
</x-layout>
