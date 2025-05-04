@extends('layouts.checkout')
@section('title', 'Blog')

@section('content')
<main>
  <section class="section-details-header"></section>
  <section class="section-popular-content" id="popularContent">
    <div class="container">
    <div class="section-blog row justify-content-center">
        <h2>Blog</h2>
    </div>
    <div class="section-blog row justify-content-center">
        <p>Info untukmu seputar perawatan tubuh kesayanganmu dan informasi lainnya</p>
    </div>
      <div class="section-popular-travel row justify-content-center">
        @foreach($items as $item)
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');"
              >
                <div class="travel-location">{{ $item->title }}</div>
                <div class="travel-button mt-auto">
                  <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                    View Details
                  </a>
                </div>
              </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}" />
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomWidth: 500,
          title: false,
          tint: '#333',
          Xoffset: 15
        });
      });
    </script>
@endpush
