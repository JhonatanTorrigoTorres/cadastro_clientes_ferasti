<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/login.css">
        <script src="./js/login.js"></script>
        <title>Tela de Login</title>
    </head>
    <body>
        <main>
            <img src="./img/logo_horizonta_fundo_branco.png" alt="imagem">
            <p><b>Bem-vindo</b></p>
            <form action="autenticar.php" method="post">
                <label>E-mail</label>
                <input type="email" name="email" id="email" placeholder="Insira seu login" />
                <label>Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Insira sua senha" />
                <input type="submit" value="Login" id="login" onclick>
            </form>
        </main>
    </body>
</html>