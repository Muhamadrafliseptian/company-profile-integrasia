@extends('admin.layouts.template')

@section('title', 'Galeri Study Case')

@section('css')

    <link rel="stylesheet" href="{{ url('/template') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

@endsection

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
            <li class="active">
                @yield('title')
            </li>
        </ol>
    </section>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-plus"></i> Tambah @yield('title')
                    </h3>
                </div>
                <form action="{{ url('/admin/master/study_case/gallery_study_case') }}" method="POST" id="galeriSolusi" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="id_gallery_study_case"> Solusi </label>
                            <select name="id_gallery_study_case" class="form-control" id="id_gallery_study_case">
                                <option value="">- Pilih -</option>
                                @foreach ($data_study_case as $data)
                                    <option value="{{ $data->id }}">
                                        {{ $data->study_case_judul }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gambar_gallery_study_case"> Gambar </label>
                            <br>
                            <img src="{{ url('/gambar/upload.jpg') }}" class="img-fluid" style="width: 100%;">
                            <input type="file" class="form-control" name="gambar_gallery_study_case" value="{{ old('gambar_gallery_study_case') }}"d="gambar_gallery_study_case">
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
        <div class="col-md-8">
            <div class="box">

                <div class="row">
                    @foreach ($data_gallery_study_case as $gallery)
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">
                                        <i class="fa fa-image"></i> Galeri Gambar
                                        <b>{{ $gallery->getStudyCase->study_case_judul }}</b>
                                    </h3>
                                </div>
                                <form action="">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="id_gallery_study_case"> Solusi </label>
                                            <select name="id_gallery_study_case" class="form-control" id="id_gallery_study_case">
                                                <option value="">- Pilih -</option>
                                                @foreach ($data_study_case as $data)
                                                    <option value="{{ $data->id }}"
                                                        {{ $data->id == $gallery->id_gallery_study_case ? 'selected' : '' }}>
                                                        {{ $data->study_case_judul }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar_gallery_study_case"> Gambar </label>
                                            @if (empty($gallery->gambar_gallery_study_case))
                                            @else
                                                <img src="{{ url('/storage/' . $gallery->gambar_gallery_study_case) }}"
                                                    class="img-fluid" style="width: 100%; margin-bottom: 10px;">
                                            @endif
                                            <input type="file" class="form-control" name="gambar_gallery_study_case"
                                                id="gambar_gallery_study_case">
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="reset" class="btn btn-danger btn-sm btn-social">
                                            <i class="fa fa-times"></i> Batal
                                        </button>
                                        <button type="reset" class="btn btn-success btn-sm btn-social">
                                            <i class="fa fa-save"></i> Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
