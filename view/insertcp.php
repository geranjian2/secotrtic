
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link href="css/bootstrap.min.css" rel="stylesheet">
		 <link rel="stylesheet" href="css/stylos.css">

		<!-- Latest compiled and minified CSS -->

		<title>Document</title>
	</head>
	<body>
	<?php include("menu.php"); ?>
	<section>
	<?php include("panelcontrol.php"); ?>
	<div class="col-md-9">
		<div class="panel panel-info app-panelheader">
			  <div class="panel-heading">
			    <h3 class="panel-title"><spam class="glyphicon glyphicon-bookmark"></spam> Cursos</h3>
			  </div>
			  <div class="panel-body">
			  	<ul class="nav nav-pills">
			  		<li>Nuevo</li>
			  		<li>Actualizar</li>
			  		<li>Mostar</li>
			  		<li>Borrar</li>
			  	</ul>
			    <h1>Nuevo  Curso</h1>
			    <br>
			    <form action="" method="post" role="form" class="form form-horizontal">
			    	<div class="form-group">
			    		<label for="id_curso" class="control-label col-md-2">Id_Curso</label>
			    		<div class="col-md-6">
			    			<input type="text" name="id_curso" id="id_curso" class="form-control">
			    			<h5 class="text-danger app-campo-obligatorio">Ingresa el campo</h5>
			    		</div>
			    	</div>
			    	

			    	<div class="form-group">
			    		<label for="id_curso" class="control-label col-md-2">Nombre</label>
			    		<div class="col-md-6">
			    			<input type="text" name="id_curso" id="id_curso" class="form-control">
			    		</div>
			    	</div>
			    	<div class="form-group">
			    		<label for="id_curso" class="control-label col-md-2">Fecha Comienzo</label>
			    		<div class="col-md-6">
			    			<input type="text" name="id_curso" id="id_curso" class="form-control">
			    		</div>
			    	</div>
			    	<div class="form-group">
			    		<label for="id_curso" class="control-label col-md-2"></label>
			    		<div class="col-md-4">
			    		<button class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar </button>
			    		</div>
			    	</div>
			    	
			    </form>
			  </div>
			</div>
		</div>
	</div>
	</div>
	</section>
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>
	</body>
	</html>