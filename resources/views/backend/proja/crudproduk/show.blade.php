<x-layoutAdmin>
    <x-slot:title>Detail Produk</x-slot:title>

    <main id="main" class="main">
        <div class="container">
            <div class="button-back mb-3">
                <a href="{{ route('produk.index') }}">
                    <i class="fa fa-arrow-left icon"></i> Kembali
                </a>
            </div>

            <div class="card shadow-lg border-0 rounded-4 p-5">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('storage/' . $produk->gambar) }}" class="img-fluid rounded shadow-sm">
                    </div>
                    <div class="col-md-7">
                        <h2 class="fw-bold">{{ $produk->nama_produk }}</h2>
                        <p class="text-muted">{{ $produk->kode_produk }}</p>
                        <p class="fs-5">{{ $produk->deskripsi }}</p>
                        <h4 class="fw-bold text-primary">Rp {{ number_format($produk->harga, 0, ',', '.') }}</h4>
                    </div>
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
