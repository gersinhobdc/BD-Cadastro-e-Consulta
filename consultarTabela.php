<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
    <title>Consultar Tabela</title>
</head>
<body>
<div>
<?php

$con = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($con, "atv1103");



$sql = mysqli_query($con, "SELECT * FROM cadastro") or die(mysqli_error($con));


while ($aux = mysqli_fetch_assoc($sql)) {
    echo "-----------------------------------------<br />";
    echo "Nome: " . $aux["nome"] . "<br />";
    echo "Idade: " . $aux["idade"] . "<br />";
}


?>

</div>
</body>
</html>