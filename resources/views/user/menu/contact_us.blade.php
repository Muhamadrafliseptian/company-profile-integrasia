@php
use App\Models\ProfilPerusahaan;
$data_profil = ProfilPerusahaan::first();
@endphp
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h3><span>Contact Us</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>
                        @if (empty($data_profil->alamat))
                            -
                        @else
                            {{ $data_profil->alamat }}
                        @endif
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>
                        @if (empty($data_profil->email))
                            -
                        @else
                            {{ $data_profil->email }}
                        @endif
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>
                        @if (empty($data_profil->no_hp))
                            -
                        @else
                            {{ $data_profil->no_hp }}
                        @endif
                    </p>
                </div>
            </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-6 ">
                <iframe class="mb-4 mb-lg-0"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6">
                <form action="{{ url('/kirim_komentar') }}" method="POST" role="form" class="php-email-form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col form-group">
                            <input type="text" name="nama" class="form-control" id="nama"
                                placeholder="Masukkan Nama" required>
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Masukkan Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subjek" id="subjek"
                            placeholder="Masukkan Subjek" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="pesan" rows="5" placeholder="Masukkan Pesan" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
