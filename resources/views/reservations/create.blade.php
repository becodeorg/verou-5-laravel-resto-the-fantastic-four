@extends('_layouts.layout')

@section('title')
    booking
@endsection

@section('content')
<hr>
<h2>Booking Form</h2>
<hr>
<form action="{{route("reservations")}}" method="POST">
@csrf

<div class="form-group">
<label for='name'>name </label>
<input type='text' name='name'id='name'> 
</div>

<div class="form-group">
<label for='email'>email</label>
<input type='text' id='email'name='email'> 
</div>

<div class="form-group">
<label for='time'>select time and table</label>
<select name="time" id="time" name="time">
  @foreach($timeslots as $timeslot)
    <option value="{{$timeslot->time}}">{{$timeslot->time}}:00</option>
  @endforeach
</select>
<select name="table_id" id="tables">
    @foreach ($tables as $table)
        <option value="{{ $table->id }}"> table no{{ $table->id }}</option>
    @endforeach
</select>
</div>
<input type="hidden" name="day" value="{{$day}}">

<div class="form-group">
<label for='notes'>notes </label>
<input type='text' id='notes'name='notes'> 
</div>

<button type="submit">book table</button>
</form>
@endsection
