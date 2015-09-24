<?php 
	$funcionCurso=$GET["op"];
	$id_curso=$_POST["id_curso"];
	$nombre_cur=$_POST["nombre_curso"];
	$comienzo_cur=$_POST["fecha_comienzo"];
	$error="";


	switch ($funcionCurso) {
		case 'insertar':
				if(isset($_POST["enviar"]))
				{
					if($id_curso == "")
					{
						$error=" <script>document.getElementByID('error_id_curso').innerHTML='Que crees, el codigo es importante';
						document.getElementById('error_id_curso').className += ' alert alert-danger';
						</script>";
					}
				}
			break;
		
		default:
			# code...
			break;
	}
 ?>
