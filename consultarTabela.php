<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
    <title>Consultar Tabela</title>
</head>
<body>
    <h3>Clientes</h3>
<div class="consulta">

<?php


$con = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($con, "atv");
echo "<table>";

            echo "<tr>";
            echo"<th>Nome</th>";
            echo"<th>Idade</th>";
            echo"<th>Ação</th>";
            echo "</tr>";


$sql = mysqli_query($con, "SELECT * FROM cadastro") or die(mysqli_error($con));

while ($aux = mysqli_fetch_assoc($sql)) {

    echo "<tr>";
                    echo "<td>" . $aux['nome'] . "</td>";
                    echo "<td>" . $aux['idade'] . "</td>";
                    echo "<td>" . "<a href = </a>" . "</td>";
                    echo "</tr>";
        }
        echo "</table>";



?>

</div>
</body>
</html>