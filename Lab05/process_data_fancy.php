<!DOCTYPE html>

<html>

	<head>
		<title>Lab5 - Web Forms</title>
		<meta charset="utf-8"/>

		<link rel="stylesheet" type="text/css" href="./css/estilos.css" />
	</head>

	<body>

		<header>
			<h1>Laboratorio 5 - Web Forms</h1>
		</header>

		<nav>

		</nav>

		<div id="content">

			<div class="wrapper">

				<header>
					<h1>Los datos enviados fueron:</h1>
				</header>

				<section class="wrapper">

					<strong>Números: </strong><?php echo $_POST["numbers"]; ?><br/><br/>
					<strong>Orden: </strong><?php echo $_POST["sort_order"]; ?><br/><br/>
					<strong>Tipo de números: </strong><?php echo $_POST["number_type"]; ?><br/><br/>
					<strong>Estadísticas: </strong>
					<ul>
						<?php foreach($_POST["stats"] as $name => $value){ ?>
							<li><?php echo $name; ?></li>
						<?php } ?>
					</ul>

					<strong>Color de fondo: </strong><?php echo $_POST["background_color"]; ?><br/><br/>

				</section>

			</div>

		</div>

		<footer>
			Erik Sánchez Maldonado<br/>
			Desarrollo de Aplicaciones Web<br/>
			Agosto - Diciembre 2016
		</footer>

	</body>


</html>
