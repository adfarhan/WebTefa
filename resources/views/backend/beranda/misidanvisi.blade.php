<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main id="main" class="main">
        <section class="sejarah-id">
            <div class="container">
                <div class="button-back mb-3">
                    <a href="{{ route('beranda.admin') }}"><i class="fa fa-arrow-left icon"></i>Kembali</a>
                </div>
                <!-- Card Header -->
                <div class="card shadow-lg border-0 rounded-3 p-4">
                    <div class="card-header text-dark d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Visi & Misi</h5>
                        {{-- <a href="" class="btn btn-primary btn-sm">Tambah Data</a> --}}
                    </div>
                    <div class="mt-3">
                        <form action="{{ route('visi.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Visi Tefa</label>
                                <textarea name="visi" class="form-control shadow-sm" rows="3" placeholder="Masukkan visi tefa" required></textarea>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary px-4 py-2 fw-bold">Simpan</button>
                            </div>
                        </form>
                        <form action="{{ route('misi.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Misi Tefa</label>
                                <textarea  name="misi" class="form-control shadow-sm" rows="3" placeholder="Masukkan misi tefa" required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="visi_id" class="form-label fw-semibold">Pilih Visi</label>
                                <select name="visi_id" id="visi_id" class="form-control shadow-sm" required>
                                    <option value="">-- Pilih Visi --</option>
                                    @foreach ($visi as $v)
                                        <option value="{{ $v->id }}">{{ $v->visi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary px-4 py-2 fw-bold">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="card mt-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless custom-table mt-5">
                                <thead class="table-light text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $misi as $misis)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-start fw-semibold" style="font-size: 14px; max-width: 300px; white-space: normal; word-wrap: break-word;">
                                                {{ $misis->visi->visi }}
                                            </td>
                                            <td class="text-start fw-semibold" style="font-size: 14px; max-width: 300px; white-space: normal; word-wrap: break-word;">
                                                {{ $misis->misi }}
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-2">
                                                    <a href="{{ route('misi.show', $misis) }}" class="btn btn-outline-success btn-sm" title="Lihat">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('misi.edit', $misis) }}" class="btn btn-outline-warning btn-sm" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('misi.destroy', $misis->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                                        @csrf @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger btn-sm" title="Hapus">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Card Body dengan Table -->
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="card mt-2 shadow-lg border-0 rounded-2">
                            <div class="card-body p-4">
                                <div class="table-responsive">
                                    <table class="table table-borderless custom-table">
                                        <thead class="table-light text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Visi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $visi as $visis)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-start fw-semibold" style="font-size: 14px; max-width: 300px; white-space: normal; word-wrap: break-word;">
                                                        {{ $visis->visi }}
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content-center gap-2">
                                                            <a href="{{ route('visi.show', $visis) }}" class="btn btn-outline-success btn-sm" title="Lihat">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                            <a href="{{ route('visi.edit', $visis) }}" class="btn btn-outline-warning btn-sm" title="Edit">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <form action="{{ route('visi.destroy', $visis->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                                                @csrf @method('DELETE')
                                                                <button type="submit" class="btn btn-outline-danger btn-sm" title="Hapus">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </main>

    <style>
        /* Menambahkan garis bawah hanya per baris */
        .custom-table tbody tr {
            border-bottom: 1px solid #ddd;
        }

        /* Menghapus garis vertikal */
        .custom-table th,
        .custom-table td {
            border: none;
        }
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
