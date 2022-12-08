@extends('user.app')

@section('title', $detail->why_us_name)

@section('content')
    <section id="geospatialplatform" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center text-light">
                {{ $detail->why_us_name }}
            </h1>
            <h5 class="text-center text-light">
                {!! $detail->why_us_deskripsi !!}
            </h5>
        </div>
    </section>
    <section>
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1">{{ $detail->why_us_name }}</h1>
                <p class="lead">{!! $detail->why_us_deskripsi !!}</p>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
        <img class="rounded-lg-3" src="{{ url('/storage/' . $detail->why_us_image) }}" alt="" width="720">
    </div>
    </div>
    </div>
    </section>
@endsection
