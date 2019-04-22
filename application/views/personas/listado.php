
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
        <a href="borrar/<?php echo $p->persona_id ?>">Eliminar</a>
      </td>
    </tr>
   <?php  } ?>
    
  </tbody>
</table>
</div>
 </body>
 </html>