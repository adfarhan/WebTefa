<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main id="main" class="main">

        <div class="container">
            <div class="button-back mb-3">
                <a href="{{ route('industri.index') }}"><i class="fa fa-arrow-left icon"></i>Kembali</a>
            </div>
            <div class="card shadow-lg border-0 rounded-4 p-5">
                <form action="{{ route('industri.update', $industri->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Industri</label>
                        <input type="text" name="nama_industri" class="form-control shadow-sm" value="{{ $industri->nama_industri }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tanggal Kerjasama</label>
                        <input type="date" name="tanggal_kerjasama" class="form-control shadow-sm" value="{{ $industri->tanggal_kerjasama }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Profile Industri</label>
                        <textarea name="profile_industri" class="form-control shadow-sm" rows="5" required>{{ $industri->profile_industri }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Logo Industri (optional)</label><br>
                        @if ($industri->logo_industri)
                            <img src="{{ asset('storage/' . $industri->logo_industri) }}" alt="Logo Industri" class="img-thumbnail mb-2" style="width: 120px;">
                        @endif
                        <input type="file" name="logo_industri" class="form-control shadow-sm mt-2">
                        <small class="text-muted">Kosongkan jika tidak ingin mengganti logo.</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Alamat Industri</label>
                        <textarea name="alamat_industri" class="form-control shadow-sm" rows="2" required>{{ $industri->alamat_industri }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Kontak Industri</label>
                        <input type="text" name="kontak_industri" class="form-control shadow-sm" value="{{ $industri->kontak_industri }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email Industri</label>
                        <input type="email" name="email_industri" class="form-control shadow-sm" value="{{ $industri->email_industri }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Bidang Konsentrasi</label>
                        <input type="text" name="bidang_konsentrasi" class="form-control shadow-sm"  value="{{ $industri->bidang_konsentrasi }}" required>
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
