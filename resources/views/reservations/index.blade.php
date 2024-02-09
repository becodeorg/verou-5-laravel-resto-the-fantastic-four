@extends('_layouts.layout')

@section('title')
    test-Page
@endsection

@section('content')

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          height: 650,
          // aspectRatio:2,
          allDaySlot: false,
          initialView: 'timeGridWeek',
          validRange:{start:"{{now()}}"},
          initialDate: "{{now()}}",
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek'
            },  
            dateClick: function(info) {
              location.href = '/reservations/'+info.dateStr.substring(0,10);
  },
    slotMinTime: '08:00',
    expandRows:true,
    slotMaxTime: '20:00',
   slotDuration: '02:00' ,
   hiddenDays:[0],
//   businessHours: {
//   // days of week. an array of zero-based day of week integers (0=Sunday)
//    daysOfWeek: [ 2, 3, 4, 5, 6 ], 
//   startTime: '08:00', // a start time (10am in this example)
//   endTime: '20:00', // an end time (6pm in this example)
// },
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
    <div id='calendar' style="width: 90vw"></div>

@endsection
