<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<button><a href="index.html">volver</a></button>	
</body>
</html>	
<?php 
if(empty($_POST['num1']) || empty($_POST['num2']) && ($_POST['num2']==0)){
	echo"ingrese valores validos";
}else{
	$n1=$_POST['num1'];
	$n2=$_POST['num2'];
if ($_POST["consulta"] == "suma") {
		$suma=$n1+$n2;
		echo "la suma de ".$n1. " y ".$n2. " es ", $suma;
	}
if ($_POST["consulta"] == "resta") {
		$resta=$n1-$n2;
		echo "la resta de ".$n1. " y ".$n2. " es ", $resta;
	}
	if ($_POST["consulta"] == "multiplicacion") {
		$multiplicacion=$n1*$n2;
		echo "la multiplicacion de ".$n1. " y ".$n2. " es ", $multiplicacion;
	}
	if ($_POST["consulta"] == "division") {
		$division=$n1/$n2;
		echo "la division de ".$n1. " y ".$n2. " es ", $division;
	}
}
?>