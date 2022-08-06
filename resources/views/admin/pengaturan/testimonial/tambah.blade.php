@extends('admin.layouts.template')

@section('title', 'Tambah Testimonial')

@section('breadcrumb')
    <section class="content-header">
        <h1>
            @yield('title')
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/admin/dashboard') }}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/pengaturan/testimonials/') }}">
                    <i class="fa fa-user"></i> Testimonial
                </a>
            </li>
            <li class="active">
                @yield('title')
            </li>
        </ol>
    </section>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-plus"></i> Tambah Data
                    </h3>
                </div>
                <form action="{{ url('/admin/pengaturan/testimonials/') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="testimonial_home_profile"> Foto </label>
                                    <center>
                                        <img src="{{ url('/gambar/gambar_user.png') }}" class="img-fluid"
                                            style="margin-bottom: 10px">
                                    </center>
                                    <input type="file" class="form-control" name="testimonial_home_profile"
                                        id="testimonial_home_profile" onchange="previewImage()">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="testimonial_home_name"> Nama </label>
                                            <input type="text" class="form-control" name="testimonial_home_name"
                                                id="testimonial_home_name" placeholder="Masukkan Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="testimonial_home_jobtitle">
                                                Pekerjaan
                                            </label>
                                            <input type="text" class="form-control" name="testimonial_home_jobtitle"
                                                id="testimonial_home_jobtitle" placeholder="Pekerjaan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="testimonial_home_caption"> Deskripsi </label>
                                    <textarea name="testimonial_home_caption" class="form-control" id="testimonial_home_caption" rows="5"
                                        placeholder="Deskripsi"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-danger btn-sm btn-social">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm btn-social">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script type="text/javascript">
        function previewImage() {

        }
    </script>

@endsection
