<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Table;
use App\Models\Timeslot;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
 public function create()
{
    return view('reservations.create',["timeslots"=>Timeslot::all(),"tables"=>Table::all()]);
}
 public function view($day)
{
    $date=new Carbon($day);
    $dateEnd=new Carbon($day);
    $dateEnd->addHours(23);
    $reservations=Reservation::select('time','table_id')
                                      ->whereBetween('time',[$date,$dateEnd])
                                      //  ->groupBy('table_id')
                                       ->get();

    $timeslots=Timeslot::all();
    $tables=Table::all();
    $availible=[];
    foreach($tables as $table)
    {
      foreach($timeslots as $timeslot)
      {
        
      }
    }
    // return view('reservations.create',[
    //                                   "availible"=>$availible
    //                                   ]);
    return view('reservations.create',["timeslots"=>$timeslots,
                                      "tables"=>$tables,
                                      "reservations"=>$reservations,
                                      "day"=>$day
                                      ]);
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
  $validat=$request->validate([
    'name' => 'required',
    'email' => 'required',
    'time' => 'required',
    'table_id' => 'required',
  ]);
  // dd($request);
$reservation = new Reservation;
  $reservation->table_id = $request->table_id;
  $reservation->email = $request->email;
  $reservation->name = $request->name;
  $reservation->time = $request->day.' '.$request->time.':00:00';
  $reservation->notes = $request->notes?? '';
  // $reservation->table_id = $reservation->input('table_id');
  // $reservation->email = $reservation->input('email');
  // $reservation->name = $reservation->input('name');
  // $reservation->time = $reservation->input('time');
  // $reservation->notes = $reservation->input('notes');
  // $reservation = new Reservation([
  //   'table_id' => $reservation->input('table_id'),
  //   'email' => $reservation->input('email'),
  //   'name' => $reservation->input('name'),
  //   'time' => $reservation->input('time'),
  //   'notes' => $reservation->input('notes')?? '',
  // ]);

  $reservation->save();

  //redirect
  return redirect('/reservations')->with('success', 'Booking Submitted');
}
}
