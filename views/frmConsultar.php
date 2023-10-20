<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/frmConsultar.css" rel="stylesheet" type="text/css">

	<title>Document</title>
	</head>
	
<body>

	<?php
	
	include("../controllers/cursoController.php");
	echo "<h1 align='center'>DATOS DE CURSOS</h1>";
	echo "<table width='840' border='1' align='center' class='table table-striped' >";
	echo "<tbody>";
	echo"<tr>";
	echo"<th width='100'> Id</th>";
    echo"<th width='100'> Codigo</th>";
	echo"<th width='100'> Nombre</th>";
	echo"<th width='100'> Ciclo</th>";
	echo"<th width='100'> Num. Creditos</th>";
	echo"<th width='100'></th>";
	echo"<th width='100'></th>";
	echo"</tr>";
	
	$sql=listaCursos();
	while($row=mysqli_fetch_array($sql)){
		echo"<tr>";
		echo "<td align'center'>".$row['id']."</td>";
		echo "<td align'center'>".$row['CodCur']."</td>";
		echo "<td align'center'>".$row['NomCur']."</td>";
		echo "<td align'center'>".$row['Ciclo']."</td>";
		echo "<td align'center'>".$row['NumCre']."</td>";
		echo '<td><label id="Modificar"><a href="frmModificar.php?idC='.$row['id'].'">Modificar</a></label></td>';
		echo'<td><label id="Eliminar"><a href="../controllers/cursoController.php?id='.$row['id'].'">Eliminar</a></label></td>';
		echo"</tr>";
	}
	echo "</tbody>";
	echo "</table>";
	
   

	    echo '<label id="btnRegresar"><a href="../index.php">Regresar</a></label>';

	?>
	
	
	</body>


</html>