@php use Carbon\Carbon; @endphp

<div class="container">
    <div class="">
        @if(!$appointment)
            <form wire:submit="save" class="space-y-4">
                <div class=" mb-3 center">
                    <input
                        type="text"
                        id="date" 
                        wire:model="date"
                        class="form-control"
                        autocomplete="off"
                    />
                </div>

                <div class="row">
                    @foreach($availableTimes as $key => $time)
                        <div class="col-6 mb-3 center">
                            <input
                                type="radio"
                                id="interval-{{ $key }}"
                                name="time"
                                value="{{ $date . ' ' . $key }}"
                                @disabled(!$time)
                                wire:model="startTime"
                                class="form-check-input"
                            >
                            <label
                                @class(['form-check-label w-100 text-center py-2', 'bg-success text-white' => $time, 'bg-secondary text-white cursor-not-allowed' => ! $time])
                                wire:key="interval-{{ $key }}"
                                for="interval-{{ $key }}"
                            >
                                {{ $key }}
                            </label>
                        </div>
                    @endforeach
                </div>
                <button class="btn-primary">
                Reserve
            </button>
            </form>
        @else
            

            <div class="@if(!$appointment) d-none @endif"
                 x-data="timer('{{ Carbon::parse($appointment->reserved_at)->addMinutes(config('app.appointmentReservationTime'))->unix() }}')"
            >
                <h2 class="h3">Confirmation for Appointment at: {{ $appointment?->start_time }}</h2>

                <div class="mt-4">
                    <button wire:click="confirmAppointment"
                            class="btn btn-success">
                        Confirm
                    </button>
                    <button wire:click="cancelAppointment"
                            class="btn btn-danger">
                        Cancel
                    </button>
                </div>
            </div>
        @endif
    </div>
</div>

@push('prepend-style')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css">
  
@endpush

@push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script>
flatpickr("#date", {
    dateFormat: "y-m-d",
    minDate: "today",
    onClose: function(selectedDates, dateStr) {
        @this.set('date', dateStr);
    },
    disable: [
        function(date) {
            //Matikan hari Senin (nilai 1 menggambarkan Senin, 0 adalah Minggu)
            return (date.getDay() === 1 || date.getDay() === 5);
        }
    ]
});


    </script>
@endpush
