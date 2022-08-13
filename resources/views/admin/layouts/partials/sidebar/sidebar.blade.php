@php
use App\Models\Akun\MenuRole;
@endphp

<style>
    .skin-blue .sidebar-menu>li.active>a {
        border-left-color: #008d4c;
    }

    .skin-blue .sidebar-menu>li>.treeview-menu {
        padding-left: 0;
        margin-right: 0;
    }

    .skin-blue .sidebar-menu>li>.treeview-menu>li.active>i {
        padding-left: 100px;
    }

    .skin-blue .sidebar-menu>li>.treeview-menu>li.active {
        background-color: #0071BB;
    }

    .skin-blue .sidebar-menu>li>.treeview-menu>li a {
        margin-left: 3px;
    }
</style>

<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU</li>
    <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <a href="{{ url('/admin/dashboard') }}">
            <i class="fa fa-files-o"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-bars"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{ url('/admin/tag') }}">
                    <i class="fa fa-tags"></i> Tag
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/kategori') }}">
                    <i class="fa fa-bars"></i> Kategori
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/parnert') }}">
                    <i class="fa fa-users"></i> Parnert
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/blog') }}">
                    <i class="fa fa-upload"></i> Blog
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/blog/lowongan_kerja') }}">
                    <i class="fa fa-upload"></i> Lowongan Kerja
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-bars"></i>
            <span>Solusi</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{ url('/admin/solusi/kategori_solusi/') }}">
                    <i class="fa fa-tags"></i> Kategori Solusi
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/solusi/solusi/') }}">
                    <i class="fa fa-tags"></i> Solusi
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/solusi/galeri_solusi') }}">
                    <i class="fa fa-image"></i> Galeri Solusi
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview {{ Request::segment(2) == 'pengaturan' ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-gears"></i>
            <span>Pengaturan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{ url('/admin/profil_perusahaan') }}">
                    <i class="fa fa-edit"></i> Profil Perusahaan
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/hubungi_kami') }}">
                    <i class="fa fa-envelope"></i> Pesan
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/pengaturan/visi_misi') }}">
                    <i class="fa fa-edit"></i> Visi & Misi
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/pengaturan/testimonials') }}">
                    <i class="fa fa-user"></i> Testimonials
                </a>
            </li>
            <li class="{{ Request::is('admin/pengaturan/carousel') ? 'active' : '' }}">
                <a href="{{ url('/admin/pengaturan/carousel') }}">
                    <i class="fa fa-image"></i> Carousel
                </a>
            </li>
            <li class="{{ Request::is('admin/pengaturan/benefit') ? 'active' : '' }}">
                <a href="{{ url('/admin/pengaturan/benefit') }}">
                    <i class="fa fa-tags"></i> Benefit
                </a>
            </li>
            <li class="{{ Request::is('admin/pengaturan/menu') ? 'active' : '' }}">
                <a href="{{ url('/admin/pengaturan/menu') }}">
                    <i class="fa fa-bars"></i> Menu
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Akun</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{ url('/admin/users') }}">
                    <i class="fa fa-circle-o"></i> Users
                </a>
                <a href="{{ url('/admin/akun/role/') }}">
                    <i class="fa fa-bars"></i> Role
                </a>
                <a href="{{ url('/admin/profil_saya') }}">
                    <i class="fa fa-users"></i> Profil Saya
                </a>
                <a href="{{ url('/admin/informasi_login') }}">
                    <i class="fa fa-book"></i> Informasi Login
                </a>
            </li>
        </ul>
    </li>
</ul>
