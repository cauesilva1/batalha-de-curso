<?php

$usuario = 'Walker';
$senha = 'Venula111';
$database = 'login';
$host = 'localhost';


$conexao = new mysqli($host, $usuario, $senha, $database);
if($mysqli->error){
    die("Falha ao conectar ao banco de dados!: ". $mysqli->error);
}




?>