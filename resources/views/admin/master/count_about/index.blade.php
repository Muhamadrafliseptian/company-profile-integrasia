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
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-plus"></i> Tambah Data
                    </h3>
                </div>
                @if (empty($data_about))
                    <form method="POST" action="{{ url('/admin/master/count_about') }}" enctype="multipart/form-data" id="tambahCountAbout">
                @else
                    <form method="POST" action="{{ url('/admin/master/count_about/' . encrypt($data_about->id)) }}" enctype="multipart/form-data" id="editCountAbout">
                @method('PUT')
                @endif
                {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="about_deskripsi"> Deskripsi </label>
                            <textarea id="about_deskripsi" name="about_deskripsi" rows="10" cols="80">
                                {{ empty($data_about->deskripsi) ? 'Masukkan Deskripsi Perusahaan' : $data_about->deskripsi }}
                        </textarea>
                    </div>
                    <div class="box-footer">
                        <button type="submit"
                         class="btn btn-social {{ empty($data_about) ? 'btn-primary' : 'btn-success' }} btn-sm">
                         <i class="fa {{ empty($data_about) ? 'fa-plus' : 'fa-save' }}"></i>
                        {{ empty($data_about) ? 'Tambah' : 'Simpan' }}
                    </button>
                    </div>
                </form>
            </div>
        </div>
        {{-- <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-book"></i> Data @yield('title')
                    </h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Icon</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 0;
                            @endphp
                            @foreach ($data_about as $data)
                                <tr>
                                    <td class="text-center">{{ ++$no }}.</td>
                                    <td>{{ $data->icon }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <td>{{ $data->deskripsi }}</td>
                                    <td class="text-center">
                                        <button onclick="editCountAbout({{ $data->id }})" type="button"
                                            class="btn btn-warning btn-sm btn-social" data-toggle="modal"
                                            data-target="#modal-default">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                        <form action="{{ url('/admin/master/count_about' . encrypt($data->id)) }}"
                                            method="POST" style="display: inline;">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm btn-delete btn-social">
                                                <i class="fa fa-trash-o"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
    </div>

@endsection

@section('js')
    <script src="{{ url('/template') }}/bower_components/ckeditor/ckeditor.js"></script>
    <script>
        $(function() {
            CKEDITOR.replace('about_deskripsi')
        })
    </script>
    <script src="{{ url('/template') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/template') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        function editCountAbout(id) {
            $.ajax({
                url: "{{ url('/admin/master/count_about/edit') }}",
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
                    a("#editCountAbout").validate({
                            ignore: "",
                            rules: {
                                about_deskripsi: {
                                    required: !0
                                }
                            },
                            messages: {
                                about_deskripsi: {
                                    required: "Nama Kategori harap di isi!"
                                }
                            },
                            submitHandler: function(a) {
                                a.submit()
                            }
                        }),
                        a("#tambahCountAbout").validate({
                            ignore: "",
                            rules: {
                                about_deskripsi: {
                                    required: !0
                                }
                            },
                            messages: {
                                about_deskripsi: {
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
