<x-layoutAdmin>
    <x-slot:title>Detail Visi</x-slot:title>

    <main id="main" class="main">
        <div class="container">
            <div class="button-back mb-3">
                <a href="{{ route('visi.misi') }}">
                    <i class="fa fa-arrow-left icon"></i>Kembali
                </a>
            </div>
            <div class="card shadow-lg border-0 rounded-4 p-5 text-center">
                <h4 class="mb-4 fw-bold">Detail Visi</h4>
                <p class="fs-5 text-muted"><i>" {{ $visi->visi }} "</i></p>
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
            gap: 4px;
            text-decoration: none;
            color: #000;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: 900;
            font-size: 13px;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .button-back a:hover .icon {
            transform: translateX(-5px);
            transition: transform 0.3s ease;
        }

        .button-back .icon {
            font-size: 14px;
        }
    </style>
</x-layoutAdmin>
