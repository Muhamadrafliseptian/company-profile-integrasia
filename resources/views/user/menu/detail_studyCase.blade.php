@extends('user.app')
@section('content')
<section id="detailstudycase" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12" data-aos="fade-up">
          <div>
            <h1>Project Name: <span class="text-primary">{{ $detail->study_case_judul }}</span></h1>
            <p>{!! $detail->study_case_deskripsi !!}
            </p>
          </div>
        </div>
    </div>
    <div>
    </div>
    </div>
  </section>
@endsection
