@extends('layouts.appAdmin')
@section('geosplatial-homan-resourch')
    <!-- ======= Hero Section ======= -->

    <!-- ======= Hero Section ======= -->
    <section id="geoshoman" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center text-light">
                Geospatial Platforming
            </h1>
            <h5 class="text-center text-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quaerat, molestiae aut enim placeat
                officiis debitis ab eum reiciendis, laboriosam, asperiores aperiam? Ipsam porro quidem exercitationem sequi,
                possimus est? Velit!
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
                    <h3> <span>Geospatial Platforming Interface</span></h3>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6 ">
                    {{-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0110981970392!2d106.78601371468598!3d-6.262267595467255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1a206b09c8b%3A0xc34e1845b9a02a81!2sIntegrasia%20Utama!5e0!3m2!1sid!2sid!4v1656501375004!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> --}}
                    <img class="mb-4 mb-lg-0" style="border:0; width: 100%; height: 384px;"
                        src="{{ url('assets/img/ui2.webp') }}" alt="">
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
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Benefits</h2>
                    <h3><span>What is benefits can you got?</span></h3>
                </div>
                <!-- ======= Featured Services Section ======= -->
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            </p>
                        </div>
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

                <!-- ======= Features Section ======= -->
                <section id="features" class="features">
                    <div class="container">

                        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                            <div class="col-md-5">
                                <img src="{{ asset('assets/img/features-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-7">
                                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </li>
                                    <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate
                                        velit.</li>
                                    <li><i class="bi bi-check"></i> Ullam est qui quos consequatur eos accusamus.</li>
                                </ul>
                            </div>
                        </div><!-- Features Item -->

                        {{-- <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                            <div class="col-md-5 order-1 order-md-2">
                                <img src="{{ asset('assets/img/features-2.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-7 order-2 order-md-1">
                                <h3>Corporis temporibus maiores provident</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                            </div>
                        </div><!-- Features Item --> --}}

                    </div>
                </section>
                <section id="featured-services" class="featured-services">
                    <div class="container" data-aos="fade-up">
                        <div class="section-title">
                            <h3><span>Galery Past Customer</span></h3>
                        </div>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card">
                                    <img src="assets/img/ui2.webp" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="assets/img/ui2.webp" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="assets/img/ui2.webp" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="assets/img/ui2.webp" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="assets/img/ui2.webp" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="assets/img/ui2.webp" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                </section>
                <section id="contact" class="contact">
                    <div class="container" data-aos="fade-up">
                        <div class="section-title">
                            <h2>Contact</h2>
                            <h3><span>Contact Us</span></h3>
                            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at
                                voluptas atque
                                vitae autem.</p>
                        </div>
                        <div class="col-lg-12">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                        <br>
                        <div class="row" data-aos="fade-up" data-aos-delay="100">
                            <div class="col-lg-6 ">
                                <iframe class="mb-4 mb-lg-0"
                                    src="{{ url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0110981970392!2d106.78601371468598!3d-6.262267595467255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1a206b09c8b%3A0xc34e1845b9a02a81!2sIntegrasia%20Utama!5e0!3m2!1sid!2sid!4v1656501375004!5m2!1sid!2sid') }}"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade" frameborder="0"
                                    style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-6">
                                <div class="info-box mb-4">
                                    <i class="bx bx-map"></i>
                                    <h3>Visit Our Head Office (Jakarta):</h3>
                                    <p>Radio Dalam Square 1A</p>
                                    <p>Jl. Radio Dalam, Kel.Gandaria Utara, Kebayoran Baru</p>
                                    <p>Jakarta Selatan 12140</p>
                                    <p>Indonesia</p>
                                </div>
                                <div class="d-inline-flex">
                                    <div class="info-box  mb-4 me-2" style="width: 18rem">
                                        <i class="bx bx-envelope"></i>
                                        <h3>Email Us</h3>
                                        <p>contact@example.com</p>
                                    </div>
                                    <div class="info-box  mb-4" style="width: 20rem">
                                        <i class="bx bx-phone-call"></i>
                                        <h3>Call Us</h3>
                                        <p>+1 5589 55488 55</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection
<!-- End #main -->
