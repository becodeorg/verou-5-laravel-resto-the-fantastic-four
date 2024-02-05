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
          initialView: 'dayGridMonth',
           initialDate: '2023-11-07',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
    events: [
      {
        title: 'All Day Event',
        start: '2023-11-01'
      },
      {
        title: 'Lunch',
        start: '2023-11-12T12:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2023-11-13T07:00:00'
      },]
        });
        calendar.render();
      });
    </script>
    <div id='calendar'></div>

@endsection
