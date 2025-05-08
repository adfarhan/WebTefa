<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="main">
        <section id="berita" class="berita-section">
            <div class="container" data-aos="fade-up">
                <!-- Judul Section -->
                <div class="section-title">
                    <h2>Berita <span>Kegiatan & Pencapaian</span></h2>
                    <p>Informasi terbaru mengenai kegiatan dan pencapaian siswa di TEFA RPL.</p>
                </div>

                <!-- List Berita -->
                <div class="berita-list">
                    @foreach ($beritas as $index => $berita)
                        <div class="berita-item {{ $index % 2 != 0 ? 'reverse' : '' }}">
                            <img src="{{ asset('storage/' . $berita->gambar_berita) }}" alt="Gambar Berita">
                            <div class="berita-content">
                                <div class="text-content">
                                    <span class="tanggal" style="font-size: 16px;"><i class="far fa-calendar-alt me-2"></i> {{ \Carbon\Carbon::parse($berita->tanggal_berita)->format('d M Y') }}</span>
                                    <h3>{{ $berita->judul_berita }}</h3>
                                    <p>{{ Str::limit($berita->isi_berita, 100, '...') }}</p> <!-- supaya isi berita tidak kepanjangan -->
                                </div>
                                <a href="{{ route('beritadetail', $berita->id) }}" class="btn-selengkapnya">Baca Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>

        <style>
        /* Section Berita */
        #berita {
            padding: 120px 0;
            background: #f9f9f9;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        /* List Berita */
        .berita-list {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .tanggal {
            font-size: 14px;
            color: #6b7280; /* abu-abu netral */
            margin-bottom: 8px;
            font-weight: 500;
        }
        .berita-content p {
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 16px;
            color: #555;
            text-indent: 20px;
            word-break: break-word;
            overflow-wrap: break-word;
        }


        .berita-item {
            display: flex;
            align-items: stretch;
            background: white;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .berita-item.reverse {
            flex-direction: row-reverse;
        }

        .berita-item img {
            width: 40%;
            object-fit: cover;
        }

        .berita-content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
            flex: 1;
        }

        .text-content {
            flex-grow: 1;
        }
        .berita-content h3 {
            font-size: 22px;
            margin-top: 29px; /* tambah jarak bawah */
            color: #333;
            font-weight: 700;
        }

        /* Tombol */
        .btn-selengkapnya {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            transition: background 0.3s ease-in-out;
            align-self: flex-start;
        }

        .btn-selengkapnya:hover {
            background: #0056b3;
            color: #fff;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .berita-item {
                flex-direction: column;
            }
            .berita-item.reverse {
                flex-direction: column;
            }
            .berita-item img {
                width: 100%;
            }
        }
        </style>

    </main>
</x-layout>
