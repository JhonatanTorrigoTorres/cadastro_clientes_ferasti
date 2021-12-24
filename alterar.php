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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.js"></script>
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
                            <input type="text" value="<?php echo $cliente['nome']; ?>" name="nome" class="disabled" >
                        </div>
                        <div>
                            <label>Data de nascimento</label>
                            <input type="text" value="<?php echo $cliente['nascimento']; ?>" name="nascimento" class="nascimento disabled">
                        </div>
                        <div>
                            <label>Gênero</label>
                            <select name="genero" class="disabled">
                                <option><?php echo $cliente['genero']; ?></option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                            </select>
                        </div>
                        <div>
                            <label>CPF</label>
                            <input type="text" value="<?php echo $cliente['cpf']; ?>" name="cpf" class="cpf disabled">
                        </div>
                    </section>
                    <section>
                        <div>
                            <label>Celular</label>
                            <input type="text" value="<?php echo $cliente['celular']; ?>" name="celular" class="celular disabled">
                        </div>
                        <div>
                            <label>E-mail</label>
                            <input type="email" value="<?php echo $cliente['email']; ?>" name="email" class="disabled">
                        </div>
                        <div>
                            <label>Senha</label>
                            <input type="password" value="<?php echo $cliente['senha']; ?>" name="senha" class="disabled">
                        </div>
                        <div>
                            <label>Status</label>
                            <select name="status" class="disabled">
                                <option><?php echo $cliente['status']; ?></option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                            </select>
                        </div>
                    </section>
                    <div class="salvar">
                        <div><input type="hidden" name="cliente_id" value="<?php echo $cliente['cliente_id']; ?>"></div>
                        <input type="submit" value="Salvar" id="salvar">
                        <button type="button" value="Alterar" id="alterar">Alterar</button>
                    </div>
                </form>
            </div>
        </section>
        <script>
        $('input, select').attr('disabled', true);
        $('#salvar').hide();

        $('#alterar').click(function(e) {
            e.preventDefault();
            $('input, select').removeAttr('disabled');
            $('input, select').removeClass('disabled');
            $('#alterar').hide();
            $('#salvar').show();
            // $('#status').prop('disabled', true);
            // $('#status').addClass('disabled');
        });
        $(document).ready(function() {
            $('.nascimento').mask('00/00/0000');
            $('.cpf').mask('000.000.000-00');
            $('.celular').mask('(00) 00000-0000');
        });
        </script>
    </body>
</html>