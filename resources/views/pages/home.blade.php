@extends('layouts.app')

@section('title')
ManusiaHijauu
@endsection

@section('content')
<!-- Header -->
<header class="text-center">
  <h1>
    Kami peduli dengan tulang punggung Anda
    <br />
    Dengan satu klik
  </h1>
  <p class="mt-3">
    Kamu akan merasakan perawatan
    <br />
    tulang punggung terbaik dari kami
  </p>
  <a href="/dashboard" class="btn btn-book-now px-4 mt-4">
    Book Now
  </a>
</header>

<main>
  <div class="container">
    <section class="section-stats row justify-content-center" id="stats">
  <div class="col-3 col-md-2 stats-detail">
    <h2>3th</h2>
    <p>Pengalaman</p>
  </div>
  <div class="col-3 col-md-2 stats-detail">
    <h2>500+</h2>
    <p>Pasien</p>
  </div>
  <div class="col-3 col-md-2 stats-detail">
    <h2>100%</h2>
    <p>Optimal </p>
  </div>
</section>
  </div>



  <section class="section-popular" id="popular">
    <div class="container">
      <div class="row">
        <div class="col text-center section-popular-heading">
          <h2>Tentang ManusiaHijauu</h2>
           <p>
          ManusiaHijauu adalah seorang terapis kiropraktik yang penuh 
          dedikasi untuk membantu Anda meraih kesehatan optimal melalui 
          perawatan tulang punggung yang holistik. Dengan pengalaman selama 
          lebih dari 3 tahun, ManusiaHijauu telah membangun keahlian 
          dalam memberikan perawatan terbaik bagi individu. Dalam perjalanannya, 
          ManusiaHijauu telah merawat lebih dari 500 pasien yang puas dengan 
          pendekatan yang terfokus pada kebutuhan unik setiap orang. 
          Bersama ManusiaHijauu, Anda dapat percaya bahwa perawatan tulang 
          punggung Anda akan menjadi prioritas utama. Temui ManusiaHijauu dan 
          jadikan setiap langkah Anda menuju kesehatan yang lebih baik.
        </p>
        </div>
      </div>
    </div>
  </section>

    <section class="section-testimonial-heading" id="">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>Lokasi</h2>
        </div>
      </div>
    </div>
  </section>

    <section
    class="section section-testimonial-content"
    id="location"
  >
    <div class="container">
      <div class="section-popular-travel row justify-content-center">
        <div class="col-lg-7">
          <div class="card card-testimonial text-center">
            <div class="testiominal-content">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.3538094882462!2d106.70196102840053!3d-6.34023009960143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e574f4cfd579%3A0xf8b10d4a83fd4e25!2sGg.%20Nangka%20No.19a%2C%20Buaran%2C%20Kec.%20Serpong%2C%20Kota%20Tangerang%20Selatan%2C%20Banten%2015310!5e0!3m2!1sid!2sid!4v1695274750970!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      
      </div>
      
    </div>
  </section>

</main>
@endsection
