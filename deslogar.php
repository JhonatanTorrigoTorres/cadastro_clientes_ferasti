<?php

    include 'conexao.php';
    
    unset($_SESSION['usuario_logado']);

    header('location:login.html');
    
    
?>