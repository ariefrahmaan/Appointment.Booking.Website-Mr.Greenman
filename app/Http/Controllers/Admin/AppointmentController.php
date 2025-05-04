<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AppointmentRequest;
use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $query = Appointment::with(['user']);

    // Tambahkan filter berdasarkan tanggal jika diisi
    if ($request->has('start_date')) {
        $query->whereDate('start_time', $request->input('start_date'));
    }

    $items = $query->paginate(4);

    return view('pages.admin.appointment.index', ['items' => $items]);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppointmentRequest $request)
    {
        $data = $request->all();

        Appointment::create($data);
        return redirect()->route('Appointment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Appointment::with([
            'user'
        ])->findOrFail($id);

        return view('pages.admin.appointment.detail',[
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Appointment::findOrFail($id);

        return view('pages.admin.appointment.edit',[
            'item' => $item
        ]);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AppointmentRequest $request, $id)
    {
        $data = $request->all();

        $item = Appointment::findOrFail($id);

        $item->update($data);

        return redirect()->route('appointment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Appointment::findorFail($id);
        $item->delete();

        return redirect()->route('appointment.index');

    }

    
}
