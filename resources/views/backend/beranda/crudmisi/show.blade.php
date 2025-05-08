<x-layoutAdmin>
    <x-slot:title>Detail Misi</x-slot:title>

    <main id="main" class="main">
        <div class="container">
            <div class="button-back mb-3">
                <a href="{{ route('visi.misi') }}">
                    <i class="fa fa-arrow-left icon"></i> Kembali
                </a>
            </div>

            <div class="card shadow-lg border-0 rounded-4 p-5">
                <h3 class="mb-4 fw-bold text-center">Detail Misi</h3>

                <div class="mb-4">
                    <h5 class="text-muted">Misi:</h5>
                    <p class="fs-5 text-dark">{{ $misi->misi }}</p>
                </div>

                <div class="mb-4">
                    <h5 class="text-muted">Bagian dari Visi:</h5>
                    <p class="fs-5 text-primary fw-semibold">{{ $misi->visi->visi ?? '-' }}</p>
                </div>

            </div>
        </div>
    </main>

    <style>
        .button-back {
            display: inline-block;
        }

        .button-back a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #6c757d;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: 600;
            font-size: 14px;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .button-back a:hover {
            color: #343a40;
            text-decoration: none;
        }

        .button-back a:hover .icon {
            transform: translateX(-5px); /* Ikon bergerak ke kiri */
            transition: transform 0.3s ease;
        }

        .button-back .icon {
            font-size: 14px;
        }

        .card {
            max-width: 600px;
            margin: auto;
        }

        .btn i {
            margin-right: 5px;
        }
    </style>
</x-layoutAdmin>
