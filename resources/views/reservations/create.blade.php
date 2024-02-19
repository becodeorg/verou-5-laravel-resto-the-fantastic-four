@extends('_layouts.layout')
@section('title')
booking
@endsection

@section('content')
<div class="relative isolate bg-gray-900 h-screen">
  
  <hr>
  <h2 class="ml-24 py-5 text-3xl font-bold tracking-tight text-white">Booking Form</h2>
  <hr>
  
  <form action="{{route("reservations")}}" method="POST"
  class="px-6 pb-24 pt-20 sm:pb-32 lg:px-8 lg:py-48">
  @csrf
  
  <div class="form-group ">
    <label for='name' required
    class="block text-sm font-semibold leading-6 text-white"
    >name </label>
    <input type='text' name='name'id='name'
    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"> 
  </div>
  
  <div class="form-group">
    <label class="block text-sm font-semibold leading-6 text-white"
    for='email' required>email</label>
    <input type='text' id='email'name='email'
    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"> 
  </div>
  <div class="form-group">
    <label for='tableANDtime'
    class="block text-sm font-semibold leading-6 text-white"
    >select time and table</label>
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
    <label for='notes' 
    class="block text-sm font-semibold leading-6 text-white"
    >notes </label>
    <input type='text' id='notes'name='notes'
    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">  
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
  
  <button type="submit" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
  >book table</button>
</form>
</div>
@endsection