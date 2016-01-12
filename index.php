<?php
require_once 'directorio.php';
include DIRCONTROL.'saveController.php';
//include DIRMODELO.'Save.php';
//$obj = new Save();
//echo $resu=$obj->guardar();
?>

<!doctype html>
<html>
<head>
	<title>Poo</title>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width = device-width, initial-scale = 1.0, minimum-scale = 1.0, maximum-scale = 1.0, user-scalable = no"/>
	<script type="text/javascript" src="js/function.js"></script>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
<center>
<form>
		<input type="text" placeholder="Ingrese nombre" id="nom" name="nom"><br><br>
		<input type="text" placeholder="Ingrese apellido" id="ape" name="ape"><br><br>
		<input type="text" placeholder="Ingrese edad" id="eda" name="eda"><br><br>
		<input type="text" placeholder="Ingrese email" id="ema" name="ema"><br><br>
		<input type='button' value="Guardar" onclick="save()"> 
</form>
</center>
</body>
</html>

