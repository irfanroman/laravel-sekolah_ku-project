@extends('parent')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Daftarkan siswa anda ke Sekolahku</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Kami akan mendidik anak-anak sebaik mungkin untuk menciptakan genarasi yang sukses berkarir</h2>
          <div data-aos="fade-up" data-aos-delay="600">

          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ ('admin/assets/img/hero-img.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  @endsection