<?php

    $database = new mysqli("localhost", "root", "root", "cadastro_clientes");
    
    $database->query("delete from clientes where cliente_id = ".$_GET['cliente_id']);

    header('location: clientes.php');
?>