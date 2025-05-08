<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="main py-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="card border-0 shadow rounded-4 overflow-hidden">

                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $program->gambar) }}"
                                 alt="{{ $program->nama_program }}"
                                 class="w-100"
                                 style="height: 400px; object-fit: cover; transition: transform 0.5s;">
                        </div>

                        <div class="card-body p-5">
                            <h2 class="card-title text-center mb-4 fw-bold">{{ $program->nama_program }}</h2>

                            <p class="card-text text-justify mb-5" style="font-size: 17px; line-height: 1.7; text-indent: 20px;">
                                {{ $program->deskripsi }}
                            </p>


                        </div>

                    </div>

                </div>
            </div>

        </div>
    </main>

    <style>
        /* Efek hover gambar */
        .card img:hover {
            transform: scale(1.05);
        }
        .container{
            padding-top: 100px;

        }
    </style>
</x-layout>
