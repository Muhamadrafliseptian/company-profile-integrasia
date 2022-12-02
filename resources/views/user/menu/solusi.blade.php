
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
                    </div>
                        <a href="#" class="lightbox play-btn mb-4"></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<section>
        <div class="container col-xxl-10 px-4 py-5" data-aos="fade-up">
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
<section id="" class="">
        <div class="container col-xxl-10" data-aos="fade-up">
            <div class="row flex-lg-row-reverse align-items-center g-5 ">
                <div class="col-10 col-sm-8 col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Integrasia Utama</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sint sunt numquam expedita at veniam maxime cupiditate ut nisi animi, nam inventore mollitia beatae omnis quo porro deleniti atque quaerat?</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <a href="#counts" class="btn btn-primary btn-sm px-4 me-md-2">Get Started</a>
                    </div>
                </div>
            <div class="col-lg-6">
                <img src="{{ url('assets/img/1.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>

</section>
    <main id="main">
        <section id="faq" class="faq mb-0">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Why Better Than Competitor?</h2>
                    <h3><span>We Achieved People’s Trust By Our Great Service</span></h3>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                        vitae autem.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <ul class="faq-list">
                            <li class="card">
                                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a
                                    erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                                        non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                                        purus non.
                                    </p>
                                </div>
                            </li>
                            <li class="card">
                                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">After Sales Wise
                                    <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                                </div>
                                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.
                                    </p>
                                </div>
                            </li>

                            <li class="card">
                                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet
                                    consectetur adipiscing elit pellentesque habitant morbi? <i
                                        class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                                </div>
                                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                        pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                        Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                        tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </p>
                                </div>
                            </li>

                            <li class="card">
                                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor
                                    orci dapibus. Aliquam eleifend mi in nulla? <i
                                        class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                                </div>
                                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.
                                    </p>
                                </div>
                            </li>
                            <li class="card">
                                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam
                                    pellentesque nec nam aliquam sem et tortor consequat? <i
                                        class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                                </div>
                                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                        est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                    </p>
                                </div>
                            </li>
                            <li class="card">
                                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae
                                    purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                        class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                                </div>
                                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                        integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                        eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                        Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus.
                                        Nibh tellus molestie nunc non blandit massa enim nec.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
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
