<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingForm extends Model
{
  protected $table = 'reservations';
  //Timestamps
  public $timestamps = true;
}
