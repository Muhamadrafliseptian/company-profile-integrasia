@extends('user.app')
@section('content')
<section id="detailstudycase" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
                <div>
                    <h1>Project Name: <span class="text-primary">{{ $detail->study_case_judul }}</span></h1>
                    <p>{!! $detail->study_case_deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
        <div>
        </div>
    </div>
</section>
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Galery Past Customer</h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @forelse ($gallery_study_case as $data)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="{{ url('/storage/' . $data->gambar_gallery_study_case) }}" class="img-fluid"
                    style="height: 300px;">
                    <div class="portfolio-info">
                        <h4>{{ $data->id }}</h4>
                        <a href="{{ url('study_case') }}" class=""><i class="fas fa-arrow-right"></i></a>
                        <a href="{{ url('/storage/' . $data->gambar_gallery_study_case) }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="{{ $data->id }}"><i
                            class="bx bxs-show"></i></a>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
    @endsection
