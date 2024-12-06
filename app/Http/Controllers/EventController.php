<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
{
    $events = Event::all();
    return view('events.index', compact('events'));
}

public function show($id)
{
    $event = Event::find($id);
    return view('events.show', compact('event'));
}

}
