<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main id="main" class="main">
        <div class="container">

            <div class="mb-4 button-back">
                <a href="{{ route('berita.index') }}" >
                    <i class="fa fa-arrow-left me-2 icon"></i> Kembali
                </a>
            </div>

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">

                    <h2 class="text-center fw-bold mb-3" style="font-size: 28px;">
                        {{ $berita->judul_berita }}
                    </h2>

                    <p class="text-center text-muted mb-4" style="font-size: 14px;">
                        <i class="fa fa-calendar-alt me-2"></i>
                        {{ \Carbon\Carbon::parse($berita->tanggal_berita)->format('d-m-Y') }}
                    </p>

                    <hr class="mb-5">

                    @if($berita->gambar_berita)
                        <div class="text-center mb-5">
                            <img src="{{ asset('storage/' . $berita->gambar_berita) }}"
                                 class="img-fluid rounded shadow-sm"
                                 style="max-width: 700px; height: auto; object-fit: cover;">
                        </div>
                    @endif

                    <div class="text-justify" style="line-height: 1.8; font-size: 16px;">
                        {!! nl2br(e($berita->isi_berita)) !!}
                    </div>

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

    </style>

</x-layoutAdmin>
