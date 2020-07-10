<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$categoria = $_POST['categoria'];

$result_cliente = "INSERT INTO clientes (nome, email, categoria) VALUES ('$nome', '$email', '$categoria')";
$resultado_cliente = mysqli_query($conectar, $result_cliente);