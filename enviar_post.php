<?php

$iniciar = curl_init('http://localhost/autogestor/processar_cliente.php');

curl_setopt($iniciar, CURLOPT_RETURNTRANSFER, true);

$dados = array(
    'nome' => 'Rafael',
    'email' => 'rafa.rcm@hotmail.com',
    'categoria' => 'iniciante',
);

curl_setopt($iniciar, CURLOPT_POST, true);

curl_setopt($iniciar, CURLOPT_POSTFIELDS, $dados);

curl_exec($iniciar);

curl_close($iniciar);

echo "Cliente adicionado com sucesso!";