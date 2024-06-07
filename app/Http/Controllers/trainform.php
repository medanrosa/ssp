<?php

namespace App\Http\Controllers;

use App\Models\bookingform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class trainform extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.products.index', [
            'goods' => bookingform::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = bookingform::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'card' => $request->get('card'),
            'departure' => $request->get('departure'),
            'destination' => $request->get('destination'),
            'time_slot' => $request->get('time_slot'),
            'class' => $request->get('class'),
            'price' => $request->get('price'),
            'user_id' => Auth::id(), // Set the user_id to the ID of the authenticated user
        ]);

        return redirect()->route('ticketgen', ['id' => $ticket->id]);
    }


    public function showTicket($id)
    {
        $ticket = bookingform::findOrFail($id);
        return view('ticketgen', ['ticket' => $ticket]);
    }

    /**
     * Display the specified resource.
     */
    public function show(bookingform $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bookingform $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bookingform $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bookingform $form)
    {
        $form->forceDelete();
        return redirect()->route('trainform.index')->with('success', 'Booking details successfully deleted!');
    }

    /**
     * Display the user's booking history.
     */
    public function myBookings()
    {
        $bookings ['bookings'] = bookingform::where('user_id', Auth::id())->get();
        return view('mybookings', $bookings);
    }

}
