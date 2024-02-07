@extends('_layouts.layout')

@section('title')
    test-Page bookings
@endsection

@section('content')
<hr>
<h1>Booking Form</h1>
<hr>
{!! Form::open(['action' => 'BookingFormsController@store', 'method' => 'POST']) !!}
{{-- <form action="{{Route::}}" method="POST"></form> --}}
<div class="form-group">
{{Form::label('requestID', 'Request ID')}}
{{Form::number('requestID', $patientDetail->requestID, ['class' => 'form-control',])}}
</div>

<div class="form-group">
{{Form::label('requestDate', 'Request Date')}}
{{Form::date('requestDate', $patientDetail->requestDate, ['class' => 'form-control'])}}
</div>

<div class="form-group">
{{Form::label('patientID', 'Patient ID')}}
{{Form::number('patientID', $patientDetail->patientID, ['class' => 'form-control'])}}
</div>

<div class="form-group">
{{Form::label('patientForename', 'Patient Forename')}}
{{Form::text('patientForename', $patientDetail->patientForename, ['class' => 'form-control'])}}
</div>

<div class="form-group">
{{Form::label('patientSurname', 'Patient Surname')}}
{{Form::text('patientSurname', $patientDetail->patientSurname, ['class' => 'form-control',])}}
</div>

<div class="form-group">
{{Form::label('patientSex', 'Patient Sex')}}
{{Form::text('patientSex', $patientDetail->patientSex, ['class' => 'form-control', 'placeholder' => ''])}}
</div>

<div class="form-group">
{{Form::label('patientDOB', 'Patient DOB')}}
{{Form::date('patientDOB', $patientDetail->patientDOB, ['class' => 'form-control','placeholder' => ''])}}
</div>

<div class="form-group">
{{Form::label('patientUrgency', 'Patient Urgency')}}
{{Form::text('patientUrgency', $patientDetail->patientUrgency, ['class' => 'form-control','placeholder' => ''])}}
</div>

<div class="form-group">
{{Form::label('TheatreRoomID', 'Theatre Room')}}
{{Form::select('TheatreRoomID', ['Room 1 - Time: 9:00AM - 11:00AM' => 'Room 1 - Time: 9:00AM - 11:00AM',
                                'Room 1 - Time: 12:00PM -2:00PM' => 'Room 1 - Time: 12:00PM - 2:00PM',
                                'Room 1 - Time: 3:00PM - 5:00PM' => 'Room 1 - Time: 3:00PM - 5:00PM',
                                'Room 2 - Time: 9:00AM - 11:00AM' => 'Room 2 - Time: 9:00AM - 11AM',
                                'Room 2 - Time: 12:00PM - 2:00PM' => 'Room 2 - Time: 12:00PM - 2:00PM',
                                'Room 2 - Time: 3:00PM - 5:00PM' => 'Room 2 - Time: 3:00PM - 5:00PM',
                                'Room 3 - Time: 9:00AM - 11:00AM' => 'Room 3 - Time: 9:00AM - 11:00AM',
                                'Room 3 - Time: 12:00PM - 2:00PM' => 'Room 3 - Time: 12:00PM - 2:00PM',
                                'Room 3 - Time: 3:00PM - 5:00PM' => 'Room 3 - Time: 3:00PM - 5:00PM'

                                ], null, ['class' => 'form-control','placeholder' => 'Select Theatre Slot'])}}
</div>

<div class="form-group">
{{Form::label('surgeryType', 'Surgery Type')}}
{{Form::text('surgeryType', $patientDetail->surgeryType, ['class' => 'form-control','placeholder' => ''])}}
</div>

<div class="form-group">
  {{Form::label('surgeryDate', 'Surgery Date')}}
  {{Form::date('surgeryDate')}}
</div>

<div class="form-group">
  {{Form::label('performingSurgeon', 'Peforming Surgeon')}}
  {{Form::select('performingSurgeon', ['Wendy clarke' => 'Wendy Clarke', 'John Kennedy' => 'John Kennedy', 'Imran Yousuf' => 'Imran Yousuf', 'Merideth Grey' => 'Merideth Grey', 'Derek Shepherd' => 'Derek Shepherd'], null, ['class' => 'form-control','placeholder' => ''])}}
</div>

<div class="form-group">
{{Form::label('bloodGroup', 'Blood Group')}}
{{Form::select('bloodGroup', ['A' => 'A', 'B' => 'B', 'O' => 'O', 'AB' => 'AB'], null, ['class' => 'form-control','placeholder' => $patientDetail->bloodGroup])}}
</div>

<div class="form-group">
  {{Form::label('patientNotes', 'Patient Notes')}}
  {{Form::textarea('patientNotes', '', ['class' => 'form-control', 'placeholder' => 'Enter any other neccessary patient details'])}}
</div>

<div class="btn-toolbar">
  <a href="javascript:history.back()" class="btn btn-danger mr-3">Back</a>
  {{Form::submit('Submit Booking', ['class'=> 'btn btn-success mr-3'])}}
</div>
{!! Form::close() !!}
@endsection