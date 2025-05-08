<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section" style="margin-top:-30px;">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center py-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                @php
                    $judulParts = $landing ? explode(' ', $landing->judul, 2) : ['', ''];
                @endphp

                <h1 class="mb-4">
                    {{ $judulParts[0] }}
                    @if(isset($judulParts[1]) && $judulParts[1] !== '')
                        <span class="accent-text">{{ $judulParts[1] }}</span>
                    @endif
                </h1>



                <p id="typewriter" class="lead mb-4">

                </p>

                <div class="btn-pelajari">
                    <a href="{{ route('profile.user') }}" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>
            </div>

            </div>

            <div class="col-lg-6">
                <div class="hero-image" data-aos="fade-left" data-aos-delay="300">
                    @if ($landing && $landing->logo)
                        <img src="{{ asset('storage/' . $landing->logo) }}" alt="Gambar Hero" class="img-fluid">
                    @else
                        <img src="{{ asset('assets/img/logosmk.png') }}" alt="Gambar Default" class="img-fluid">
                    @endif
                </div>

              </div>
              <style>
                .hero-image {
                text-align: center;
                }

                .hero-image img {
                    max-width: 50%;
                    height: auto;
                    object-fit: contain;
                    transition: transform 0.4s ease;
                    }

                    .hero-image img:hover {
                    transform: scale(1.05); /* zoom sedikit */
                    }


              </style>
             <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const text = @json(optional($landing)->pekat ?? '');
                    const typewriterElement = document.getElementById('typewriter');
                    let index = 0;
                    let isDeleting = false;

                    function type() {
                        if (!text) return; // Kalau text kosong, tidak usah jalanin typewriter

                        if (!isDeleting) {
                            typewriterElement.innerHTML += text.charAt(index);
                            index++;
                            if (index === text.length) {
                                setTimeout(() => { isDeleting = true; type(); }, 2000);
                                return;
                            }
                        } else {
                            typewriterElement.innerHTML = text.substring(0, index - 1);
                            index--;
                            if (index === 0) {
                                isDeleting = false;
                            }
                        }
                        setTimeout(type, isDeleting ? 50 : 150);
                    }

                    type();
                });
            </script>


          </div>

        <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="400">
            <div class="col-lg-3 col-md-6">
              <div class="stat-item">
                <div class="stat-icon">
                  <i class="bi bi-laptop"></i>
                </div>
                <div class="stat-content">
                  <h5>Kemampuan Teknis</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-item">
                <div class="stat-icon">
                  <i class="bi bi-lightbulb"></i>
                </div>
                <div class="stat-content">
                  <h5>Berpikir Kritis</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-item">
                <div class="stat-icon">
                  <i class="bi bi-people"></i>
                </div>
                <div class="stat-content">
                  <h5>Kerja Tim</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-item">
                <div class="stat-icon">
                  <i class="bi bi-briefcase"></i>
                </div>
                <div class="stat-content">
                  <h5>Peluang Karier</h5>
                </div>
              </div>
            </div>
          </div>


      </div>


    </section>



    <section id="keunggulan-cards" class="keunggulan-cards section">

        <div class="container">
            <div class="section-title">
                <h2>Keunggulan <span>Program</span></h2>
                <p>Menjadi program unggulan yang menghasilkan lulusan berkualitas dan siap bersaing di dunia industri.</p>
            </div>

            <div class="row gy-4">

                @foreach($keunggulan as $data)
                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="keunggulan-box green">
                        <i class="{{ $data->icon }}"></i>
                        <h4>{{ $data->nama_keunggulan }}</h4>
                        <p>{{ $data->isi }}</p>
                    </div>
                </div><!-- End Feature Box-->
                @endforeach

            </div>

        </div>
        <style>
                #keunggulan-cards {
                background-color: #f8f9fa; /* Warna latar belakang yang lebih terang untuk kontras */
                padding: 60px 0; /* Menambahkan ruang di atas dan bawah untuk keseimbangan */
                }

                .keunggulan-cards .section-title {
                text-align: center;
                margin-bottom: 40px;
                }

                .keunggulan-cards .section-title h2 {
                font-size: 36px;
                font-weight: bold;
                color: var(--primary-color);
                }

                .keunggulan-cards .section-title p {
                font-size: 18px;
                color: #666;
                }

                .keunggulan-cards .keunggulan-box {
                    background-color: #ffffff;
                    padding: 30px;
                    border-radius: 12px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                    text-align: center;
                    transition: all 0.3s ease;
                    display: flex;
                    flex-direction: column;
                    justify-content: flex-start;  /* Menjaga posisi konten di atas */
                    height: auto;  /* Menyesuaikan tinggi dengan isi */
                    max-height: none; /* Tidak ada batas tinggi untuk memungkinkan isi berkembang */
                    }

                .keunggulan-cards .keunggulan-box i {
                font-size: 40px;
                color: var(--accent-color);
                margin-bottom: 20px;
                }

                .keunggulan-cards .keunggulan-box h4 {
                font-size: 20px;
                font-weight: 700;
                margin-bottom: 15px;
                color: var(--primary-color);
                }

                .keunggulan-cards .keunggulan-box p {
                font-size: 15px;
                color: #555;
                line-height: 1.6;
                margin-bottom: 0;
                white-space: normal; /* Memastikan teks dapat membungkus */
                word-wrap: break-word; /* Memastikan teks panjang tetap dibungkus ke baris berikutnya */
                overflow-wrap: break-word; /* Fallback untuk kata panjang yang tidak dapat dipisahkan */
                }

                .keunggulan-cards .keunggulan-box:hover {
                transform: translateY(-10px);
                box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
}


                @media (max-width: 768px) {
                .keunggulan-cards .keunggulan-box {
                    padding: 20px;
                }

                .keunggulan-cards .keunggulan-box i {
                    font-size: 35px;
                }

                .keunggulan-cards .keunggulan-box h4 {
                    font-size: 18px;
                }

                .keunggulan-cards .keunggulan-box p {
                    font-size: 14px;
                }
                }

        </style>
    </section>


      <!-- Services Section -->
      <section id="services" class="services section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Visi & Misi Program</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4">

                <div class="col-lg-6">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="fas fa-eye"></i>
                        </div>
                        @foreach ($visi as $item)
                        <div>
                            <h3>Visi Program</h3>
                      <p>{{ $item->visi }}</p> {{-- Visi tetap teks biasa --}}
                    </div>
                    @endforeach
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-card d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <div>
                      <h3>Misi Program</h3>
                      <ul style="padding-left: 20px; margin: 0;">
                        @foreach ($misi as $item)
                          <li>{{ $item->misi }}</li> {{-- Misi banyak, tampil sebagai list --}}
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>

            </div>



        </div>
        <style>
            .service-card p,
            .service-card li {
                margin-top: 10px;
                margin-bottom: 10px;
                font-size: 16px;
                color: #555;
                /* text-indent: 20px; */
                word-break: break-word;
                overflow-wrap: break-word;
            }
        </style>

      </section><!-- /Services Section -->




  </main>
</x-layout>
