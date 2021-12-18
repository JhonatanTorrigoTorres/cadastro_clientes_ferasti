<?php
    $database = new mysqli("localhost", "root", "root", "cadastro_clientes");
    $result = $database->query("select * from clientes");
    while($cliente = $result->fetch_assoc()){
        $listaClientes .= '<tr>
            <td>'.$cliente['nome'].'</td>
            <td>'.$cliente['cpf'].'</td>
            <td>'.$cliente['celular'].'</td>
            <td>'.$cliente['email'].'</td>
            <td>'.$cliente['status'].'</td>
        </tr>';
    }
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
        <link rel="stylesheet" href="./css/clientes.css">
        <title>Clientes</title>
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
                    <a href="cadastrar.php"><b>+</b></a>
                </div>
                <table>
                    <tr class="coluna">
                        <td class="borda"><b>NOME COMPLETO</b></td>
                        <td><b>CPF</b></td>
                        <td><b>CELULAR</b></td>
                        <td><b>E-MAIL</b></td>
                        <td><b>STATUS</b></td>
                        <td class="borda_final"><b>AÇÃO</b></td>
                    </tr>
                    <tr class="conteudo">
                        <?php echo $listaClientes;?>
                        <td class="botoes"><a href="alterar.php">Ver</a><button>x</button></td>
                    </tr>
                </table>
            </div>
        </section>
    </body>
</html>