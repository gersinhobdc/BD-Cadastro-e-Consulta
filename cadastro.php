<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>

    <style type="text/css">
    .btn-consulta{
    	display: inline-block;
  		padding: 10px 20px;
 		background-color: #007BFF;
  		color: white;
  		text-decoration: none;
  		border-radius: 5px;
    }
    .btn-consulta:hover {
  	background-color: #0056b3;
	}
	 .btn-cadastrar{
    	display: inline-block;
  		padding: 10px 20px;
 		background-color: #007BFF;
  		color: white;
  		text-decoration: none;
  		border-radius: 5px;
    }
    .btn-cadastrar:hover {
  	background-color: #0056b3;
	}

    </style>

    <form method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br>

        <label for="idade">Idade:</label><br>
        <input type="text" id="idade" name="idade"><br>

        </label><br><br>
        <input type="submit" value="Cadastrar" class="btn-cadastrar">
        <a href="/atv/consultarTabela.php" id="btn-consulta" class="btn-consulta">Listar</a><br>
    </form>



<?php 

$servername = "localhost";
$nome = "root";
$senha = "";
$dbname = "atv1103";


$conn = new mysqli($servername, $nome, $senha, $dbname);

$con = mysqli_connect("localhost", "root","", "atv1103");

// Verifica a conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recebe os dados do formulário
  $nome = $_POST['nome'];
  $idade = $_POST['idade'];
}


// Recebe os dados do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];


// Insere os dados no banco de dados
$sql = "INSERT INTO cadastro (nome, idade) VALUES ('$nome', '$idade')";

if ($conn->query($sql) === TRUE) {
  echo "Novo registro criado com sucesso";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>

</body>
</html>


 