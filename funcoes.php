<?php
     
     function verificaSessao(){
         if($_SESSION['usuario_logado'] == ''){
            header('location:login.php');
         }
     }

?>