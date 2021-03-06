
 <!DOCTYPE html>
 <html>
 <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Personas</title>
 </head>
<body>
  <div class="container">
    <br>
    <a href="guardar" class="btn btn-success">Guardar</a>
    <br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Edad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($personas as $key => $p) { ?>
      <tr>
      <th scope="row"><?php echo $p->persona_id; ?></th>
      <td><?php echo $p->nombre; ?></td>
      <td><?php echo $p->apellido; ?></td>
      <td><?php echo $p->edad; ?></td>
      <td>
        <a href="guardar/<?php echo $p->persona_id ?>">Editar</a><br>
        <a href="ver/<?php echo $p->persona_id ?>">Ver</a><br>
        <a href="#" data-toggle="modal" data-target="#DeletePerson" data-id="<?php echo $p->persona_id ?>"
          data-name="<?php echo $p->nombre ?>"
          >Eliminar</a>
      </td>
    </tr>
   <?php  } ?>
    
  </tbody>
</table>

<div class="modal fade" id="DeletePerson" tabindex="-1" role="dialog" aria-labelledby="DeletePersonLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="DeletePersonLabel">¿Seguro que desea borrar el recurso:
          <span></span>?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="b-borrar">Borrar</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  var id;
  var link;
  $('#DeletePerson').on('show.bs.modal', function (event) {
  link = $(event.relatedTarget) // Button that triggered the modal
  id = link.data('id')
   var name = link.data('name')// Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title span').text(name)
})
  $("#b-borrar").click(function(event) {
    $.ajax({
      url: '<?php echo base_url() ?>PersonasC/borrar_ajax/'+id,
    })
    .done(function(res) {
      console.log(res);
      $("#DeletePerson").modal('hide')
      $(link).parent().parent().remove();
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    
  });
</script>
</div>
 </body>
 </html>