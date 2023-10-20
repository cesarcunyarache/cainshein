<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../styles/frmInsertar.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>

<body>
	<form method="post" action="../controllers/cursoController.php" id="formularioCurso">
		<label>Codigo :<input type="text" name="cod" /></label>
		<label>Nombre :<input type="text" name="nom" /></label>
		<label>Ciclo :<input type="text" name="cic" /></label>
		<label>Numero de Creditos :<input type="text" name="numCre" /></label>
		<input type="submit" name="btnRegistrar" value="Registrar Curso" id="btn" />
		<input type="submit" name="btnRegresar" value="Regresar" id="btn" />
	</form>
</body>


</html>