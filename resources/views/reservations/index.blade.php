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
          aspectRatio:2,
          initialView: 'dayGridMonth',
          validRange:{start:"{{now()}}"},
          hiddenDays:[1,0],
          initialDate: "{{now()}}",
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },  
            dateClick: function(info) {
              location.href = '/reservations/'+info.dateStr;
  },
    events: [
      @forEach($reservations as $reservation)
        {
          title: '{{$reservation->table_id}}',
          start: '{{$reservation->time}}'
        },
      @endforeach
     ]
        });
        calendar.render();
      });
    </script>
    <div id='calendar' style="width: 1600px"></div>

@endsection
