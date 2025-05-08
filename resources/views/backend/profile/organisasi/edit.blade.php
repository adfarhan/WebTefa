<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main id="main" class="main">
        <div class="container">
            <div class="button-back mb-3">
                <a href="{{ route('organisasis.index') }}"><i class="fa fa-arrow-left icon"></i>Kembali</a>
            </div>
            <div class="card shadow-lg border-0 rounded-4 p-5">
                <form action="{{ route('organisasis.update', $organisasi->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $organisasi->nama }}" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">NIP</label>
                        <input type="number" name="nip" class="form-control" value="{{ $organisasi->nip }}" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" value="{{ $organisasi->jabatan }}" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Foto Lama</label><br>
                        <img src="{{ asset('storage/' . $organisasi->foto) }}" alt="Foto Organisasi" width="100">
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Ganti Foto (Opsional)</label>
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Facebook</label>
                        <input type="text" name="facebook" class="form-control" value="{{ $organisasi->facebook }}">
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Instagram</label>
                        <input type="text" name="instagram" class="form-control" value="{{ $organisasi->instagram }}">
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">LinkedIn</label>
                        <input type="text" name="linkedin" class="form-control" value="{{ $organisasi->linkedin }}">
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-warning px-4 py-2 fw-bold">Update</button>
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
