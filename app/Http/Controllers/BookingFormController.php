<?php

namespace App\Http\Controllers;

use App\BookingForm;
use App\Models\Reservation;
use App\Models\Table;
use App\Models\Timeslot;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingFormController extends Controller
{
 public function create()
{
    return view('bookingforms.create',["timeslots"=>Timeslot::all(),"tables"=>Table::all()]);
}
 public function view($day)
{
    $date=new Carbon($day);
    $dateEnd=new Carbon($day);
    $dateEnd->addHours(23);
    return view('bookingforms.create',["timeslots"=>Timeslot::all(),
                                      "tables"=>Table::all(),
                                      "reservations"=>Reservation::all()
                                      // ->whereBetween('time',[$date->format('Y-m-d'."). 00:00:00"),$date->format('Y-m-d'."). 23:59:59")])
                                      ->whereBetween('time',[$date,$dateEnd])
                                      // ->groupBy('table_id')
                                      ]);
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $booking)
{
  $this->validate($booking, [
  'table_id' => 'required',
  'email' => 'required',
  'name' => 'required',
  'time' => 'required',
  ]);

  // Create new Booking Form
  $bookingform = new BookingForm;
  $bookingform->table_id = $booking->input('table_id');
  $bookingform->email = $booking->input('email');
  $bookingform->name = $booking->input('name');
  $bookingform->time = $booking->input('time');
  $bookingform->notes = $booking->input('notes')?? '';

  //Save Booking form

  $bookingform->save();

  //redirect
  return redirect('/bookingforms')->with('success', 'Booking Submitted');
}
}
