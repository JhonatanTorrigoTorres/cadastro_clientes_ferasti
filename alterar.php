<?php
    include 'conexao.php';
    include 'funcoes.php';

    verificaSessao();
    
    $result = $database->query("select * from clientes where cliente_id = ".$_GET['cliente_id']);
    $cliente = $result->fetch_assoc();
    
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
                        <td><b>VER</b></td>
                    </tr>
                </table>
                <form action="alteracao.php" method="post">
                    <section>
                        <div>
                            <label>Nome completo</label>
                            <input type="text" value="<?php echo $cliente['nome']; ?>" name="nome">
                        </div>
                        <div>
                            <label>Data de nascimento</label>
                            <input disabled type="text" value="<?php echo $cliente['nascimento']; ?>" name="nascimento">
                        </div>
                        <div>
                            <label>Gênero</label>
                            <input list="genero" value="<?php echo $cliente['genero']; ?>" name="genero">
                            <datalist id="genero">
                                <option value="Masculino">
                                <option value="Feminino">
                            </datalist>
                        </div>
                        <div>
                            <label>CPF</label>
                            <input disabled type="text" value="<?php echo $cliente['cpf']; ?>" name="cpf">
                        </div>
                    </section>
                    <section>
                        <div>
                            <label>Celular</label>
                            <input type="text" value="<?php echo $cliente['celular']; ?>" name="celular">
                        </div>
                        <div>
                            <label>E-mail</label>
                            <input type="email" value="<?php echo $cliente['email']; ?>" name="email">
                        </div>
                        <div>
                            <label>Senha</label>
                            <input type="password" value="<?php echo $cliente['senha']; ?>" name="senha">
                        </div>
                        <div>
                            <label>Status</label>
                            <input list="status" value="<?php echo $cliente['status']; ?>" name="status">
                            <datalist id="status">
                                <option value="Ativo">
                                <option value="Inativo">
                            </datalist>
                        </div>
                    </section>
                    <div class="salvar">
                        <div><input type="hidden" name="cliente_id" value="<?php echo $cliente['cliente_id']; ?>"></div>
                        <input type="submit" value="Salvar" id="salvar">
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>