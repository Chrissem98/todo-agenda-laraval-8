@extends('layouts.task.app')

@section('content')
    <style>
        a:hover{
            cursor: pointer;
        }
    </style>

    <h1>Accueil</h1>
    @include('task.partials._modal')
    <div id="fullcalendar"></div>

    <script>
        window.onload = function(){

            // window.bootstrap = require('bootstrap');

            let calendarEl = document.getElementById('fullcalendar');

            // let myModal = new Modal(document.getElementById('exampleModal'))
            let modalBtn = document.getElementById('btn');
            let title = document.getElementById('exampleModalLabel');
            let description = document.getElementById('description');
            let start = document.getElementById('start');
            let end = document.getElementById('end');
            let create = document.getElementById('create');
            let update = document.getElementById('update');
            let update_link = document.getElementById('update_link');
            let delete_link = document.getElementById('delete_link');
            let delete_form = document.getElementById('delete_form');

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
                events: <?= $tasks ?>,
                nowIndicator: true,
                eventClick: function(info){
                    console.log(info)
                    let event = info.event
                    let extendedEvent = event._def.extendedProps
                    description.innerHTML = extendedEvent.description
                    start.innerHTML = event.start
                    end.innerHTML = event.end
                    create.innerHTML = extendedEvent.created_at
                    update.innerHTML = extendedEvent.updated_at

                    modalBtn.click();
                    // modal.show()
                }
            });

            calendar.render();
        }
    </script>
@endsection
