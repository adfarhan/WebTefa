<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main id="main" class="main">

        <div class="pagetitle">
          <h1 class="fw-bold">{{ $title }}</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('berandautama.admin') }}">Beranda-Utama</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->

        <div class="card-container">
            <!-- Card 1 -->
            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-icon">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                    <h5 class="card-title">Sejarah & Latar Belakang <span>| Web Tefa</span></h5>
                    <p class="card-text">Menjadikan TEFA sebagai wadah inovasi dan pengembangan keterampilan siswa dalam dunia industri.</p>
                    <div class="btn-container">
                        <a href="{{ route('profile.index') }}" class="btn btn-success btn-sm">
                            Detail <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h5 class="card-title">Bekerjasama <span>| Web Tefa</span></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, soluta repellendus consequatur fugiat modi impedit.</p>
                    <div class="btn-container">
                        <a href="{{ route('industri.index') }}" class="btn btn-success btn-sm">
                            Detail <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h5 class="card-title">Organisasi <span>| Web Tefa</span></h5>
                    <p class="card-text">Program TEFA memberikan pengalaman dunia kerja nyata bagi siswa.</p>
                    <div class="btn-container">
                        <a href="{{ route('organisasis.index') }}" class="btn btn-success btn-sm">
                            Detail <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>


            <!-- Tambahkan lebih banyak card sesuai kebutuhan -->
        </div>

        <style>
        /* Container untuk banyak card dengan CSS Grid */
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px; /* Jarak antar card */
            padding: 20px;
        }

        /* Card Styling */
        .custom-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .custom-card:hover {
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        /* Icon Styling (Di Tengah) */
        .card-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #007bff;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin: 0 auto 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Title Styling */
        .card-title {
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Text Styling */
        .card-text {
            font-size: 14px;
            color: #666;
            margin-bottom: 40px;
        }

        /* Button (Di Bawah Kanan) */
        .btn-container {
            position: absolute;
            bottom: 15px;
            right: 15px;
        }

        .btn-sm {
            font-size: 12px;
            padding: 6px 12px;
            border-radius: 8px;
            transition: background 0.3s ease-in-out;
        }

        .btn-sm:hover {
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .btn-sm i {
            margin-left: 5px;
        }

        /* Responsif:
        - Jika layar kecil (max-width: 768px), 1 card per baris
        - Jika layar sedang (max-width: 1024px), 2 card per baris
        - Jika layar besar, 3 card per baris */
        @media (max-width: 1024px) {
            .card-container {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .card-container {
                grid-template-columns: 1fr;
            }
        }
        </style>



    </main>
</x-layoutAdmin>
