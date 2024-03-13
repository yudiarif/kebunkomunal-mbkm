
@php
    $eventData = [];
    foreach ($datacabai as $pupukcabai) {
        if (!$pupukcabai->pupuk == null) {
            # code...
            $event = [
                "title" => $pupukcabai->pupuk->jenis_pupuk,
                "start" => $pupukcabai->tanggal_pupuk,  
            ];
            $eventData[] = $event;
        }
    }
@endphp

<div class="col-sm-12 col-xl-6">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Pemupukan</h6>
        <div id="calendar" data-events='@json($eventData)'></div>
    </div>
</div>


 <!-- calender -->
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/id.js"></script>
 <!-- kalender -->
 <script>

     $(document).ready(function() {
         var eventsData = $('#calendar').data('events');

         $('#calendar').fullCalendar({
             header: {
                 left: 'prev',
                 center: 'title',
                 right: 'next'
             },
             events: eventsData,
             eventClick: function(calEvent, jsEvent, view) {
                 Swal.fire({
                     title: 'Jenis Pupuk',
                     text: calEvent.title,
                     icon: 'success',
                     iconHtml: '<img src="img/fertilizer.png">',
                     confirmButtonText: 'Selesai',
                     confirmButtonColor: '#89BC56',
                     customClass: {
                         title: 'swal-title',
                         content: 'swal-text'
                     }
                 });
             },
             eventRender: function(event, element) {
                 element.addClass('pemupukan-event');

                 // Menentukan warna berdasarkan jenis pupuk
                 if (event.title === 'Biogreenfil') {
                     element.css('background-color', 'green');
                 } else if (event.title === 'Pupuk NPK') {
                     element.css('background-color', 'blue');
                 } else if (event.title === 'Pupuk C') {
                     element.css('background-color', '#FFA500');
                 }
             },
             locale: 'id',
         });
     });

     if (window.matchMedia('(max-width: 500px)').matches) {
         $('#calendar').css('font-size', '0.5em');
     }
 </script>
