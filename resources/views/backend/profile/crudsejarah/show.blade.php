<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main id="main" class="main">
        <div class="container">
            <!-- Tombol Kembali -->
            <div class="button-back mb-4">
                <a href="{{ route('profile.index') }}">
                    <i class="fa fa-arrow-left icon"></i> Kembali
                </a>
            </div>

            <!-- Card Profil -->
            <div class="card shadow-lg border-0 rounded-4 p-5 text-center">
                <h4 class="mb-3 fw-bold text-dark">Sejarah Tefa:</h4>
                <p class="mb-4 text-muted">{{ $profile->sejarah }}</p>

                <h4 class="mb-3 fw-bold text-dark">Latar Belakang:</h4>
                <p class="mb-4 text-muted">{{ $profile->latar_belakang }}</p>
            </div>
        </div>
    </main>

    <style>
        /* Gaya Tombol Kembali */
        .button-back {
            display: inline-block;
        }

        .button-back a {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            text-decoration: none;
            color: #000;
            /* background-color: #fff; */
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: 900;
            font-size: 13px;
            transition: background 0.3s ease, transform 0.3s ease;
        }


        .button-back a:hover .icon {
            transform: translateX(-5px); /* Icon bergerak ke kiri */
            transition: transform 0.3s ease;
        }

        .button-back .icon {
            font-size: 14px;
        }

        /* Gaya Kartu Profil */
        .card {
            max-width: 700px;
            margin: auto;
            background: #ffffff;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .text-muted {
            font-size: 16px;
            color: #6c757d;
        }
    </style>
</x-layoutAdmin>
