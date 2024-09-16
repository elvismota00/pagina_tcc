<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/logo_acad2.png">
</head>
<body>

    <div class="container">
        <div class="box">
            <div class="cad">
                <h2>CADASTRO</h2>
                <p>Cadastre-se para utilizar a melhor ferramenta de monitoramento de peso.</p>
            </div>

            <hr>

      
            <div class="formulario">
             
                    <form action="register.php" method="POST" class="login">


                         <span class="userw">Email</span>
                    <div class="input100">
                        <input class="input100" type="email" name="email" placeholder="Email" required>
                    </div>

                    <span class="userw">Username</span>
                    <div class="input100">
                        <input class="input100" type="text" name="username" placeholder="Usuário" required>
                    </div>

                    <span class="userw">Password</span>
                    <div class="input100">
                        <input class="input100" type="password" name="password" placeholder="Senha" required>
                    </div>

                    <div class="btn">
                            <button type="submit" class="form-btn2">Cadastrar</button>
                        </div>



                    </form>
                <hr>
                <p class="txt">Já tem uma conta? <a href="index.php" class="txt">Faça login</a></p>
            </div>



           


















        </div>

        </div>
    </div>








    <footer class="foot">
        <p>Dev By Elvis Oliveira</p>
        <p>Dev By Lucas Moreira</p>
    </footer>

</body>
</html>