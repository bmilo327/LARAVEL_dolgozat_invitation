<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ticket::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new Ticket();
        $record->create($request->all());
        return $record;
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        return $ticket;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $record = Ticket::findorFail($ticket->id);
        $record->update($request->all());
        return $record;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $record = Ticket::destroy($ticket->id);
        return $record;
    }
}
