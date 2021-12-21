<?php
    include 'conexao.php';
    
    $database->query("update clientes set nome = '".$_POST['nome']."', nascimento = '".$_POST['nascimento']."',
    genero = '".$_POST['genero']."', cpf = '".$_POST['cpf']."', celular = '".$_POST['celular']."',
    email = '".$_POST['email']."', senha = '".$_POST['senha']."', status = '".$_POST['status']."'
    where cliente_id = ".$_POST['cliente_id']);

    header('location: clientes.php');
?>