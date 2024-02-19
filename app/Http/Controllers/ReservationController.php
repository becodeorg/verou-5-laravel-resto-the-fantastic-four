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
    return view('reservations.index',["reservations"=>Reservation::all()]);
  }
  public function view($day)
  {
    $date=new Carbon($day);
    $dateEnd=new Carbon($day);
    $dateEnd->addHours(23);
    $reservations=Reservation::select('time','table_id')
    ->whereBetween('time',[$date,$dateEnd])
    ->get()->groupBy('table_id');
    $timeslots=Timeslot::all();
    $tables=Table::all();
    $available=[];   
    
    foreach ($tables as $table) {
      $tableAvailableTimeslots = []; // Initialize array to store available timeslots for this table
      
      foreach ($timeslots as $timeslot) {
        $isAvailable = true; // Assume the timeslot is available initially
        ($timeslot->time<10)?//make 08 instead of 8 !!!!!
        $time=$day.' 0'.$timeslot->time.':00:00'://make 'hour' a full day string to compare
        $time=$day.' '.$timeslot->time.':00:00';
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
    
    return view('reservations.create',[
      "available"=>$available,
      'day'=>$day
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
      'tableANDtime' => 'required',
    ]);
    $booked=explode('~',$request->tableANDtime);
    $reservation = new Reservation;
    $reservation->table_id = $booked[0];
    $reservation->email = $request->email;
    $reservation->name = $request->name;
    $reservation->time = $request->day.' '.$booked[1].':00:00';
    $reservation->notes = $request->notes?? '';
    
    $reservation->save();
    return redirect('/reservations')->with('success', 'Booking Submitted');
  }
}