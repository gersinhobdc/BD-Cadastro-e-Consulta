<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>

    <form method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required minlength="5"><br>

        <label for="idade">Idade:</label><br>
        <input type="text" id="idade" name="idade" required minlength="2"><br>

        </label><br><br>
        <input type="submit" value="Cadastrar" class="btn-cadastrar">
        <a href="/BD-Cadastro-e-Consulta/consultarTabela.php" id="btn-consulta" class="btn-consulta">Listar</a><br><br><br>
    </form>



<?php 

$servername = "localhost";
$nome = "root";
$senha = "";
$dbname = "atv";


$conn = new mysqli($servername, $nome, $senha, $dbname);

$con = mysqli_connect("localhost", "root","", "atv");

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


 