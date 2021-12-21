<?php

    include 'conexao.php';
    
    if(strtolower($_POST['email']) == 'jhoatanttorres@alphacode.com.br' && $_POST['senha'] == '123456789'){
        $_SESSION['usuario_logado'] = 'email';
        header('location: clientes.php');

    } else {
        die('Login e senha invalidos');
    }
    
?>