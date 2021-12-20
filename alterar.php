<?php
    $database = new mysqli("localhost", "root", "root", "cadastro_clientes");
    $result = $database->query("select * from clientes where id = ".$_GET['ciente_id']);
    $cliente = $result->fetch_assoc();
    print_r($resultado)
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
        <link rel="stylesheet" href="./css/alterar.css">
        <title>Alterar</title>
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
                        <td><b>VER</b></td>
                    </tr>
                </table>
                <form action="alteracao.php" method="post">
                    <section>
                        <div>
                            <label>Nome completo</label>
                            <input type="text" name="nome">
                        </div>
                        <div>
                            <label>Data de nascimento</label>
                            <input type="text" name="nascimento">
                        </div>
                        <div>
                            <label>Gênero</label>
                            <select name="genero">
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                            </select>
                        </div>
                        <div>
                            <label>CPF</label>
                            <input type="text" name="cpf">
                        </div>
                    </section>
                    <section>
                        <div>
                            <label>Celular</label>
                            <input type="text" name="celular">
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
                            <select name="status" id="status">
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                            </select>
                        </div>
                    </section>
                    <div class="salvar">
                        <div></div>
                        <input type="submit" value="Salvar" id="salvar">
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>