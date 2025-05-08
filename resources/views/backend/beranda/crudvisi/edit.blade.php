<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main id="main" class="main">
        <div class="container">
            <div class="button-back mb-3">
                <a href="{{ route('visi.misi') }}"><i class="fa fa-arrow-left icon"></i>Kembali</a>
            </div>
            <div class="card shadow-lg border-0 rounded-4 p-5">
                <form action="{{ route('visi.update', $visi) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Visi Tefa</label>
                        <textarea name="visi" class="form-control shadow-sm" rows="4" required>{{ $visi->visi }}</textarea>
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
