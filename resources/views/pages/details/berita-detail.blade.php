@extends('layouts.app')

@section('title', 'Detail Berita')

@section('content')

    {{-- Hero / Cover --}}
    <div class="site-blocks-cover inner-page-cover overlay"
        style="background-image: url('{{ asset('storage/' . $berita->gambar) }}');" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white font-weight-light text-uppercase font-weight-bold" style="font-size: 2.8rem;">
                        {{ $berita->judul }}
                    </h1>
                    <p class="breadcrumb-custom">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="mx-2">&gt;</span>
                        <a href="{{ route('berita') }}">Berita</a>
                        <span class="mx-2">&gt;</span>
                        <span>Detail</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="site-section">
        <div class="container">
            <div class="row">

                {{-- Article Column --}}
                <div class="col-lg-8 mb-5 mb-lg-0">

                    {{-- Thumbnail --}}
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Thumbnail Berita"
                            class="img-fluid w-100 berita-thumbnail">
                    </div>

                    {{-- Meta --}}
                    <div class="meta mb-3">
                        Admin
                        <span class="mx-2">&bullet;</span>
                        {{ \Carbon\Carbon::parse($berita->tanggal_publish)->format('d-M-Y') }}
                        <span class="mx-2">&bullet;</span>
                        <a href="{{ route('berita') }}">News</a>
                    </div>

                    {{-- Judul --}}
                    <h2 class="berita-detail-title mb-4">
                        {{ $berita->judul }}
                    </h2>

                    {{-- Konten Artikel --}}
                    <div class="berita-content">
                        {!! nl2br(e($berita->konten)) !!}
                    </div>

                    {{-- Divider --}}
                    <hr class="my-5">

                    {{-- Navigasi Artikel --}}
                    {{-- <div class="row berita-nav">
                        <div class="col-6">
                            <a href="#" class="berita-nav-link d-flex align-items-center">
                                <span class="berita-nav-icon mr-2">&laquo;</span>
                                <div>
                                    <small class="d-block text-muted">Sebelumnya</small>
                                    <span class="berita-nav-label">Komunitas Adakan Bakti Sosial Tahunan</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="#" class="berita-nav-link d-flex align-items-center justify-content-end">
                                <div>
                                    <small class="d-block text-muted">Selanjutnya</small>
                                    <span class="berita-nav-label">Program Beasiswa Tahun 2025 Dibuka</span>
                                </div>
                                <span class="berita-nav-icon ml-2">&raquo;</span>
                            </a>
                        </div>
                    </div> --}}

                </div>

                {{-- Sidebar --}}
                <div class="col-lg-4">

                    {{-- Berita Terkini --}}
                    <div class="sidebar-widget mb-5">
                        <h3 class="sidebar-title">Berita Terkini</h3>
                        <ul class="sidebar-recent-list list-unstyled">

                            <li class="sidebar-recent-item d-flex mb-3">
                                <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=80&q=70"
                                    alt="thumbnail" class="sidebar-thumb mr-3">
                                <div>
                                    <a href="#" class="sidebar-recent-title">
                                        Program Beasiswa Tahun 2025 Resmi Dibuka
                                    </a>
                                    <small class="d-block text-muted">10-Apr-2025</small>
                                </div>
                            </li>

                            <li class="sidebar-recent-item d-flex mb-3">
                                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=80&q=70"
                                    alt="thumbnail" class="sidebar-thumb mr-3">
                                <div>
                                    <a href="#" class="sidebar-recent-title">
                                        Rapat Koordinasi Anggota Komunitas Wilayah Barat
                                    </a>
                                    <small class="d-block text-muted">02-Apr-2025</small>
                                </div>
                            </li>

                            <li class="sidebar-recent-item d-flex mb-3">
                                <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?w=80&q=70"
                                    alt="thumbnail" class="sidebar-thumb mr-3">
                                <div>
                                    <a href="#" class="sidebar-recent-title">
                                        Pelatihan Digital Marketing untuk UMKM Lokal
                                    </a>
                                    <small class="d-block text-muted">25-Mar-2025</small>
                                </div>
                            </li>

                            <li class="sidebar-recent-item d-flex mb-3">
                                <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=80&q=70"
                                    alt="thumbnail" class="sidebar-thumb mr-3">
                                <div>
                                    <a href="#" class="sidebar-recent-title">
                                        Komunitas CAAIP Raih Penghargaan Nasional 2025
                                    </a>
                                    <small class="d-block text-muted">18-Mar-2025</small>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="sidebar-widget mb-5">
                        <h3 class="sidebar-title">Berita Populer</h3>
                        <ul class="sidebar-recent-list list-unstyled">

                            <li class="sidebar-recent-item d-flex mb-3">
                                <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=80&q=70"
                                    alt="thumbnail" class="sidebar-thumb mr-3">
                                <div>
                                    <a href="#" class="sidebar-recent-title">
                                        Program Beasiswa Tahun 2025 Resmi Dibuka
                                    </a>
                                    <small class="d-block text-muted">10-Apr-2025</small>
                                </div>
                            </li>

                            <li class="sidebar-recent-item d-flex mb-3">
                                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=80&q=70"
                                    alt="thumbnail" class="sidebar-thumb mr-3">
                                <div>
                                    <a href="#" class="sidebar-recent-title">
                                        Rapat Koordinasi Anggota Komunitas Wilayah Barat
                                    </a>
                                    <small class="d-block text-muted">02-Apr-2025</small>
                                </div>
                            </li>

                            <li class="sidebar-recent-item d-flex mb-3">
                                <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?w=80&q=70"
                                    alt="thumbnail" class="sidebar-thumb mr-3">
                                <div>
                                    <a href="#" class="sidebar-recent-title">
                                        Pelatihan Digital Marketing untuk UMKM Lokal
                                    </a>
                                    <small class="d-block text-muted">25-Mar-2025</small>
                                </div>
                            </li>

                            <li class="sidebar-recent-item d-flex mb-3">
                                <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=80&q=70"
                                    alt="thumbnail" class="sidebar-thumb mr-3">
                                <div>
                                    <a href="#" class="sidebar-recent-title">
                                        Komunitas CAAIP Raih Penghargaan Nasional 2025
                                    </a>
                                    <small class="d-block text-muted">18-Mar-2025</small>
                                </div>
                            </li>

                        </ul>
                    </div>

                    {{-- <div class="sidebar-widget mb-5">
                        <h3 class="sidebar-title">Kategori</h3>
                        <ul class="sidebar-categories list-unstyled">
                            <li><a href="#">News <span class="float-right text-muted">12</span></a></li>
                            <li><a href="#">Program <span class="float-right text-muted">8</span></a></li>
                            <li><a href="#">Kegiatan <span class="float-right text-muted">15</span></a></li>
                            <li><a href="#">Pengumuman <span class="float-right text-muted">5</span></a></li>
                            <li><a href="#">Prestasi <span class="float-right text-muted">3</span></a></li>
                        </ul>
                    </div <div class="sidebar-widget">
                    <h3 class="sidebar-title">Bagikan</h3>
                    <div class="share-buttons d-flex gap-2">
                        <a href="#" class="btn btn-share btn-facebook">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </a>
                        <a href="#" class="btn btn-share btn-twitter">
                            <i class="fab fa-twitter"></i> Twitter
                        </a>
                        <a href="#" class="btn btn-share btn-whatsapp">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                    </div>
                </div>
                --}}

            </div>
            {{-- /Sidebar --}}

        </div>
    </div>
    </div>

    {{-- Custom Styles --}}
    <style>
        /* ── Thumbnail ── */
        .berita-thumbnail {
            border-radius: 6px;
            object-fit: cover;
            max-height: 420px;
        }

        /* ── Judul Artikel ── */
        .berita-detail-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #222;
            line-height: 1.4;
        }

        /* ── Body Teks ── */
        .berita-content p {
            font-size: 1rem;
            line-height: 1.85;
            color: #444;
            margin-bottom: 1.25rem;
        }

        /* ── Blockquote ── */
        .berita-blockquote {
            border-left: 4px solid #e8a200;
            background: #fdf6e3;
            padding: 1.25rem 1.5rem;
            border-radius: 0 6px 6px 0;
        }

        .berita-blockquote p {
            font-size: 1.05rem;
            font-style: italic;
            color: #555;
            margin-bottom: 0;
        }

        .berita-blockquote footer {
            font-size: 0.875rem;
            color: #888;
        }

        /* ── Navigasi Artikel ── */
        .berita-nav-link {
            color: #333;
            text-decoration: none;
            transition: color 0.2s;
        }

        .berita-nav-link:hover {
            color: #e8a200;
        }

        .berita-nav-icon {
            font-size: 1.4rem;
            color: #e8a200;
        }

        .berita-nav-label {
            font-size: 0.9rem;
            font-weight: 600;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* ── Sidebar ── */
        .sidebar-title {
            font-size: 1.1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            border-bottom: 3px solid #e8a200;
            padding-bottom: 0.5rem;
            margin-bottom: 1.25rem;
            color: #222;
        }

        /* Recent list */
        .sidebar-thumb {
            width: 70px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
            flex-shrink: 0;
        }

        .sidebar-recent-title {
            font-size: 0.875rem;
            font-weight: 600;
            color: #333;
            text-decoration: none;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: color 0.2s;
        }

        .sidebar-recent-title:hover {
            color: #e8a200;
        }

        /* Categories */
        .sidebar-categories li {
            border-bottom: 1px solid #f0f0f0;
        }

        .sidebar-categories li a {
            display: block;
            padding: 0.5rem 0;
            color: #444;
            font-size: 0.9rem;
            text-decoration: none;
            transition: color 0.2s, padding-left 0.2s;
        }

        .sidebar-categories li a:hover {
            color: #e8a200;
            padding-left: 6px;
        }

        /* Share buttons */
        .share-buttons {
            flex-wrap: wrap;
            gap: 0.5rem !important;
        }

        .btn-share {
            font-size: 0.8rem;
            padding: 0.4rem 0.85rem;
            border-radius: 4px;
            color: #fff !important;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            border: none;
            transition: opacity 0.2s;
        }

        .btn-share:hover {
            opacity: 0.85;
        }

        .btn-facebook {
            background: #1877f2;
        }

        .btn-twitter {
            background: #1da1f2;
        }

        .btn-whatsapp {
            background: #25d366;
        }

        /* ── Responsive ── */
        @media (max-width: 767px) {
            .berita-detail-title {
                font-size: 1.35rem;
            }

            .berita-thumbnail {
                max-height: 240px;
            }
        }
    </style>

@endsection