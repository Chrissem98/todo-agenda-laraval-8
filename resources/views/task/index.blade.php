@extends('layouts.task.app')

@section('content')
    <h1>Accueil</h1>
    <div id="fullcalendar"></div>

    <script>
        window.onload = () => {
            let calendarEl = document.getElementById('fullcalendar');

            let calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'fr',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                // initialDate: '2020-09-12',
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                // editable: true,
                selectable: true,
                events: <?= $tasks ?>
            });

            calendar.render();
        }
    </script>
@endsection
