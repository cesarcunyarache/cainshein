<?php
include("conexion.php");

function insertar($cod,$nom,$cic,$nc){
	global $cn;
	$sql="INSERT INTO TCurso(CodCur,NomCur,Ciclo,NumCre) VALUES ('".$cod."','".$nom."','".$cic."','".$nc."')";
	if(mysqli_query($cn,$sql)){
		return "Los datos fueron insertados con exito!";
	}else{
		return "ERROR, Los datos no se pudieron registrar";
	}
}

function getCursos(){
	global $cn;
	$sql="Select*from TCurso";
	return mysqli_query($cn,$sql);
}
function consultarCurso($idC){
	global $cn;
	$sql="SELECT * FROM TCurso where id='".$idC."'";
	return mysqli_query($cn,$sql);
}

function modificar($id,$cod,$nom,$cic,$numc){
	global $cn;
	$sql="UPDATE TCurso SET CodCur='".$cod."',NomCur='".$nom."',Ciclo='".$cic."',NumCre='".$numc."' WHERE id='".$id."'";
	if(mysqli_query($cn,$sql)){
		return "Los datos se modificaron correctamente";
	}else{
		return "Error, los datos no se pudieron actualizar";
	}
}
function eliminarCurso($id){
	global $cn;
	$sql="DELETE FROM Tcurso where id='".$id."'";
	if(mysqli_query($cn,$sql)){
		return "El curso se elimino correctamente";
	}else{
		return "Error, no se pudo eliminar el curso";
	}
}


?>