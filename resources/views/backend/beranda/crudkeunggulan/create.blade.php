<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main id="main" class="main">
        <div class="container">
            <div class="button-back mb-3">
                <a href="{{ route('keunggulan.index') }}"><i class="fa fa-arrow-left icon"></i>Kembali</a>
            </div>
            <div class="card shadow-lg border-0 rounded-4 p-5">
                <form action="{{ route('keunggulan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Nama Keungggulan</label>
                        <input type="text" name="nama_keunggulan" class="form-control shadow-sm" placeholder="Masukkan nama Keunggulan" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Isi</label>
                        <textarea  name="isi" class="form-control shadow-sm" placeholder="Masukkan nama program" rows="4" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Icon</label>
                        <input type="text" name="icon" class="form-control shadow-sm" placeholder="Contoh: bi bi-award" required>
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
