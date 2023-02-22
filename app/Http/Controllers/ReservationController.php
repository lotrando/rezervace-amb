<?php

namespace App\Http\Controllers;

use App\Mail\ReservationMail;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('rezervace', compact([
            'reservations', $reservations
        ]));
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
    public function store(Request $request)
    {
        // return $request;

        $validData = Validator::make($request->all(), [
            'email'         => 'required',
            'last_name'     => 'required|max:50',
            'first_name'    => 'required|max:50',
            'year'          => 'required|numeric',
            'phone'         => 'required|numeric',
            'evidence'      => 'required',
            'type'          => 'required',
            'message'       => 'nullable',
        ])->validate();

        Reservation::create($validData);

        $reservation = Reservation::latest()->first();

        $data = [
            'last_name'     => $reservation->last_name,
            'first_name'    => $reservation->first_name,
            'year'          => $reservation->year,
            'email'         => $reservation->email,
            'phone'         => $reservation->phone,
            'evidence'      => $reservation->evidence,
            'type'          => $reservation->type,
            'message'       => $reservation->message,
            'created_at'    => $reservation->created_at,
        ];

        Mail::to('ambulance.ortopedie@khn.cz')->send(new ReservationMail($data));
        Alert::toast('Rezervace úspěšně odeslána');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
