@extends('admin.layouts.template')

@section("title", "Profil Perusahaan")

@section('breadcrumb')
<section class="content-header">
    <h1>
        @yield("title")
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ url('/admin/dashboard') }}">
                <i class="fa fa-dashboard"></i> Dashboard
            </a>
        </li>
        <li class="active">
            @yield("title")
        </li>
    </ol>
</section>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box {{ empty($profil_perusahaan) ? 'box-primary' : 'box-warning' }}">
            <div class="box-header">
                <h3 class="box-title">
                    @if(empty($profil_perusahaan))
                    <i class="fa fa-plus"></i> Tambah Data
                    @else
                    <i class="fa fa-edit"></i> Edit Data
                    @endif
                </h3>
            </div>
            @if(empty($profil_perusahaan))
            <form method="POST" action="{{ url('/admin/profil_perusahaan') }}" enctype="multipart/form-data">
            @else
            <form method="POST" action="{{ url('/admin/profil_perusahaan/'.$profil_perusahaan->id) }}" enctype="multipart/form-data">
            @method("PUT")

            @php
                $str = trim($profil_perusahaan->logo, url("/"));
                $hasil = substr($str, 8);
            @endphp
            <input type="hidden" name="gambarLama" value="{{ $hasil }}">
            @endif
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="logo"> Logo </label>
                                <center>
                                    @if(empty($profil_perusahaan))
                                    <img src="{{ url('/gambar/gambar-upload.jpg') }}" class="img-fluid" style="width: 100%; margin-bottom: 10px;">
                                    @else
                                    <img src="{{ $profil_perusahaan->logo }}" class="img-fluid gambar-preview" id="tampilGambar" style="width: 100%; margin-bottom: 10px;">
                                    @endif
                                </center>
                                <input type="file" onchange="previewImage()" class="form-control" name="logo" id="logo">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama_perusahaan"> Nama Perusahaan </label>
                                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Masukkan Nama Perusahaan" value="{{ empty($profil_perusahaan->nama_perusahaan) ? '' : $profil_perusahaan->nama_perusahaan }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email"> Email </label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="{{ empty($profil_perusahaan->email) ? '' : $profil_perusahaan->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="no_hp"> No. Handphone </label>
                                        <input type="number" class="form-control" id="no_hp" name="no_hp" min="1" placeholder="0" value="{{ empty($profil_perusahaan->no_hp) ? '' : $profil_perusahaan->no_hp }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kode_pos"> Kode Pos </label>
                                        <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Masukkan Kode Pos" value="{{ empty($profil_perusahaan->kode_pos) ? '' : $profil_perusahaan->kode_pos }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="negara"> Negara </label>
                                        <input type="text" class="form-control" id="negara" name="negara" placeholder="Masukkan Negara" value="{{ empty($profil_perusahaan->negara) ? '' : $profil_perusahaan->negara }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="peta"> Peta </label>
                                <input type="text" class="form-control" id="peta" name="peta" placeholder="Masukkan Link Peta" value="{{ empty($profil_perusahaan->peta) ? '' : $profil_perusahaan->peta }}">
                            </div>
                            <div class="form-group">
                                <label for="alamat"> Alamat </label>
                                <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" rows="5">{{ empty($profil_perusahaan) ? '' : $profil_perusahaan->alamat  }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="reset" class="btn btn-social btn-danger btn-sm">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-social {{ empty($profil_perusahaan) ? 'btn-primary' : 'btn-success' }} btn-sm">
                        <i class="fa {{ empty($profil_perusahaan) ? 'fa-plus' : 'fa-save' }}"></i> {{ empty($profil_perusahaan) ? 'Tambah' : 'Simpan' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section("js")

<script type="text/javascript">
    function previewImage() {
        const image = document.querySelector("#logo");
        const imgPreview = document.querySelector(".gambar-preview");
        imgPreview.style.display = "block";
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
            $("#tampilGambar").addClass('mb-3');
            $("#tampilGambar").width("100%");
            $("#tampilGambar").height("300");
        }
    }
</script>

@endsection