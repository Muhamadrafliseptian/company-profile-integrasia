@extends('admin.layouts.template')

@section('title', 'About Us')

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
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-plus"></i> Tambah Data
                    </h3>
                </div>
                <form action="{{ url('/admin/master/eco_spirit') }}" method="POST" id="tambahEcoSpirit">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="about_icon"> Icon </label>
                            <input type="text" class="form-control" name="eco_spirit_icon" id="eco_spirit_icon"
                                placeholder="Masukkan Nama" value="">
                        </div>
                        <div class="form-group">
                            <label for="about_judul"> Judul </label>
                            <input type="text" class="form-control" name="eco_spirit_judul" id="eco_spirit_judul"
                                placeholder="Masukkan Nama" value="">
                        </div>
                        <div class="form-group">
                            <label for="about_deskripsi"> Judul </label>
                            <input type="text" class="form-control" name="eco_spirit_deskripsi" id="eco_spirit_deskripsi"
                                placeholder="Masukkan Nama" value="">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi"> Judul </label>
                            <textarea id="judul" name="judul" rows="10" cols="80">
                            'Masukkan Judul'
                        </textarea>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi"> Deskripsi </label>
                            <textarea id="deskripsi" name="deskripsi" rows="10" cols="80">
                            'Masukkan Deskripsi'
                        </textarea>
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

    <!-- Edit Data -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">
                        <i class="fa fa-edit"></i> Edit Data
                    </h4>
                </div>
                <form action="{{ url('/admin/master/eco_spirit/simpan') }}" method="POST" id="editEcoSpirit">
                    @method('PUT')
                    {{ csrf_field() }}
                    <div class="modal-body" id="modal-content-edit">

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger btn-sm btn-social pull-left">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-success btn-sm btn-social">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END -->

@endsection

@section('js')
    <script src="{{ url('/template') }}/bower_components/ckeditor/ckeditor.js"></script>
    <script>
        $(function() {
            CKEDITOR.replace('deskripsi')
            CKEDITOR.replace('judul')
        })
    </script>
    <script src="{{ url('/template') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/template') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        function editCountAbout(id) {
            $.ajax({
                url: "{{ url('/admin/master/eco_spirit/edit') }}",
                type: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    $("#modal-content-edit").html(data);
                    return true;
                }
            })
        }

        $(function() {
            $('#example1').DataTable()
        });

        ! function(a, i, r) {
            var e = {};
            e.UTIL = {
                setupFormValidation: function() {
                    a("#tambahKategori").validate({
                            ignore: "",
                            rules: {
                                nama_kategori: {
                                    required: !0
                                }
                            },
                            messages: {
                                nama_kategori: {
                                    required: "Nama Kategori harap di isi!"
                                }
                            },
                            submitHandler: function(a) {
                                a.submit()
                            }
                        }),
                        a("#editKategori").validate({
                            ignore: "",
                            rules: {
                                nama_kategori: {
                                    required: !0
                                }
                            },
                            messages: {
                                nama_kategori: {
                                    required: "Nama Kategori harap di isi!"
                                }
                            },
                            submitHandler: function(a) {
                                a.submit()
                            }
                        })
                }
            }, a(r).ready(function(a) {
                e.UTIL.setupFormValidation()
            })
        }(jQuery, window, document);
    </script>
@endsection
