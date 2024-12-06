<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Ticket;
use App\Models\User;

class BookingController extends Controller
{
    public function create($ticketId)
{
    $ticket = Ticket::find($ticketId);
    return view('bookings.create', compact('ticket'));
}

public function store(Request $request)
{
    $request->validate([
        'ticket_id' => 'required',
        'user_id' => 'required',
    ]);

    Booking::create($request->all());
    return redirect()->route('bookings.index');
}

}
