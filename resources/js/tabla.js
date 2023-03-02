// $('#exampleModal').on('show.bs.modal', function (event) {
//     var button = $(event.relatedTarget) 
//     var fecha = button.data('fecha') 
//     var hora = button.data('hora') 
//     var menu = button.data('menu') 
//     var comensales = button.data('comensales') 
//     var preciomenu = button.data('preciomenu') 
//     var preciototal = button.data('preciototal') 
//     var modal = $(this)
//     modal.find('#fecha').text(fecha)
//     modal.find('#hora').text(hora)
//     modal.find('#menu').text(menu)
//     modal.find('#comensales').text(comensales)
//     modal.find('#precio-menu').text(preciomenu)
//     modal.find('#precio-total').text(preciototal)
//   })
// $(document).ready(function() {
//     $('.boton_detalles').click(function() {
//       var id = $(this).data('id');
//       $.ajax({
//         url: "{{ route('reserva.detalles') }}",
//         type: 'GET',
//         data: {
//           id: id
//         },
//         success: function(data) {
//           $('#modalDetalles .modal-body').html(data);
//           $('#modalDetalles').modal('show');
//         }
//       });
//     });
//   });
  