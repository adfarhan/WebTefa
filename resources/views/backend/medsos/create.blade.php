<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main id="main" class="main">
        <div class="container">
            <div class="button-back mb-3">
                <a href="{{ route('kontaks.index') }}"><i class="fa fa-arrow-left icon"></i>Kembali</a>
            </div>
            <div class="card shadow-lg border-0 rounded-4 p-5">
                <form action="{{ route('kontaks.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Alamat</label>
                        <textarea name="nama" class="form-control shadow-sm" rows="5" placeholder="Masukkan alamat" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" name="email" class="form-control shadow-sm" placeholder="Masukkan email " required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">No Telepon</label>
                        <input type="number" name="nomor_telepon" class="form-control shadow-sm" placeholder="Masukkan no telepon" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Instagram</label>
                        <input type="text" name="instagram" class="form-control shadow-sm" placeholder="https://instagram.com/username" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Facebook</label>
                        <input type="text" name="facebook" class="form-control shadow-sm" placeholder="https://facebook.com/username" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Twitter</label>
                        <input type="text" name="twitter" class="form-control shadow-sm" placeholder="https://x-twiter.com/username" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tiktok</label>
                        <input type="text" name="tiktok" class="form-control shadow-sm" placeholder="https://tiktok.com/username" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">YouTube</label>
                        <input type="text" name="youtube" class="form-control shadow-sm" placeholder="https://youtube.com/username" required>
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

