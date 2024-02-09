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
<label for='name' required>name </label>
<input type='text' name='name'id='name'> 
</div>

<div class="form-group">
<label for='email' required>email</label>
<input type='text' id='email'name='email'> 
</div>
<div class="form-group">
  <label for='tableANDtime'>select time and table</label>
  <select name="tableANDtime">
    @foreach($available as $table=>$time)
      <optgroup label="Table {{$table}}"data-table_id="{{$table}}" name='table_id'>
        @foreach($time as $slot)
          <option value="{{$table .'~' .$slot->time}}">{{$slot->time}}:00</option>
        @endforeach
      </optgroup>
    @endforeach
  </select>
</div>
<input type="hidden" name="day" value="{{$day}}">

<div class="form-group">
<label for='notes'>notes </label>
<input type='text' id='notes'name='notes'> 
</div>

@if ($errors->any())
    <div class="errorDisplay" style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<button type="submit" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
>book table</button>
</form>
@endsection
