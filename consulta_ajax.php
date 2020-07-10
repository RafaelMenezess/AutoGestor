<?php
$conectar = new PDO("mysql:host=localhost; dbname=autogestor", "root","");

$sql = $conectar->prepare("SELECT * FROM clientes WHERE 
                            nome LIKE '%' '".$_POST['busca']."' '%' or 
                            email LIKE '%' '".$_POST['busca']."' '%' or
                            categoria LIKE '%' '".$_POST['busca']."' '%'");

$sql->execute();
$fetchBusca = $sql->fetchAll();
$contaBusca = count($fetchBusca);

if($contaBusca <=0){
    echo ("Cliente não encontrado!");
};

foreach($fetchBusca as $resultados){
    echo ''.$resultados['nome'].' - '.$resultados['email'].' - '.$resultados['categoria'].'<br>';
}