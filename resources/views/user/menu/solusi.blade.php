
@extends('user.app')
@section('content')
    <section id="geospatialplatform" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center text-light">
                {{ $detail->solusi_nama }}
            </h1>
            <h5 class="text-center text-light">
                {{ $detail->solusi_deskripsi }}
            </h5>
        </div>
    </section>
    <br>
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Video</h2>
            <h3><span>Integrasia Utama</span></h3>
        </div>
        <div class=" position-relative">
            <div class="wrapper text-center">
                <img id="img-index" src="assets/img/ui2.webp" alt="">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <img class="bi-video bi-play-circle-fill video-btn" src="{{ asset('assets/img/play.png') }}"
                        data-bs-toggle="modal" data-src="{{ url('https://www.youtube.com/embed/eU9rZpbfWwk') }}"
                        data-bs-target="#myModal" alt="">
                    {{-- <i class="bi bi-play-circle-fill video-btn" style="font-size: 100px; color: blue;"  data-bs-toggle="modal" data-src="{{ url('https://www.youtube.com/embed/eU9rZpbfWwk') }}" data-bs-target="#myModal" ></i> --}}
                    {{-- </button> --}}
                    {{-- <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid " alt="">
                                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> --}}
                </div>
                <a href="#" class="lightbox play-btn mb-4"></a>
            </div>
        </div>
    </div>
    </section>
    </div>
    </div>
    <div class="container" data-aos="fade-up">
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>User Interface</h2>
                    <h3><span>Geospatial Platforming Interface</span></h3>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6 ">
                    {{-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0110981970392!2d106.78601371468598!3d-6.262267595467255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1a206b09c8b%3A0xc34e1845b9a02a81!2sIntegrasia%20Utama!5e0!3m2!1sid!2sid!4v1656501375004!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> --}}
                    <img class="mb-4 mb-lg-0" style="border:0; width: 100%; height: 384px;"
                        src="{{ url('assets/img/1.jpg') }}" alt="">
                </div>
                <div class="col-lg-6">
                    <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore necessitatibus natus incidunt
                        nihil suscipit adipisci asperiores, minus quidem labore est ipsum reiciendis cupiditate doloremque
                        laudantium delectus, repudiandae dolore architecto soluta?</P>
                </div>
            </div>
    </div>
    </section>
    <main id="main">
        @include('user.menu.benefit')
        <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Galery Past Customer</h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @forelse ($galeri_solusi as $data)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ url('/storage/' . $data->galeri_gambar) }}" class="img-fluid"
                            style="height: 300px;">
                        <div class="portfolio-info">
                            <h4>{{ $data->id }}</h4>
                            <a href="{{ url('/storage/' . $data->galeri_gambar) }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="{{ $data->id }}"><i
                                    class="bx bxs-show"></i></a>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
    @endsection
