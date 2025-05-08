<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main id="main" class="main">
        <div class="container">
            <div class="button-back mb-3">
                <a href="{{ route('landing.index') }}"><i class="fa fa-arrow-left icon"></i> Kembali</a>
            </div>
            <div class="card shadow-lg border-0 rounded-4 p-5">
                <h2 class="text-center fw-bold mb-4">{{ $landing->judul }}</h2>

                <div class="text-center mb-4">
                    @if ($landing->logo)
                        <img src="{{ asset('storage/' . $landing->logo) }}" alt="Logo" class="rounded-4 shadow-sm border" width="200">
                    @else
                        <p class="text-muted">Tidak ada logo</p>
                    @endif
                </div>

                <div class="mb-3">
                    <h5 class="fw-semibold">Penjelasan Singkat:</h5>
                    <p class="text-muted">{{ $landing->pekat }}</p>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('landing.edit', $landing) }}" class="btn btn-warning fw-bold px-4 py-2">Edit</a>
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
