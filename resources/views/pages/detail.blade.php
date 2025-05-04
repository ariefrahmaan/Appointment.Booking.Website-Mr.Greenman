@extends('layouts.app')
@section('title', 'Detail Blog')

@section('content')
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col p-0">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 pl-lg-0">
          <div class="card card-details">
            <h1>{{ $item->title }}</h1>
            @if($item->galleries->count() > 0)
                  <div class="gallery">
                      <div class="xzoom-container">
                          <img
                              src="{{ Storage::url($item->galleries->first()->image) }}"
                              class="xzoom"
                              id="xzoom-default"
                              xoriginal="{{ Storage::url($item->galleries->first()->image) }}"
                          />
                      </div>
                      <div class="xzoom-thumbs">
                          @foreach($item->galleries as $gallery)
                              <a href="{{ Storage::url($gallery->image) }}">
                                  <img
                                      src="{{ Storage::url($gallery->image) }}"
                                      class="xzoom-gallery"
                                      width="128"
                                      xpreview="{{ Storage::url($gallery->image) }}"
                                  />
                              </a>
                          @endforeach
                      </div>
                  </div>
            @endif
            {!! $item->about !!}
          </div>
        </div>
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
