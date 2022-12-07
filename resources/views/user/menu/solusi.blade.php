
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
            <div class="text-center">
                <a href="https://wa.me/628117502838?text=Hello%20I'm%20interested%20in%20OSLOG" class="btn btn-sm btn-success">Chat With Our Team</a>
            </div>
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
            <img src="{{ url('/storage/' . $detail->solusi_gambar) }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                    </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Integrasia Utama</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sint sunt numquam expedita at veniam maxime cupiditate ut nisi animi, nam inventore mollitia beatae omnis quo porro deleniti atque quaerat?</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="#descone" class="btn btn-primary btn-sm px-4 me-md-2">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="descone" class="">
        <div class="container col-xxl-10" data-aos="fade-up">
            <div class="row flex-lg-row-reverse align-items-center g-5 ">
                <div class="col-10 col-sm-8 col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Integrasia Utama</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sint sunt numquam expedita at veniam maxime cupiditate ut nisi animi, nam inventore mollitia beatae omnis quo porro deleniti atque quaerat?</p>
                </div>
            <div class="col-lg-6">
                <img src="{{ url('assets/img/1.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>
</section>
<div class="text-center py-5">
    <a href="https://wa.me/628117502838?text=Hello%20I'm%20interested%20in%20OSLOG" class="btn btn-sm btn-dark">Jump Onto Geospatial Platforming</a>
</div>
    <main id="main">
        <section id="fitur" class="fitur mt-4">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>fitur</h2>
                    <h3><span>Fitur Geo</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero neque commodi totam a et eius vel sint, pariatur deleniti at consequuntur ex odit est deserunt omnis. Debitis amet excepturi praesentium.</p>
                </div>
            <div class="row">
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon"><i class="bi bi-chat-left-dots"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bi bi-bounding-box"></i></div>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bi bi-globe"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="bi bi-broadcast"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <div class="icon"><i class="bi bi-calendar2-week"></i></div>
                    <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>
            </div>
        </div>
    </section>
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
                            <div class="inline-flex">
                                <a href="{{ url('study_case') }}" class="portfolio-lightbox preview-link"><i class="fas fa-user"></i></a>
                                <a href="{{ url('/storage/' . $data->galeri_gambar) }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="{{ $data->id }}"><i
                                        class="bx bxs-show"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
    @endsection
