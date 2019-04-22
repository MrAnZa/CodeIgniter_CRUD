
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 	<title>Personas</title>
 </head>
<body>
	<div class="container">
		<br>
		<a href="<?php echo base_url(); ?>PersonasC/listado" class="btn btn-warning">Volver</a>
		<br><br>
	 <?php echo form_open('') ?>
	 	<div class="form-group">
	 		<?php 
	 			echo form_label('Nombre','nombre');
	 			$input = array(
	 				'name' => 'nombre',
	 				'value' => $nombre,
	 				'readonly'=>'readonly',
	 				'class' => 'form-control input-lg');
	 			echo form_input($input);

	 			echo form_label('Apellido','apellido');
	 			$input = array(
	 				'name' => 'apellido',
	 				'value' => $apellido,
	 				'readonly'=>'readonly',
	 				'class' => 'form-control input-lg');
	 			echo form_input($input);

	 			echo form_label('Edad','edad');
	 			$input = array(
	 				'name' => 'edad',
	 				'type'=>'number',
	 				'value' => $edad,
	 				'readonly'=>'readonly',
	 				'class' => 'form-control input-lg');
	 			echo form_input($input);
	 		?>
	 	</div>
	 <?php echo form_close() ?>
	 </div>
 </body>
 </html>