document.addEventListener('DOMContentLoaded', function() {
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar:{
            left:'prev',
            center:'title',
            right:'next'
        },
        initialView: 'dayGridMonth',
        selectable:true,        
        events: '/FullCall',
        firstDay: 1,
        eventClick:function(event){
            let fecha = moment(event.event.start).format('YYYY-MM-DD');
            $.ajax({
                type: 'GET',
                url: '/FullCallAjax',

                data: {
                    fecha:fecha,
                },
                success: function(response){   
                    var horas=document.getElementById('horas');
                    horas.innerHTML="";
                    response.forEach(function(response){
                            var boton=document.createElement('button');
                            boton.className="btn btn-success text-5xl me-3";
                            boton.innerHTML=response.hora;
                            horas.appendChild(boton);
                            boton.addEventListener("click", function() {
                            document.getElementById('horario').value=response.id;
                            document.getElementById('hora').value=response.hora;
                            document.getElementById('fecha').value=fecha;
                            document.getElementById('Horario').submit();    
                        });
                    });
                }
            });
        },
        locale:'es'
    });
    calendar.render();
});