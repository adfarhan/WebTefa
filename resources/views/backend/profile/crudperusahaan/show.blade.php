<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main id="main" class="main">
        <div class="container">
            <!-- Tombol Kembali -->
            <div class="button-back mb-3">
                <a href="{{ route('industri.index') }}"><i class="fa fa-arrow-left icon"></i>Kembali</a>
            </div>

            <!-- Card Detail Industri -->
            <div class="card shadow-sm rounded-4 p-4">
                <h2 class="text-center mb-4">{{ $industri->nama_industri }}</h2>

                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <tbody>
                            <tr>
                                <th class="w-25">Tanggal Kerjasama</th>
                                <td>{{ $industri->tanggal_kerjasama }}</td>
                            </tr>
                            <tr>
                                <th>Profile Industri</th>
                                <td>{{ $industri->profile_industri }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Industri</th>
                                <td>{{ $industri->alamat_industri }}</td>
                            </tr>
                            <tr>
                                <th>Kontak Industri</th>
                                <td>{{ $industri->kontak_industri }}</td>
                            </tr>
                            <tr>
                                <th>Email Industri</th>
                                <td>{{ $industri->email_industri }}</td>
                            </tr>
                            <tr>
                                <th>Bidang Konsentrasi</th>
                                <td>{{ $industri->bidang_konsentrasi }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
        th {
            background-color: #f2f2f2;
            font-weight: 600;
        }

        td {
            background-color: #ffffff;
        }

        .card {
            border: none;
        }

    </style>
</x-layoutAdmin>
