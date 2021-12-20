<?php
    $database = new mysqli("localhost", "root", "root", "cadastro_clientes");
    $database->query("insert into clientes
    (`nome`,`nascimento`,`genero`,`cpf`,`celular`,`email`,`senha`,`status`)
    values ('".$_POST['nome']."','".$_POST['nascimento']."','".$_POST['genero']."','".$_POST['cpf']."',
    '".$_POST['celular']."','".$_POST['email']."','".$_POST['senha']."','".$_POST['status']."')");

    


?>
ok