<?php

    include 'conexao.php';
    
    $database->query("delete from clientes where cliente_id = ".$_GET['cliente_id']);

    header('location: clientes.php');
?>