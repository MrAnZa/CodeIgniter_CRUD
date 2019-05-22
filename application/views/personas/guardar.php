
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
			<?php if(validation_errors() != ""): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
			<?php endif; ?>

			<?php if($error != ""): ?>
			<div class="alert alert-danger" role="alert">
				<?php echo $error; ?>
			</div>
			<?php endif; ?>
	 <?php echo form_open_multipart(''); ?>
	 	<div class="form-group">
	 		<?php 
	 			echo form_label('Nombre','nombre');
	 			$input = array(
	 				'name' => 'nombre',
	 				'value' => $nombre,
	 				'class' => 'form-control input-lg');
	 			echo form_input($input);

	 			echo form_label('Apellido','apellido');
	 			$input = array(
	 				'name' => 'apellido',
	 				'value' => $apellido,
	 				'class' => 'form-control input-lg');
	 			echo form_input($input);

	 			echo form_label('Edad','edad');
	 			$input = array(
	 				'name' => 'edad',
	 				'type'=>'number',
	 				'value' => $edad,
	 				'class' => 'form-control input-lg');
	 			echo form_input($input);

	 			echo form_label('Imagen','image');
	 			$input = array(
	 				'name' => 'image',
	 				'type'=>'file',
	 				'value' => '',
	 				'class' => 'form-control input-lg');
	 			echo form_input($input);
	 		?>
	 	</div>
	 	<?php echo form_submit('mysubmit','Enviar',"class='btn btn-primary'") ?>
	 <?php echo form_close() ?>
	 </div>
 </body>
 </html>