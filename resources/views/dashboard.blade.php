@extends('layouts.checkout')
@section('title', 'Make Appointment')

@section('content')
<main>
      <section class="section-details-header"></section>
      <section class="section-details-content">
        <div class="container">
          <div class="row">
            <div class="col p-0 pl-3 pl-lg-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item" aria-current="page">
                    Home
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Make an Appointment
                  </li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-8 pl-lg-0">
              <div class="card card-details mb-3 card-details-first">
                <h1>Pilih Jadwal Anda</h1>
                <p>
                  Jadwalkan sekarang untuk kesehatan Anda!
                </p>
                <div>

                <div class="container">
                    <div class="row justify-content-center">
                            <div class="bg-white shadow-md rounded-lg p-5">
                                <livewire:date-time-availability></livewire:date-time-availability>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="mt-2 mb-0 breadcrumb-item active">Note</h3>
                    <p class="disclaimer mb-0">
                        Satu jadwal hanya untuk satu orang
                    </p>
              </div>
            </div>


            <div class="col-lg-4">
              <div class="card card-details card-right">
                <h2 class="member mt-3 breadcrumb-item active"> Appointment Details</h2>

                <p class="disclaimer mb-0">
                  Pilih waktu perawatan dengan ManusiaHijauu, 
                  ahli kiropraktik berpengalaman. Sesuaikan konsultasi 
                  dan penanganan kiropraktik dengan kebutuhan Anda. 
                  Hubungi kami di 0857-6875-4325 untuk informasi lebih lanjut    
                </p>
    
              <hr />
              <h2 class="breadcrumb-item active">Jadwal</h2>
              <div>
                <table >
                <tr>
                  <th>Senin</th>
                  <td>
                      Tutup
                  </td>
                </tr>
                <tr>
                  <th width="50%">Selasa</th>
                  <td width="50%" class="text-right">
                      11.00 - 17.00 WIB
                  </td>
                </tr>
                <tr>
                  <th width="50%">Rabu</th>
                  <td width="50%" class="text-right">
                    11.00 - 17.00 WIB
                  </td>
                </tr>
                <tr>
                  <th width="50%">Kamis</th>
                  <td width="50%" class="text-right">
                    11.00 - 17.00 WIB
                  </td>
                </tr>
                <tr>
                  <th>Jumat</th>
                  <td>
                    Tutup
                  </td>
                </tr>
                <tr>
                  <th width="50%">Sabtu</th>
                  <td width="50%" class="text-right">
                    11.00 - 17.00 WIB
                  </td>
                </tr>
                <tr>
                  <th width="50%">Minggu</th>
                  <td width="50%" class="text-right">
                    11.00 - 17.00 WIB
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    
@endpush
