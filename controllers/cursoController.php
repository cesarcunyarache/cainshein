<?php
include("../models/cursoDao.php");
if (isset($_POST['btnActualizar'])) {
	$id = $_POST['id'];
	$cod = $_POST['cod'];
	$nom = $_POST['nom'];
	$cic = $_POST['cic'];
	$numC = $_POST['numCre'];
	$m = modificar($id, $cod, $nom, $cic, $numC);
	header("Location:../index.php?m=$m");
} else if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$m = eliminarCurso($id);
	header("Location:../index.php?m=$m");
} else if (isset($_POST['btnRegistrar'])) {
	$cod = $_POST['cod'];
	$nom = $_POST['nom'];
	$cic = $_POST['cic'];
	$numC = $_POST['numCre'];
	$m = insertar($cod, $nom, $cic, $numC);
	header("Location:../index.php?m=$m");
} else  if (isset($_POST['btnRegresar'])) {
	header("Location:../index.php");
}
function consultarCur($idC)
{
	return consultarCurso($idC);
}
function listaCursos()
{
	return getCursos();
}
