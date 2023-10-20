<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../styles/frmModificar.css" rel="stylesheet" type="text/css">

	<title>Document</title>
	</head>
	
<body>
	<?php
	include("../controllers/cursoController.php");
	if(isset($_GET['idC'])){
		$idC=$_GET['idC'];
		$datos=consultarCur($idC);
		if($row=mysqli_fetch_array($datos)){
			$id=$row['id'];
			$cod=$row['CodCur'];
			$nom=$row['NomCur'];
			$cic=$row['Ciclo'];
			$nc=$row['NumCre'];
		}
		echo"<form method='post'  id='FormularioModificar''action='../controllers/cursoController.php'>";
		echo"<label>Id : <input type='text' name='id' value='".$id."'/></label>";
		echo"<label>Codigo : <input type='text' name='cod' value='".$cod."'/></label>";
		echo"<label>Nombre : <input type='text' name='nom' value='".$nom."'/></label>";
		echo"<label>Ciclo : <input type='text' name='cic' value='".$cic."'/></label>";
		echo"<label>Numero De Creditos : <input type='text' name='numCre' value='".$nc."'/></label>";
		echo"<input id='btn' type='submit' name='btnActualizar' value='Actualizar Curso'/>";
		
		echo"<input type='submit' name='btnRegresar' value='Regresar' id='btn'/>";
		echo"</from>";
	}
	
	?>

	</body>


</html>