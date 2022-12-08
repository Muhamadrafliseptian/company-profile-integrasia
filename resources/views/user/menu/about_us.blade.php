@php
use Carbon\Carbon;
@endphp
@extends('user.app')

@section('title', 'About Us')

@section('content')
    <section id="" class=" section-bg">
       <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{ url('assets/img/1.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Integrasia Utama</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sint sunt numquam expedita at veniam maxime cupiditate ut nisi animi, nam inventore mollitia beatae omnis quo porro deleniti atque quaerat?</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="#counts" class="btn btn-primary btn-sm px-4 me-md-2">Get Started</a>
        </div>
      </div>
    </div>
  </div>
    </section>
    <section id="counts" class="counts mb-0">
        <div class="container">
            <div class="section-title mt-5">
                <h2>Who we are?</h2>
                <h3><span>We are problem solver</span></h3>
                <p>IDM can increase efficiency from the start, enabling customers to enjoy the full benefits of integrated
                    and enterprise solutions in a more affordable way.</p>
            </div>
            <div class="row">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start"
                    data-aos="fade-right" data-aos-delay="150">
                </div>
                <div class="col-xl-12 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row">
                             @php
                                use App\Models\Master\CountAbout;
                                $data_about = CountAbout::get();
                            @endphp
                            @forelse ($data_about as $data)
                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="{{ $data->icon }}"></i>
                                    <span>{{ $data->judul }}</span>
                                    <p>
                                       {{ $data->deskripsi }}
                                    </p>
                                </div>
                            </div>
                            @empty
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                            <div class="alert alert-danger text-center">
                                <i>
                                    <b>
                                        " Data Tidak Ada "
                                    </b>
                                </i>
                            </div>
                        </div>
                             @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                        </div>
                    </div>
                    <!-- End .content-->
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="features counts">
        <div class="container" data-aos="fade-up">
            <div class="section-title mt-0">
                <h2>One Spirit Eco System</h2>
                <h3><span>Spirit System</span></h3>
                <p>Integrationa Utama calls it the Integration Data Model (IDM). IDM is part of a platform that integrates
                    all software produced. IDM can increase efficiency from the start, enabling customers to enjoy the full
                    benefits of integrated and enterprise solutions in a more affordable way.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                    <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>IDM (Integrasia Data Model)</h4>
                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div>
                    <div class="icon-box mt-2" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Geospatial (One Spirit Map)</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                    <div class="icon-box mt-2" data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-images"></i>
                        <h4>Tracking</h4>
                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div>
                    <div class="icon-box mt-2" data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-images"></i>
                        <h4>IOT Platform</h4>
                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/img/eco.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- ======= About Section ======= -->
    <section id="aboutus" class="about section-bg mt-4">
        <div class="container" data-aos="fade-up">
            <div class="section-title mt-4">
                <h2>About</h2>
                <h3><span>Find Out More About Integrasia</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.a</p>
            </div>
            <div class="row"
                <div class="col-lg-12 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    @if (empty($visi_misi))
                        <div class="alert alert-danger">
                            Visi Misi Belum Tersedia
                        </div>
                    @else
                        {!! $visi_misi->visi !!}
                        {!! $visi_misi->misi !!}
                    @endif
                </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="portfolio mt-4">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>MILESTONE</h2>
                <h3><span>Check our milestone</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @forelse ($milestone as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ url('/storage/' . $item->milestone_gambar) }}" class="img-fluid"
                            style="height: 300px;">
                        <div class="portfolio-info">
                            <h4>{{ $item->id }}</h4>
                            <p>
                                {{ Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->isoFormat('D MMMM Y') }}
                            </p>
                            <a href="{{ url('/storage/' . $item->milestone_gambar) }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="{{ $item->id }}"><i
                                    class="bx bxs-show"></i></a>
                        </div>
                    </div>
                    @empty
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                            <div class="alert alert-danger text-center">
                                <i>
                                    <b>
                                        " Data Tidak Ada "
                                    </b>
                                </i>
                            </div>
                        </div>
                    @endforelse
            </div>
        </div>
    </section>
    <div class="section-title mt-2">
        <h2>Partners</h2>
        <h3><span>Check our partners</span></h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem laboriosam, repudiandae rerum velit quaerat maxime id. Temporibus dolorum pariatur placeat nesciunt laboriosam quaerat enim nam blanditiis veritatis, architecto incidunt ea?</p>
    </div>
    <section id="clients" class="clients section-bg">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                @forelse($data_partnert as $data)
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="{{ url('study_case') }}">
                            <img src="{{ url('/storage/' . $data->partner_logo) }}" class="img-fluid">
                        </a>
                    </div>
                @empty
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                            <div class="alert alert-danger text-center">
                                <i>
                                    <b>
                                        " Data Tidak Ada "
                                    </b>
                                </i>
                            </div>
                        </div>
                    @endforelse
            </div>
        </div>
    </section>
@endsection
