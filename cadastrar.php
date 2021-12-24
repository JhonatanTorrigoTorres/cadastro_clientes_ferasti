<?php
include 'conexao.php';
include 'funcoes.php';

verificaSessao();

if (
    $_POST['nome'] != "" && $_POST['nascimento'] != "" && $_POST['genero'] != "" && $_POST['cpf'] != ""
    && $_POST['celular'] != "" && $_POST['email'] != "" && $_POST['senha'] != "" && $_POST['status'] != ""
) {
    $database->query("insert into clientes
        (`nome`,`nascimento`,`genero`,`cpf`,`celular`,`email`,`senha`,`status`)
        values ('" . $_POST['nome'] . "','" . $_POST['nascimento'] . "','" . $_POST['genero'] . "','" . $_POST['cpf'] . "',
        '" . $_POST['celular'] . "','" . $_POST['email'] . "','" . $_POST['senha'] . "','" . $_POST['status'] . "')");
    header('location: clientes.php');
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
        <script src="./js/cadastrar.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.js"></script>
        <link rel="stylesheet" href="./css/alterar.css">
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
                    <a href="deslogar.php">Sair</a>
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
                <form name="cadastrar" action="/cadastrar.php" method="post">
                    <section>
                        <div>
                            <label>Nome completo</label>
                            <input type="text" name="nome">
                        </div>
                        <div>
                            <label>Data de nascimento</label>
                            <input type="tel" name="nascimento" class="nascimento">

                        </div>
                        <div>
                            <label>Gênero</label>
                            <select name="genero" >
                                <option value="Selecione">Selecione</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                            </select>
                        </div>
                        <div>
                            <label>CPF</label>
                            <input type="text" name="cpf" class="cpf">
                        </div>
                    </section>
                    <section>
                        <div>
                            <label>Celular</label>
                            <input type="text" name="celular" class="celular">
                        </div>
                        <div>
                            <label>E-mail</label>
                            <input type="email" name="email">
                        </div>
                        <div>
                            <label>Senha</label>
                            <input type="password" name="senha">
                        </div>
                        <div>
                            <label>Status</label>
                            <select name="status" >
                                <option value="Selecione">Selecione</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                            </select>
                        </div>
                    </section>
                    <div class="salvar">
                        <div></div>
                        <input type="submit" value="Cadastrar" id="salvar" onclick="return validar()">
                    </div>
                </form>
            </div>
        </section>
        <script>
        $(document).ready(function() {
            $('.nascimento').mask('00/00/0000');
            $('.cpf').mask('000.000.000-00');
            $('.celular').mask('(00) 00000-0000');
        });
        </script>
    </body>

</html>