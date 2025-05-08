<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main id="main" class="main">
        <section class="sejarah-id">
            <div class="container">
                <div class="button-back mb-3">
                    <a href="{{ route('profile.admin') }}"><i class="fa fa-arrow-left icon"></i>Kembali</a>
                </div>
                <!-- Card Header -->
                <div class="card shadow-lg border-0 rounded-3 p-4">
                    <div class="card-header text-dark d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Organisasi</h5>
                        <a href="{{ route('organisasis.create') }}" class="btn btn-outline-primary btn-sm "><i class="fa fa-plus"></i></a>
                    </div>
                </div>

                <!-- Card Body dengan Table -->
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="table-responsive mt-5">
                            <table class="table align-middle table-borderless shadow-sm rounded overflow-hidden">
                                <thead style="background: linear-gradient(135deg, #89f7fe, #66a6ff); color: white;">
                                    <tr class="text-center">
                                        <th style="width: 5%;">No</th>
                                        <th style="width: 15%;">Nama</th>
                                        <th style="width: 15%;">NIP</th>
                                        <th style="width: 15%;">Jabatan</th>
                                        <th style="width: 15%;">Foto</th>
                                        <th style="width: 15%;">Facebook</th>
                                        <th style="width: 15%;">Instagram</th>
                                        <th style="width: 15%;">Linkedin</th>
                                        <th style="width: 10%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($organisasis as $organisasi)
                                        <tr class="align-middle" style="transition: background 0.3s;" onmouseover="this.style.background='#f2f7ff'" onmouseout="this.style.background='white'">
                                            <td>{{ $loop->iteration }}.</td>
                                            <td class="text-start fw-semibold" style="font-size: 17px; white-space: nowrap;">{{ $organisasi->nama }}</td>
                                            <td class="text-start fw-semibold" style="font-size: 15px; white-space: nowrap;">{{ $organisasi->nip }}</td>
                                            <td class="text-start fw-semibold" style="font-size: 15px; white-space: nowrap;">{{ $organisasi->jabatan }}</td>
                                            <td>
                                                @if ($organisasi->foto)
                                                    <img src="{{ asset('storage/' . $organisasi->foto) }}" class="rounded-3 border shadow-sm" width="100">
                                                @else
                                                    <span class="text-muted">Tidak ada gambar</span>
                                                @endif
                                            </td>
                                            <td class="text-start fw-semibold" style="font-size: 14px; white-space: nowrap;">{{ $organisasi->facebook }}</td>
                                            <td class="text-start fw-semibold" style="font-size: 14px; white-space: nowrap;">{{ $organisasi->instagram }}</td>
                                            <td class="text-start fw-semibold" style="font-size: 14px; white-space: nowrap;">{{ $organisasi->linkedin }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-2">
                                                    <a href="{{ route('organisasis.show', $organisasi) }}" class="btn btn-outline-success btn-sm" title="Lihat">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('organisasis.edit', $organisasi) }}" class="btn btn-outline-warning btn-sm" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('organisasis.destroy', $organisasi->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
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
