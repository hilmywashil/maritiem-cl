@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <div class="site-blocks-cover inner-page-cover overlay"
        style="background-image: url({{ asset('asset-front/images/hero_bg_caaip.jpg') }});" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Tentang Kami</h1>
                    <p class="breadcrumb-custom"><a href="{{ route('home') }}">Beranda</a> <span class="mx-2">&gt;</span>
                        <span>Tentang</span>
                    </p>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section">
        <div class="container">
            <div class="row mb-5">

                <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
                    <img src="{{ asset('asset-front/images/caaip/foto_1.jpg') }}" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1" data-aos="fade">
                    <div class="text-left pb-1 border-primary mb-4">
                        <h2 class="text-primary">Tentang CAAIP</h2>
                    </div>
                    <p>
                        CAAIP (Corps Alumni Akademi Ilmu Pelayaran) adalah organisasi resmi alumni STIP
                        Jakarta yang menjadi wadah silaturahmi, jejaring profesional, dan sinergi lintas generasi
                        untuk memajukan industri maritim serta memperkuat kontribusi lulusan pelayaran dalam
                        ekonomi nasional.
                    </p>
                    <p><strong>Visi Utama</strong></p>
                    <p>"Terwujudnya ikatan alumni yang solid, berintegritas, dan sejahtera, serta menjadi pilar
                        utama
                        dalam kemajuan maritim Indonesia."</p>

                    {{-- <div class="row">
                        <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                            <div class="unit-4">
                                <div class="unit-4-icon mb-3 mr-4"><span class="text-primary flaticon-frontal-truck"></span>
                                </div>
                                <div>
                                    <h3>Ground Shipping</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                                    <p class="mb-0"><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                            <div class="unit-4">
                                <div class="unit-4-icon mb-3 mr-4"><span class="text-primary flaticon-travel"></span></div>
                                <div>
                                    <h3>Air Freight</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                                    <p class="mb-0"><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                            <div class="unit-4">
                                <div class="unit-4-icon mb-3 mr-4"><span class="text-primary flaticon-travel"></span></div>
                                <div>
                                    <h3>Air Freight</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                                    <p class="mb-0"><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>
    </div>

    <div class="site-section bg-image overlay"
        style="background-image: url('{{ asset('asset-front/images/caaip/foto_2.png') }}');">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary" data-aos="fade">Misi Utama Maritim</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <div class="how-it-work-item">
                        <span class="number">1</span>
                        <div class="how-it-work-body">
                            <h2>Bakti Anggota (Kesejahteraan & Solidaritas)</h2>

                            <ul class="ul-check list-unstyled white">
                                <li class="text-white">Menjamin bantuan pendidikan (beasiswa) bagi putra-putri alumni yang
                                    yatim/piatu melalui Yayasan Beasiswa Ancol Marunda.</li>
                                <li class="text-white">Membangun jejaring (networking) yang kuat untuk membantu penempatan
                                    kerja dan pengembangan karier alumni di tingkat global.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <div class="how-it-work-item">
                        <span class="number">2</span>
                        <div class="how-it-work-body">
                            <h2>Bakti Almamater (Pengembangan Institusi)</h2>

                            <ul class="ul-check list-unstyled white">
                                <li class="text-white">Mengawal dan mendukung STIP Jakarta dalam meningkatkan kualitas
                                    kurikulum dan
                                    fasilitas agar tetap memenuhi standar Internasional (IMO).</li>
                                <li class="text-white">Berperan sebagai penghubung antara dunia industri (user) dengan
                                    kampus untuk
                                    memastikan lulusan siap kerja.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <div class="how-it-work-item">
                        <span class="number">3</span>
                        <div class="how-it-work-body">
                            <h2>Bakti Negeri (Kontribusi Nasional)</h2>

                            <ul class="ul-check list-unstyled white">
                                <li class="text-white">Memberikan sumbangsih pemikiran, tenaga, dan profesionalisme dalam
                                    membangun
                                    sektor transportasi laut dan logistik nasional demi mendukung visi Indonesia
                                    sebagai Poros Maritim Dunia.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="site-section border-bottom">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary" data-aos="fade">Organisasi</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <div class="person">
                        <img src="{{ asset('asset-front/images/anggota/iko-johansyah.png') }}" alt="Image"
                            class="img-fluid rounded mb-5">
                        <h3>Iko Johansyah</h3>
                        <p class="position text-muted">Ketua Umum</p>
                        <p class="mb-2">
                            Pendidikan: Alumni Akademi Ilmu Pelayaran (AIP) / Sekolah Tinggi Ilmu Pelayaran (STIP)
                            Jakarta (Angkatan 37).
                        </p>
                        <p class="mb-2">
                            Jabatan Organisasi: Ketua Umum Corps Alumni Akademi Ilmu Pelayaran (CAAIP) untuk
                            masa bakti 2023–2027. Beliau terpilih pada Musyawarah Besar ke-VI CAAIP pada
                            Desember 2023.
                        </p>
                        <p class="mb-4">
                            Karier Profesional: General Manager di PT Pelayaran Korindo.
                        </p>

                        <ul class="ul-social-circle">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section border-bottom">
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Testimonials</h2>
                </div>
            </div>

            <div class="slide-one-item home-slider owl-carousel">
                <div>
                    <div class="testimonial">
                        <figure class="mb-4">
                            <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                            <p>John Smith</p>
                        </figure>
                        <blockquote>
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                                reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum
                                eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        </blockquote>
                    </div>
                </div>
                <div>
                    <div class="testimonial">
                        <figure class="mb-4">
                            <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                            <p>Christine Aguilar</p>
                        </figure>
                        <blockquote>
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                                reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum
                                eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        </blockquote>
                    </div>
                </div>

                <div>
                    <div class="testimonial">
                        <figure class="mb-4">
                            <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                            <p>Robert Spears</p>
                        </figure>
                        <blockquote>
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                                reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum
                                eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        </blockquote>
                    </div>
                </div>

                <div>
                    <div class="testimonial">
                        <figure class="mb-4">
                            <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                            <p>Bruce Rogers</p>
                        </figure>
                        <blockquote>
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                                reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum
                                eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        </blockquote>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection