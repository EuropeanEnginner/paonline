<?php

$nome = $_POST["nome"];
$localidade = filter_input(INPUT_POST, "localidade", FILTER_VALIDATE_BOOL);
$padeiramap = $_POST["GoogleMaps"];

$host = "localhost";
$dbname = "paonline";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
 	die("Aconteceu um erro! " mysqli_connect_errno());
 } 

echo "A conexao funciono! Pronto o nosso equipo verificara o conteudo que tu emviaste e sera adicionado a web. Esto pode tardar um tempo, entre umas houras o ums dias.";

$sql = "INSERT INTO padeiras (nome, localidade, GoogleMaps)
        VALUES (?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
	die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sis",
                       $nome,
                       $localidade,
                       $padeiramap);

mysqli_stmt_execute($stmt);

echo "Dados salvados.";

?>