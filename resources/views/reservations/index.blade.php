@extends('_layouts.layout')

@section('title')
test-Page
@endsection

@section('content')
<div class="relative isolate bg-gray-900 h-screen">
  
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        height: 650,
        allDaySlot: false,
        initialView: 'timeGridWeek',
        validRange:{start:"{{now()}}"},
        initialDate: "{{now()}}",
        eventTimeFormat:{
          hour:'2-digit',
          minute:'2-digit',
          hour12:false,
        },
        slotMinTime: '08:00',
        expandRows:true,
        slotMaxTime: '20:00',
        slotDuration: '02:00' ,
        hiddenDays:[0],
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek'
        },  
        dateClick: function(info) {
          location.href = '/reservations/'+info.dateStr.substring(0,10);
        },
        events: [
          @forEach($reservations as $reservation)
          {
            title: 'table {{$reservation->table_id}}',
            start: '{{$reservation->time}}'
          },
          @endforeach
        ]
      });
      calendar.render();
    });
    </script>
    <h2 class="ml-24 py-5 text-3xl font-bold tracking-tight text-white">Welcome to our restaurant!
      Click on any of the availible days to chose a table and time. 
    </h2>
    <div id='calendar' class="bg-white mx-auto align-middle	" style="width: 90vw"></div>
  </div>
  @endsection