<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="main">
        <section id="galeri" class="galeri-section">
          <div class="container" data-aos="fade-up">
            <!-- Judul Section -->
            <div class="section-title mb-5">
              <h2>Galeri Kegiatan</h2>
              <p>Kumpulan dokumentasi kegiatan siswa di TEFA RPL.</p>
            </div>

            <!-- Grid Galeri -->
            <div class="galeri-grid">
              @foreach ($galeri as $galeris)
                <div class="galeri-item">
                  <div class="galeri-img-wrapper">
                   <img src="{{ asset('storage/' . $galeris->foto) }}" alt="Kegiatan {{ $galeris->id }}">
                    <div class="overlay">
                      <h5>{{ $galeris->nama_galeri }}</h5>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </section>

        <style>
          /* Section Galeri */
          #galeri {
            padding: 120px 0;
            background: linear-gradient(to bottom, #f9f9f9, #ffffff);
            text-align: center;
          }


          .section-title h2 {
            font-weight: 700;
            margin-bottom: 10px;
          }

          .section-title span {
            color: #007bff;
          }

          /* Grid Galeri */
          .galeri-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 0 20px;
          }

          /* Item Galeri */
          .galeri-item {
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            background: #fff;
            position: relative;
            transition: 0.4s;
          }

          .galeri-img-wrapper {
            position: relative;
            overflow: hidden;
            height: 250px;
          }

          .galeri-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
          }

          .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(194, 194, 194, 0.6);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.4s ease;
            border-radius: 15px;
            font-size: 18px;
            font-weight: 600;
          }

          .galeri-item:hover img {
            transform: scale(1.1);
          }

          .galeri-item:hover .overlay {
            opacity: 1;
          }

          /* Responsive */
          @media (max-width: 768px) {
            .galeri-grid {
              grid-template-columns: repeat(2, 1fr);
              gap: 15px;
            }
            .galeri-img-wrapper {
              height: 200px;
            }
          }

          @media (max-width: 480px) {
            .galeri-grid {
              grid-template-columns: 1fr;
              gap: 10px;
            }
            .galeri-img-wrapper {
              height: 180px;
            }
          }
        </style>
      </main>

</x-layout>
