<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./styles/index.css" rel="stylesheet" type="text/css">

	<title>Document</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

	</head>

	<body>
	
		<?php
		 if(isset($_GET['m'])){
			 $m=$_GET['m'];
			 echo '<script languaje="javascript"> alert("'.$m.'");</script>';
		 }
		
		echo '<panel>';
		echo '<label><a href="views/frmInsertar.php">Registrar Curso</a></label>';
	    echo '<label><a href="views/frmConsultar.php">Consultar Curso</a></label>';
		echo'</panel>';
		
		?>
	
		
		
	</body>


</html>