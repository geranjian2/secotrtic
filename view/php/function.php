<?php 
	
		$error="";
		$nombre=$_POST["nombre"];

		if($nombre == "")
		{
			 $error="<script>document.getElementById('mostrar').innerHTML='error';
				document.getElementById('mostrar').className += ' alert alert-danger';
			 </script>";

			// $error='<script>window.location.href = "http://stackoverflow.com";</script>';
			 
		}

		echo $error;
	
 ?>

