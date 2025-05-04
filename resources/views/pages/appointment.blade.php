@extends('layouts.app')


@section('title')
    Make Appointment
@stop


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
                <h1 class="breadcrumb-item active">
                  Halo, USER!!
                </h1>
                <p>
                  Pilih tanggal dan waktu yang Anda inginkan
                </p>
                <div>
                  
                  <div class="content">
                    <div class="calendar-container">
                      <div class="calendar">
                        <ul class="weeks"></ul>
                        <ul class="days"></ul>
                      </div>
                    </div>

                    <div class="time-options">
                      <div class="row text-center mx-0">
                        <a href="#" class="time-cell" width="50%" data-time="11:00">11:00 </a>
                      </div>
                      <div class="row text-center mx-0">
                        <a href="#" class="time-cell" width="50%"  data-time="15:00">15:00 </a>
                      </div>
                      <div class="row text-center mx-0">
                        <a href="#" class="time-cell" width="50%"  data-time="13:00">13:00 </a>
                      </div>
                      <div class="row text-center mx-0">
                        <a href="#" class="time-cell"  width="50%"  data-time="17:00">17:00 </a>
                      </div>  
                    </div>
                  </div>
                </div>

                <div class="member mt-3">
                  <h2>ManusiaHijauu Treatment Appointment Details</h2>
                  <p class="disclaimer mb-0">
                    HARAP BACA: Rp.100.000 HANYA DEPOSIT (TIDAK DAPAT DIKEMBALIKAN) // 
                    Terdapat 2 OPSI HARGA: VIDEO: Rp.250.000/ NON-VIDEO: Rp.350.000// 
                    Pembatalan: Karena permintaan janji temu yang tinggi,
                    jika Anda perlu menjadwal ulang deposit tambahan sebesar 100 diperlukan. 
                    (Setiap keadaan darurat medis akan memerlukan catatan dokter.) Silakan hubungi 
                    0857-6875-4325 untuk pertanyaan atau bantuan. Kami berharap dapat membantu Anda!
                  </p>
                  <h3 class="mt-2 mb-0">Note</h3>
                  <p class="disclaimer mb-0">
                    Satu jadwal hanya untuk satu orang
                  </p>
                </div>
              </div>
            </div>




            <div class="col-lg-4">
              <div class="card card-details card-right">
                <h2 class="member mt-3 breadcrumb-item active">
                  <div class="selected-time">
                    Waktu yang Dipilih:
                  </div>
                </h2>
                <p id="selected-date"></p>
                <p id="selected-time"></p>
                <hr \>
                
                <table class="trip-informations">
                  <h2 class="breadcrumb-item active">
                    Pembayaran Uang Deposit
                  </h2>
                  <tr>
                    <p class="payment-instructions">
                      Pembayaran di muka sebesar Rp.100.000 diperlukan untuk membuat janji temu Anda.
                    </p>
                  </tr>
                  <tr>
                    
                  </tr>
                  <tr>
                    <th width="50%">Sub Total</th>
                    <td width="50%" class="text-right">Rp. 100.000</td>
                  </tr>
                  <tr>
                    <th width="50%">Tax</th>
                    <td width="50%" class="text-right">0</td>
                  </tr>
                  <tr>
                    <th width="50%">Total</th>
                    <td width="50%" class="text-right text-total">
                      <span class="text-blue">Rp. 100.ooo</span
                      </td>
                  </tr>
                </table>

                <hr />
                <h2>Pembayaran</h2>
                <p class="payment-instructions">
                  Silahkan selesaikan pembayaran Anda dengan metode yang tersedia
                </p>
                <div class="bank">
                  <div class="bank-item pb-3">
                    <img
                      src="frontend/images/ic_bank.png"
                      alt=""
                      class="bank-image"
                    />
                    <div class="description">
                      <h3>PT Nomads ID</h3>
                      <p>
                        0881 8829 8800
                        <br />
                        Bank Central Asia
                      </p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="bank-item">
                    <img
                      src="frontend/images/ic_bank.png"
                      alt=""
                      class="bank-image"
                    />
                    <div class="description">
                      <h3>PT Nomads ID</h3>
                      <p>
                        0899 8501 7888
                        <br />
                        Bank HSBC
                      </p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="join-container">
                <a
                  href="success.html"
                  class="btn btn-block btn-join-now mt-3 py-2"
                  >Bayar</a
                >
              </div>
              <div class="text-center mt-3">
                <a href="#" class="text-muted">Batalkan</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    

@stop


@push('prepend-style')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css">
  
@endpush


@push('addon-script')
  <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
  <script>
      $(document).ready(function() {
  flatpickr(".calendar", {
    inline: true,
    dateFormat: "d-m-Y",
    minDate: "today",
    onChange: function(selectedDates, dateStr, instance) {
      date = selectedDates[0];
      currYear = date.getFullYear();
      currMonth = date.getMonth();
      renderCalendar();
    }
  });

  const timeCells = document.querySelectorAll(".time-cell");
  const selectedDateElement = document.getElementById("selected-date");
  const selectedTimeElement = document.getElementById("selected-time");

  timeCells.forEach(cell => {
    cell.addEventListener("click", function() {
      timeCells.forEach(c => c.classList.remove("active"));
      this.classList.add("active");
      
      const selectedDateStr = formatDate(date);
      const selectedTime = this.getAttribute("data-time");
      
      selectedDateElement.textContent = `Tanggal: ${selectedDateStr}`;
      selectedTimeElement.textContent = `Jam: ${selectedTime}`;
    });
  });

  // Function to format date as dd-mm-yyyy
  function formatDate(date) {
    const day = String(date.getDate()).padStart(2, '0');
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const year = date.getFullYear();
    return `${day}-${month}-${year}`;
  }
    });

    // Handle time cell selection
    const timeCells = document.querySelectorAll(".time-cell");
    timeCells.forEach(cell => {
      cell.addEventListener("click", function() {
        timeCells.forEach(c => c.classList.remove("active"));
        this.classList.add("active");
      });
    });
  
    </script>
@endpush


