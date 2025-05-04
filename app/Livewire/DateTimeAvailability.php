<?php

namespace App\Livewire;

use Mail;
use App\Appointment;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Midtrans\Config;
use Midtrans\Snap;
use App\Mail\TransactionSuccess;
use Illuminate\Http\Request;

class DateTimeAvailability extends Component
{
    public string $date;

    public array $availableTimes = [];

    public Collection $appointments;

    public string $startTime = '';

    public ?int $appointmentID = null;

    public function mount()
    {
        $this->date = now()->format('Y-m-d');

        $this->getIntervalsAndAvailableTimes();
    }

    public function updatedDate()
    {
        $this->getIntervalsAndAvailableTimes();
    }

    public function render()
    {
        $appointment = $this->appointmentID ? Appointment::find($this->appointmentID) : null;

        return view('livewire.date-time-availability', [
            'appointment' => $appointment
        ]);
    }

    public function save()
    {
        $this->validate([
            'startTime' => 'required',
            //'username' => 'required|string|exists:users,username',
        ]);

        $this->appointmentID = Appointment::create([
            'start_time' => Carbon::parse($this->startTime),
            'reserved_at' => now(),
            'nohp' => Auth::user()->nohp,
            'username' => Auth::user()->username,
            'email' => Auth::user()->email,
            'transaction_status' => 'SUCCESS'
        ])->id;
    }

    public function confirmAppointment()
    {

        $appointment = Appointment::find($this->appointmentID);
        if (!$appointment || Carbon::parse($appointment->reserved_at)->diffInMinutes(now()) > config('app.appointmentReservationTime')) {
            $this->redirectRoute('dashboard');
            return;
        }
        $appointment->confirmed = true;
        $appointment->save();

        Mail::to($appointment->email)->send(
            new TransactionSuccess($appointment)
        );

        $this->redirectRoute('appointment-confirmed', $this->appointmentID);
        


        /*
        $appointment = Appointment::find($this->appointmentID);
    if (!$appointment || Carbon::parse($appointment->reserved_at)->diffInMinutes(now()) > config('app.appointmentReservationTime')) {
        $this->redirectRoute('dashboard');
        return;
    }
    $appointment->confirmed = true;
    $appointment->save();
        // Set konfigurasi midtrans
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        // Buat array untuk dikirim ke midtrans
        $midtrans_params = array(
            'transaction_details' => array(
                'order_id' => 'MIDTRANS-' . $appointment->id,
                'gross_amount' => (int) $appointment->transaction_total,
            ),
            'customer_details' => array(
                'first_name'    => $appointment->username,
                'email'         => $appointment->email
            ),
            'enabled_payments' => array('gopay','bank_transfer',"Indomaret",
                                        "alfamart",),
            'vtweb' => array()
        );

        try {
            // Ambil halaman payment midtrans
            $paymentUrl = Snap::createTransaction($midtrans_params)->redirect_url;

            // Redirect ke halaman midtrans
            header('Location: ' . $paymentUrl);
            exit();
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
        */
    }

    public function cancelAppointment()
    {
        $appointment = Appointment::find($this->appointmentID);
            if ($appointment !== null) {
            $appointment->delete();
        }

        $this->redirectRoute('dashboardd');
    }

    protected function getIntervalsAndAvailableTimes()
    {
        $this->reset('availableTimes');

        $carbonIntervals = Carbon::parse($this->date . ' 11 am')->toPeriod($this->date . ' 5 pm', 120, 'minute');

        $this->appointments = Appointment::whereDate('start_time', $this->date)->get();

        foreach ($carbonIntervals as $interval) {
            $this->availableTimes[$interval->format('h:i A')] = !$this->appointments->contains('start_time', $interval);
        }
    }
}
