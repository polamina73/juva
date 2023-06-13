<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        return Reservation::all();
    }

    public function store(ReservationRequest $request)
    {
        return Reservation::create($request->validated());
    }

    public function show(Reservation $reservation)
    {
        return $reservation;
    }

    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $reservation->update($request->validated());

        return $reservation;
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return response()->json();
    }
}
