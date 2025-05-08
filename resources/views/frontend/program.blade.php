<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="main">
        <section id="program-tefa" class="program-section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <!-- Section Title -->
                <div class="section-title">
                    <h2><span>Program</span> TEFA RPL</h2>
                    <p>Berbagai inovasi teknologi terbaik dari siswa RPL untuk dunia industri.</p>
                </div>

                <!-- Program Grid -->
                <div class="program-grid" data-aos="fade-up" data-aos-delay="200">
                    <!-- Program Item -->
                    @foreach ($programs as $program)
                    <div class="program-card">
                        <div class="card-image">
                            <img src="{{ asset('storage/' . $program->gambar) }}" alt="{{ $program->id }}">
                        </div>
                        <div class="card-content">
                            <h3>{{ $program->nama_program }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit($program->deskripsi, 50) }}</p>
                            <a href="{{ route('programdetail', $program->id) }}" class="btn-detail">
                                <span>Lihat Detail</span> <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <style>
            #program-tefa {
                padding: 120px 0;
                background: #f9fafc;
            }
            .program-card p{
                margin-top: 10px;
                margin-bottom: 10px;
                font-size: 16px;
                color: #555;
                text-indent: 20px;
                word-break: break-word;
                overflow-wrap: break-word;
            }
            #program-tefa .container {
                max-width: 1200px;
                margin: auto;
                padding: 0 20px;
            }

            #program-tefa .section-title {
                text-align: center;
                margin-bottom: 60px;
            }

            #program-tefa .section-title h2 {
                font-size: 26px;
                color: #222;
                margin-bottom: 15px;
                font-weight: 700;
            }



            #program-tefa .section-title p {
                font-size: 18px;
                color: #666;
                max-width: 700px;
                margin: auto;
            }

            /* Grid Program */
            #program-tefa .program-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
                gap: 40px;
            }

            /* Card Program */
            #program-tefa .program-card {
                background: #ffffff;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
                overflow: hidden;
                transition: all 0.4s ease;
                position: relative;
            }

            #program-tefa .program-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            }

            /* Card Image */
            #program-tefa .card-image {
                height: 240px;
                overflow: hidden;
            }

            #program-tefa .card-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.5s ease;
            }

            #program-tefa .program-card:hover .card-image img {
                transform: scale(1.1);
            }

            /* Card Content */
            #program-tefa .card-content {
                padding: 30px 20px;
                text-align: center;
            }

            #program-tefa .card-content h3 {
                font-size: 22px;
                color: #0056b3;
                margin-bottom: 12px;
                font-weight: 600;
            }

            #program-tefa .card-content p {
                font-size: 15px;
                color: #777;
                margin-bottom: 20px;
                min-height: 60px;
            }

            /* Button */
            #program-tefa .btn-detail {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                background: linear-gradient(135deg, #007bff, #0056b3);
                color: #fff;
                padding: 10px 20px;
                border-radius: 50px;
                text-decoration: none;
                font-size: 13px;
                font-weight: 600;
                box-shadow: 0px 5px 15px rgba(0, 123, 255, 0.4);
                transition: background 0.4s, transform 0.4s;
            }

            #program-tefa .btn-detail:hover {
                background: linear-gradient(135deg, #0056b3, #003d80);
                transform: translateY(-2px);
            }

            #program-tefa .btn-detail i {
                transition: transform 0.4s ease;
            }

            #program-tefa .btn-detail:hover i {
                transform: translateX(6px);
            }

            /* Responsive */
            @media (max-width: 768px) {
                #program-tefa .program-grid {
                    grid-template-columns: 1fr;
                }
            }

        </style>





    </main>
</x-layout>
