<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="main">
        <section id="contact" class="contact section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>Hubungi Kami</h2>
                <p>Feel free to reach out to us for any inquiries or assistance.</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4 g-lg-5">
                    <div class="col-lg-5">
                        <div class="info-box shadow-sm" data-aos="fade-up" data-aos-delay="200">
                          <h3>Kontak</h3>
                          <p></p>

                          <div class="card modif mb-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-body d-flex align-items-center">
                              <i class="bi bi-geo-alt fs-4 me-3 text-dark"></i>
                              <div>
                                <p class="card-text mb-0">{{ $kontaks->nama ?? '' }}</p>
                              </div>
                            </div>
                          </div>

                          <div class="card modif mb-3" data-aos="fade-up" data-aos-delay="400">
                            <div class="card-body d-flex align-items-center">
                              <i class="bi bi-telephone fs-4 me-3 text-dark"></i>
                              <div>
                                <p class="card-text mb-0">{{ $kontaks->nomor_telepon ?? '' }}</p>
                              </div>
                            </div>
                          </div>

                          <div class="card modif mb-3" data-aos="fade-up" data-aos-delay="450">
                            <div class="card-body d-flex align-items-center">
                              <i class="bi bi-envelope fs-4 me-3 text-dark"></i>
                              <div>
                                <p class="card-text mb-0">{{ $kontaks->email ?? '' }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>


                    <div class="col-lg-7">
                        <div class="contact-card card p-4 shadow-sm border-0" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="text-center mb-4">Media Sosial</h3>
                            <div class="d-flex flex-column align-items-center gap-3">
                                <a href="{{ $kontaks->instagram?? ''}}" target="_blank" class="btn btn-outline-primary text-dark social-btn d-flex align-items-center gap-2 w-75">
                                    <i class="fab fa-instagram"></i> Instagram
                                </a>

                                <a href="{{ $kontaks->facebook?? '' }}" target="_blank" class="btn btn-outline-primary text-dark social-btn d-flex align-items-center gap-2 w-75">
                                    <i class="fab fa-facebook"></i> Facebook
                                </a>

                                <a href="{{ $kontaks->twitter?? '' }}" target="_blank" class="btn btn-outline-primary text-dark social-btn d-flex align-items-center gap-2 w-75">
                                    <i class="fab fa-twitter"></i> Twitter
                                </a>

                                <a href="{{ $kontaks->tiktok?? ''}}" target="_blank" class="btn btn-outline-primary text-dark social-btn d-flex align-items-center gap-2 w-75">
                                    <i class="fab fa-tiktok"></i> TikTok
                                </a>

                                <a href="{{ $kontaks->youtube?? '' }}" target="_blank" class="btn btn-outline-primary text-dark social-btn d-flex align-items-center gap-2 w-75">
                                    <i class="fab fa-youtube"></i> YouTube
                                </a>
                            </div>
                        </div>
                    </div>

                    <style>
                        .contact-card {
                            border-radius: 12px;
                        }

                        .contact-card:hover {
                            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                        }

                        .social-btn {
                            font-size: 16px;
                            padding: 12px 24px;
                            text-decoration: none;
                            border-radius: 50px;
                            transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
                        }

                        .social-btn i {
                            font-size: 18px;
                        }

                        .social-btn:hover {
                            background-color: #007bff;
                            color: white;
                            transform: translateY(-5px);
                        }

                        .social-btn i {
                            font-size: 20px;
                        }

                        .contact-card h3 {
                            font-size: 24px;
                            font-weight: bold;
                        }

                        .contact-card .btn {
                            font-weight: 600;
                        }

                        /* Responsive styling */
                        @media (max-width: 767px) {
                            .social-btn {
                                font-size: 14px;
                                padding: 10px 18px;
                            }
                        }
                    </style>


                </div>
            </div>
        </section>

        <style>
            #contact {
                padding: 130px 0;
            }
            .contact{
                position: relative;
                padding-top: 160px;
                background-color: #f6f6f6;
                background-image: radial-gradient(#ced6e0 1px, transparent 1px);
                background-size: 20px 20px;
            }
            .info-item {
                display: flex;
                align-items: center;
                gap: 15px;
                margin-bottom: 15px;
            }
            .info-item i {
                font-size: 24px;
                color: #fff;
            }
            .contact-form {
                background: #fff;
                border-radius: 10px;
            }
            .btn-primary {
                background-color: #007bff;
                border: none;
                /* border-radius: 5px; */
            }
            .btn-primary:hover {
                background-color: #0056b3;
            }
            .card {
                background: #fff;
                border-radius: 10px;
                border: 1px solid #ddd;
                box-shadow: 0 2px 10px rgba(0,0,0,0.05);
                }

            .modif{
                margin-top: 50px;
            }

                .card-body {
                padding: 15px;
                }

                .card i {
                color: #000;
                }

        </style>
    </main>
</x-layout>
