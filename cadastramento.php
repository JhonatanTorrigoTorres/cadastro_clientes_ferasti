<?php
    $database = new mysqli("localhost", "root", "root", "cadastro_clientes");
    $database->query("insert into clientes
    (`nome`,`nascimento`,`genero`,`cpf`,`celular`,`email`,`senha`,`status`)
    values ('".$_POST['nome']."','".$_POST['nascimento']."','".$_POST['genero']."','".$_POST['cpf']."',
    '".$_POST['celular']."','".$_POST['email']."','".$_POST['senha']."','".$_POST['status']."')");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./css/cadastramento.css">
        <title>Cadastrar</title>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="./img/logo_horizonta_fundo_branco.png" alt="logotipo">
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b>Jhonatan Torres</b>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <a href="">Sair</a>
                </div>
            </div>
        </header>
        <section>
            <div class="menu_lateral">
                <img src="./img/usuario.png" alt="icone">
                <p><b>Clientes</b></p>
            </div>
            <div class="principal">
                <div class="topo_tabela">
                    <p><b>Clientes</b></p>
                    <a href="clientes.php"><img src="./img/seta_email.svg" alt="icone"></a>
                </div>
                <table>
                    <tr class="coluna">
                        <td><b>CADASTRAR</b></td>
                    </tr>
                </table>
                <div class="conteudo">
                    <h2>Cadastramento realizado com sucesso! <br>Retorne clicando na seta à direita.</h2>
                </div>
            </div>
        </section>
    </body>
</html>