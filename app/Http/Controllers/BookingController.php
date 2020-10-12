<?php

namespace App\Http\Controllers;
use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::orderby('id','desc')->get();
        return view('bookings.index',compact('bookings'));
    }
    public function create()
    {
        return view('bookings.create');
    }
    public function store(Request $request)
    {
        $request->validate([
        'agency'=>'required',
        'fname' => 'required',
        'lname' => 'required',
        'rank' => 'required',
        'pnum' => 'required',
        'numpeople' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'even' => 'required',
        'pattern' => 'required',
        'advice' => 'required',

    ]);
        Booking::create($request->all());
        return redirect()->route('bookings.index')
        ->with('success','bookings created successfully.');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
