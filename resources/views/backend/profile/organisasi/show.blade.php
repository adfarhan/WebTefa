<x-layoutAdmin>
    <x-slot:title>Detail Organisasi</x-slot:title>

    <main id="main" class="main">
        <div class="container">
            <div class="button-back mb-3">
                <a href="{{ route('organisasis.index') }}"><i class="fa fa-arrow-left icon"></i> Kembali</a>
            </div>

            <div class="card shadow-lg border-0 rounded-3 p-4">
                <div class="card-header bg-primary text-white text-center">
                    <h5 class="mb-0"><i class="fa fa-user-tie me-2"></i> Detail Organisasi</h5>
                </div>
                <div class="card-body">
                    <div class="text-center mt-4 mb-5">
                        <img src="{{ asset('storage/' . $organisasi->foto) }}" alt="Foto {{ $organisasi->nama }}" class="rounded-circle" width="150" height="150" style="object-fit: cover;">
                    </div>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th><i class="fa fa-user me-2"></i> Nama</th>
                                <td class="text-muted">: {{ $organisasi->nama }}</td>
                            </tr>
                            <tr>
                                <th><i class="fa fa-id-card me-2"></i> NIP</th>
                                <td class="text-muted">: {{ $organisasi->nip }}</td>
                            </tr>
                            <tr>
                                <th><i class="fa fa-briefcase me-2"></i> Jabatan</th>
                                <td class="text-muted text-capitalize">: {{ $organisasi->jabatan }}</td>
                            </tr>
                            <tr>
                                <th><i class="fab fa-facebook me-2"></i> Facebook</th>
                                <td class="text-muted">
                                    @if($organisasi->facebook)
                                        : <a href="{{ $organisasi->facebook }}" target="_blank" class="text-decoration-none">{{ $organisasi->facebook }}</a>
                                    @else
                                        : -
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th><i class="fab fa-instagram me-2"></i> Instagram</th>
                                <td class="text-muted">
                                    @if($organisasi->instagram)
                                        : <a href="{{ $organisasi->instagram }}" target="_blank" class="text-decoration-none">{{ $organisasi->instagram }}</a>
                                    @else
                                        : -
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th><i class="fab fa-linkedin me-2"></i> LinkedIn</th>
                                <td class="text-muted">
                                    @if($organisasi->linkedin)
                                        : <a href="{{ $organisasi->linkedin }}" target="_blank" class="text-decoration-none">{{ $organisasi->linkedin }}</a>
                                    @else
                                        : -
                                    @endif
                                </td>
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
            gap: 6px;
            text-decoration: none;
            color: #333;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: 700;
            font-size: 14px;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .button-back a:hover .icon {
            transform: translateX(-5px);
            transition: transform 0.3s ease;
        }

        .button-back .icon {
            font-size: 16px;
        }

        .card {
            max-width: 500px;
            margin: auto;
        }

        th {
            width: 150px;
            font-weight: 600;
            vertical-align: top;
        }
    </style>
</x-layoutAdmin>
