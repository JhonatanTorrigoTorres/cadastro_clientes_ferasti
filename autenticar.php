<?php

    include 'conexao.php';
    
    if(strtolower($_POST['email']) == 'jhonatanttorres@alphacode.com.br' && $_POST['senha'] == '123456789'){
        $_SESSION['usuario_logado'] = 'email';
        header('location: clientes.php');
    } else{
        header('location: login.html');


    }
    

?>