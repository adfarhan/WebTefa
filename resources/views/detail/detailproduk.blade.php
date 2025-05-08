<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="main py-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="card border-0 shadow rounded-4 overflow-hidden">

                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $produk->gambar) }}"
                                 alt="{{ $produk->nama_produk }}"
                                 class="w-100"
                                 style="height: 400px; object-fit: cover; transition: transform 0.5s;">
                        </div>

                        <div class="card-body p-5">
                            <h2 class="card-title text-center mb-4 fw-bold">{{ $produk->nama_produk }}</h2>
                            <h4>Rp {{ number_format($produk->harga, 0, ',', '.') }}</h4>
                            <p><span class="fw-bold">Kode Produk: </span>{{ $produk->kode_produk }}</p>
                            <p class="card-text text-justify mb-5" style="font-size: 17px; line-height: 1.7; text-indent: 20px;">
                                {{ $produk->deskripsi }}
                            </p>


                        </div>

                    </div>

                </div>
            </div>

        </div>
    </main>

    <style>
        /* Efek hover gambar */
        .card img:hover {
            transform: scale(1.05);
        }
        .container{
            padding-top: 100px;

        }
    </style>
</x-layout>
