@extends('_layouts.layout')

@section('title')
    booking
@endsection

@section('content')
<hr>
<h2>Booking Form</h2>
<hr>
<form action="{{route("booking")}}" method="POST">
@csrf

<div class="form-group">
<label for='name'>name </label>
<input type='text' id='name'> 
</div>

<div class="form-group">
<label for='email'>email</label>
<input type='text' id='email'> 
</div>

<div class="form-group">
<label for='time'>select time and table</label>
<select name="time" id="time">
  @foreach($timeslots as $timeslot)
    <option value="{{$timeslot->time}}">{{$timeslot->time}}:00</option>
    @endforeach
  </select>
<select name="tables" id="tables">
  @foreach($tables as $table)
    <option value="{{$table}}" >table {{$table->id}} (seats {{$table->places}})</option>
    {{-- ($reservations) ? ' disabled' : '' --}}
  @endforeach
  </select>

</div>

<div class="form-group">
<label for='notes'>notes </label>
<input type='text' id='notes'> 
</div>

<button type="submit">book table</button>
</form>
{{dd($reservations)}}
@endsection
