<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main id="main" class="main">
        <div class="container">
            <div class="button-back mb-3">
                <a href="{{ route('berita.index') }}"><i class="fa fa-arrow-left icon"></i>Kembali</a>
            </div>
            <div class="card shadow-lg border-0 rounded-4 p-5">
                <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Judul Berita</label>
                        <input type="text" name="judul_berita" class="form-control shadow-sm" placeholder="Masukkan judul berita" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tanggal Berita</label>
                        <input type="date" name="tanggal_berita" class="form-control shadow-sm" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Isi Berita</label>
                        <textarea name="isi_berita" class="form-control shadow-sm" rows="5" placeholder="Masukkan isi berita" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Gamba Beritar</label>
                        <input type="file" name="gambar_berita" class="form-control shadow-sm">
                    </div>
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
