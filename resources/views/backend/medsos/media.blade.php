<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main id="main" class="main">
        <div class="card p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title mb-0">Daftar Kontak</h5>
                <a href="{{ route('kontaks.create') }}" class="btn btn-outline-primary btn-sm">
                    <i class="fas fa-plus"></i>
                </a>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($kontaks as $kontak)
                    <div class="col">
                        <div class="card h-100 shadow-sm contact-card">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">
                                    <i class="fas fa-map-marker-alt me-2 text-secondary"></i>{{ $kontak->nama }}
                                </h5>
                                <p class="mb-2">
                                    <i class="fas fa-envelope me-2 text-secondary"></i> {{ $kontak->email }}
                                </p>
                                <p class="mb-2">
                                    <i class="fas fa-phone me-2 text-secondary"></i> {{ $kontak->nomor_telepon }}
                                </p>

                                {{-- Sosial Media --}}
                                <div class="d-flex flex-wrap gap-2 py-2">
                                    @if ($kontak->instagram)
                                        <a href="{{ $kontak->instagram }}" target="_blank" class="btn btn-outline-secondary btn-sm" title="Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    @endif
                                    @if ($kontak->facebook)
                                        <a href="{{ $kontak->facebook }}" target="_blank" class="btn btn-outline-secondary btn-sm" title="Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    @endif
                                    @if ($kontak->twitter)
                                        <a href="{{ $kontak->twitter }}" target="_blank" class="btn btn-outline-secondary btn-sm" title="Twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    @endif
                                    @if ($kontak->tiktok)
                                        <a href="{{ $kontak->tiktok }}" target="_blank" class="btn btn-outline-secondary btn-sm" title="TikTok">
                                            <i class="fab fa-tiktok"></i>
                                        </a>
                                    @endif
                                    @if ($kontak->youtube)
                                        <a href="{{ $kontak->youtube }}" target="_blank" class="btn btn-outline-secondary btn-sm" title="YouTube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    @endif
                                </div>

                            </div>

                            <div class="card-footer d-flex justify-content-end gap-2">
                                <a href="{{ route('kontaks.edit', $kontak->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('kontaks.destroy', $kontak->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <style>
        .contact-card {
            border-radius: 12px;
            transition: box-shadow 0.3s;
        }

        .contact-card:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        .card-title {
            font-size: 18px;
        }

        .card-body p {
            font-size: 14px;
            color: #666;
        }

        .btn-outline-secondary {
            border-radius: 50%;
            width: 36px;
            height: 36px;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-footer {
            background: transparent;
            border-top: none;
        }
    </style>
</x-layoutAdmin>
