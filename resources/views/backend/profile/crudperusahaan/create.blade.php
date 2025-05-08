<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main id="main" class="main">
        <div class="container">
            <div class="button-back mb-3">
                <a href="{{ route('industri.index') }}"><i class="fa fa-arrow-left icon"></i>Kembali</a>
            </div>
            <div class="card shadow-lg border-0 rounded-4 p-5">
                <form action="{{ route('industri.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Industri</label>
                        <input type="text" name="nama_industri" class="form-control shadow-sm" placeholder="Masukkan nama industri" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tanggal Kerjasama</label>
                        <input type="date" name="tanggal_kerjasama" class="form-control shadow-sm" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Profile Industri</label>
                        <textarea name="profile_industri" class="form-control shadow-sm" rows="5" placeholder="Masukkan profile industri" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Logo Industri</label>
                        <input type="file" name="logo_industri" class="form-control shadow-sm"  placeholder="Masukkan Logo industri" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Alamat Industri</label>
                        <textarea name="alamat_industri" class="form-control shadow-sm" rows="2" placeholder="Masukkan alamat industri" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Kontak Industri</label>
                        <input type="text" name="kontak_industri" class="form-control shadow-sm" placeholder="Masukkan kontak industri" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email Industri</label>
                        <input type="email" name="email_industri" class="form-control shadow-sm" placeholder="Masukkan email industri" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Bidang Konsentrasi</label>
                        <input type="text" name="bidang_konsentrasi" class="form-control shadow-sm" placeholder="Masukkan bidang konsentrasi" required>
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
