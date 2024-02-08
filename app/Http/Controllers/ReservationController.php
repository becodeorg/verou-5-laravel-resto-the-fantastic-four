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
    // $reservationsgpt = Reservation::whereBetween('time', [$date, $dateEnd])->get()->groupBy('table_id');
    $reservations=Reservation::select('time','table_id')
                                      ->whereBetween('time',[$date,$dateEnd])
                                       ->get()->groupBy('table_id');
    $timeslots=Timeslot::all();
    $tables=Table::all();
    $available=[];

    
    foreach ($tables as $table) {
      $tableAvailableTimeslots = []; // Initialize array to store available timeslots for this table
      
      // Loop through all timeslots
      foreach ($timeslots as $timeslot) {
        $isAvailable = true; // Assume the timeslot is available initially
        // Check if there are any reservations for this timeslot and table
        $time=$day.' '.$timeslot->time.':00:00';//make 'hour' a full day string to compare
        foreach ($reservations as $reservedTable) {
          foreach ($reservedTable as $reservedTime) {
            if ($reservedTime->time == $time&& $reservedTime->table_id == $table->id) {
              // If a reservation is found for this timeslot and table, mark it as unavailable
            $isAvailable = false;
            break; // No need to check further reservations once a reservation is found
          }
        }
      }
      // If the timeslot is still available after checking all reservations, add it to the table's available timeslots
      if ($isAvailable) {
        $tableAvailableTimeslots[] = $timeslot;
      }
    }
    
    // Add the table's available timeslots to the overall available array
    $available[$table->id] = $tableAvailableTimeslots;
  }
  dd($available);
    
    return view('reservations.create',[
                                      "availible"=>$available
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
  $request->validate([
    'name' => 'required|min:2',
    'email' => 'required|email',
    'time' => 'required',
    'table_id' => 'required',
  ]);

  $reservation = new Reservation;
  $reservation->table_id = $request->table_id;
  $reservation->email = $request->email;
  $reservation->name = $request->name;
  $reservation->time = $request->day.' '.$request->time.':00:00';
  $reservation->notes = $request->notes?? '';

  $reservation->save();

  return redirect('/reservations')->with('success', 'Booking Submitted');
}
}
