<?php

include('../conexaoDb/conexao.php');

$usr = mysqli_real_escape_string($conexao, trim($_POST['username']));

$sql = "INSERT INTO user(username) VALUES ('$username')";

$conexao->close();

header('Location: perfil.php');
exit;

?>