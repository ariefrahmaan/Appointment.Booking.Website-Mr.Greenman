@extends('layouts.success')
@section('title', ' Appointment Success')

@section('content')

<main>
  <div class="section-success d-flex align-items-center">
    <div class="col text-center">
      <img src="{{ url('frontend/images/ic_mail.png') }}" alt="" />
      <h1>Yay! Success</h1>
      <div class="w-100 max-w-5x4 mt-6 mb-6 px-6 py-3 bg-white shadow-sm ">
                    <p class="text-success">Appointment confirmed at {{ $appointment->start_time }}</p>
                </div>
      <p>
        We’ve sent you email 
        <br />
        please read it as well
      </p>
      <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
        Home Page
      </a>
    </div>
  </div>
</main>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script>
        // JavaScript scripts
    </script>
@endpush