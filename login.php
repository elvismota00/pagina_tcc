<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/imagens/logo_acad2.png">
</head>
<body class="login">
    <div class="boxout">
        <div class="box_logo">
            <div class="logo_preto">
                <a href="index.php">
                    <img src="assets/imagens/logo_acad1nica_preto-transparente.png" alt="logo_preto">
                </a>
            </div>

            <h2>O Acad1nica auxilia você a monitorar seu progresso durante suas sessões de treino na academia todos os dias.</h2>
        </div>

        <div class="boxin">

            <h1>LOGIN</h1>

            <form class="login">
                
                <div class="log">
                    <span class="userw">Username</span>
                    <div class="input100">
                        <input class="input" type="email" name="email" placeholder="Usuário" required>
                    </div>

                    <span class="userw">Password</span>
                    <div class="input100">
                        <input class="input" type="password" name="pass" placeholder="Senha" required>
                    </div>
                </div>

				<div class="text">
					<a class="txt" href="#">
						Esqueceu a senha?
					</a>
                </div>
					
				<div class="btn">
					<button class="form-btn">
						Entrar
					</button>
				</div>

                <hr>
            </form>
            <div class="btn">
                <a href="cadastro.php">
                    <button class="form-btn2">
                        Crie uma conta
                    </button>
                </a>
            </div>
        </div>
    </div>

    <footer>
        <div class="box_footer">
            <div class="logo2">
                <a href="index.php">
                    <img src="assets/imagens/logo_acad1nica_preto-transparente.png" alt="logo site">
                </a>
            </div>

            <div class="opcoes2">
                <div class="insta">
                    <a href="">
                        <img src="icones/iconizer-instagram.svg" alt="">
                    </a>
                </div>
                <div class="insta">
                    <a href="">
                        <img src="icones/iconizer-facebook.svg" alt="">
                    </a>
                </div>
                <div class="insta">
                    <a href="">
                        <img src="icones/iconizer-twitter-alt.svg" alt="">
                    </a>
                </div>
            </div>

            <div class="background">
                <h5>Background image designed by <a href="https://br.freepik.com/" target=”freepik”>Freepik</a>.</h5>
            </div>
        </div>

        <hr>

        <h5>Coded by <a href="sobre.php">Elvis Oliveira</a> & <a href="sobre.php">Lucas Moreira</a>.</h5>
    </footer>
</body>
</html>