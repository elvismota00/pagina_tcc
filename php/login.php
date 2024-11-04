<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/logo_acad2.png">
</head>
<body class="login">


    <div class="boxout">
        <div class="box_logo">
            <div class="logo_preto">
                <a href="index.php">
                    <img src="imagens/logo_acad1nica_preto-transparente.png" alt="logo_preto">
                </a>
            </div>

            <h2>O Acad1nica auxilia você a monitorar seu progresso durante suas sessões de treino na academia todos os dias.</h2>
        </div>

        
        <div class="boxin">
            <h1>Login</h1>
            <form action="logar.php" method="POST" class="login">
                <input type="text" class="input" name="username" placeholder="Usuário" required>
                <input type="password" class="input" name="password" placeholder="Senha" required>
                <div class="btn">
                    <button type="submit" class="form-btn">Entrar</button>
                </div>
            </form>
            <hr>
            <p class="txt">Ainda não tem uma conta? <a href="cadastro.php" class="txt">Cadastre-se</a></p>
        </div>
    </div>
    

    <footer class="foot">
        <p>Dev By Elvis Oliveira</p>
        <p>Dev By Lucas Moreira</p>
    </footer>
</body>
</html>