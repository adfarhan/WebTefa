<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main id="main" class="main">
        <div class="container">
            <div class="button-back mb-3">
                <a href="{{ route('organisasis.index') }}"><i class="fa fa-arrow-left icon"></i>Kembali</a>
            </div>
            <div class="card shadow-lg border-0 rounded-4 p-5">
                <form action="{{ route('organisasis.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="form-label fw-semibold">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control shadow-sm" placeholder="Masukkan nama" required>
                    </div>

                    <div class="mb-4">
                        <label for="nip" class="form-label fw-semibold">NIP</label>
                        <input type="number" name="nip" id="nip" class="form-control shadow-sm" placeholder="Masukkan NIP" required>
                    </div>

                    <div class="mb-4">
                        <label for="jabatan" class="form-label fw-semibold">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control shadow-sm" placeholder="Masukkan Jabatan" required>
                    </div>

                    <div class="mb-4">
                        <label for="foto" class="form-label fw-semibold">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control shadow-sm" accept="image/*">
                    </div>

                    <div class="mb-4">
                        <label for="facebook" class="form-label fw-semibold">Link Facebook (Opsional)</label>
                        <input type="text" name="facebook" id="facebook" class="form-control shadow-sm" placeholder="https://facebook.com/username">
                    </div>

                    <div class="mb-4">
                        <label for="instagram" class="form-label fw-semibold">Link Instagram (Opsional)</label>
                        <input type="text" name="instagram" id="instagram" class="form-control shadow-sm" placeholder="https://instagram.com/username">
                    </div>

                    <div class="mb-4">
                        <label for="linkedin" class="form-label fw-semibold">Link LinkedIn (Opsional)</label>
                        <input type="text" name="linkedin" id="linkedin" class="form-control shadow-sm" placeholder="https://linkedin.com/in/username">
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
