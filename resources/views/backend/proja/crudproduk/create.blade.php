<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main id="main" class="main">
        <div class="container">
            <div class="button-back mb-3">
                <a href="{{ route('produk.index') }}"><i class="fa fa-arrow-left icon"></i>Kembali</a>
            </div>
            <div class="card shadow-lg border-0 rounded-4 p-5">
                <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Kode Produk -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Kode Produk</label>
                        <input type="text" name="kode_produk" class="form-control shadow-sm" placeholder="Masukkan kode produk" required>
                    </div>

                    <!-- Nama Produk -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control shadow-sm" placeholder="Masukkan nama produk" required>
                    </div>

                    <!-- Gambar Utama -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Gambar Utama</label>
                        <input type="file" name="gambar" class="form-control shadow-sm" required>
                    </div>

                    <!-- Gambar Tambahan -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Gambar Tambahan</label>
                        <input type="file" name="gambar_slide[]" class="form-control shadow-sm" multiple>
                        <small class="form-text text-muted">Pilih beberapa gambar untuk swiper.</small>
                    </div>

                    <!-- Deskripsi Produk -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control shadow-sm" rows="5" placeholder="Tambahkan deskripsi produk" required></textarea>
                    </div>

                    <!-- Harga Produk -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Harga Produk</label>
                        <input type="number" name="harga" class="form-control shadow-sm" placeholder="Masukkan nominal harga produk" required>
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary px-4 py-2 fw-bold">Simpan</button>
                    </div>
                </form>

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

    </style>
</x-layoutAdmin>
