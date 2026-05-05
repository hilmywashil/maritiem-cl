@extends('layouts.app')

@section('title', 'Berita')

@section('content')

    <div class="site-blocks-cover inner-page-cover overlay"
        style="background-image: url('{{ asset('asset-front/images/hero_bg_caaip.jpg') }}');" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Berita Seputar Komunitas</h1>
                    <p class="breadcrumb-custom"><a href="{{ route('home') }}">Home</a> <span class="mx-2">&gt;</span>
                        <span>Berita</span>
                    </p>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section">
        <div class="container">
            <div class="row">
                @forelse($beritas as $berita)
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Image" class="img-fluid">
                            <h2 class="font-size-regular"><a
                                    href="{{ route('berita-detail', $berita->slug) }}">{{ $berita->judul }}</a></h2>
                            <div class="meta mb-4">Admin <span
                                    class="mx-2">&bullet;</span>{{ \Carbon\Carbon::parse($berita->tanggal_publish)->format('d-M-Y') }}<span
                                    class="mx-2">&bullet;</span> <a href="{{ route('berita') }}">News</a></div>
                            <p>{{ \Illuminate\Support\Str::limit($berita->konten, 150) }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <img src="images/blog_1.jpg" alt="Image" class="img-fluid">
                            <h2 class="font-size-regular"><a href="#">Warehousing Your Packages</a></h2>
                            <div class="meta mb-4">Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                    class="mx-2">&bullet;</span> <a href="#">News</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente
                                veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <div class="container text-center pb-5">
        <div class="row">
            <div class="col-12">
                <p class="custom-pagination">
                    <span>1</span>
                    <a href="#">2</a>
                    <a href="#">3</a>
                </p>
            </div>
        </div>
    </div>
@endsection