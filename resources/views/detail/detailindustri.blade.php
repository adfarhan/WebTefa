<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="main py-5">
        <div class="container pt-5">

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="card border-0 shadow rounded-4 overflow-hidden">

                        <div class="position-relative text-center">
                            <img src="{{ asset('storage/' . $industri->logo_industri) }}"
                                 alt="{{ $industri->nama_industri }}"
                                 class="mt-5"
                                 style="height: 250px; width: auto; max-width: 600px; object-fit: cover;">
                        </div>



                        <div class="card-body p-5">
                            <h2 class="card-title text-center mb-4 fw-bold">{{ $industri->nama_industri }}</h2>

                            <div class="mb-3">
                                <strong>Tanggal Kerjasama:</strong>
                                <div>{{ \Carbon\Carbon::parse($industri->tanggal_kerjasama)->format('d-m-Y') }}</div>
                            </div>

                            <div class="mb-3">
                                <strong>Alamat Industri:</strong>
                                <div>{{ $industri->alamat_industri }}</div>
                            </div>

                            <div class="mb-3">
                                <strong>Kontak Industri:</strong>
                                <div>{{ $industri->kontak_industri }}</div>
                            </div>

                            <div class="mb-3">
                                <strong>Email Industri:</strong>
                                <div>{{ $industri->email_industri }}</div>
                            </div>

                            <div class="mb-3">
                                <strong>Konsentrasi Keahlian:</strong>
                                <div>{{ $industri->bidang_konsentrasi }}</div>
                            </div>

                            <p class="card-text text-justify mb-0" style="font-size: 17px; line-height: 1.7; text-indent: 20px;">
                                {{ $industri->profile_industri }}
                            </p>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </main>

    <style>
        /* Efek hover gambar */
        .img-hover:hover {
            transform: scale(1.05);
            transition: transform 0.5s;
        }
    </style>
</x-layout>
