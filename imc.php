<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="assets/css/imc.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/assets/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<title>Calculadora de IMC</title>

</head>

<body>

	<main id="container">
		<section id="img">
			<img src="imagens\imagens_imc\Personal_fundo.png" alt="">
		</section>

		<section id="calculator">
			<form id="form">
				<h1 id="title">
					Calculadora - IMC
				</h1>


				<div class="input-box">
					<label for="weight">
						Peso em Kg
					</label>
					<div class="input-field">
						<i class="fa-solid fa-weight-hanging"></i>
						<input type="number" name="" id="weight" required>
						<span>
							Kg
						</span>
					</div>
				</div>

				<div class="input-box">
					<label for="height">
						Altura em Metros
					</label>
					<div class="input-field">
						<i class="fa-solid fa-ruler"></i>
						<input type="number" name="" id="height" required>
						<span>
							M
						</span>
					</div>
				</div>

				<button id="calculate">
					Calcular
				</button>

			</form>

			<div id="infos">
				<div id="result">
					<div id="bmi">
						<span id="value"></span>
						<span>Seu IMC</span>
						
					</div>
					<div id="description">
						<span></span>
					</div>
					
				</div>
				<div id="more_info">
					<a href="https://mundoeducacao.uol.com.br/saude-bem-estar/imc.htm">
						Mais Informações sobre o IMC
						<i class="fa-regular fa-arrow-up-right-from-square"></i>
					</a>
				</div>
			</div>

		</section>
	</main>

</body>
</html>