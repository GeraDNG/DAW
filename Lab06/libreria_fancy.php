<!DOCTYPE html>

<html>
	<head>
		<title>Lab6 - PHP</title>
		<meta charset="utf-8"/>

    <style media="screen">
      #content .wrapper{
        background-color: <?php echo $_POST["background_color"]; ?>;
				<?php if($_POST["background_color"] == "#ffffff") echo "color: black"; else echo "color: white;"?>;
      }
    </style>

		<link rel="stylesheet" type="text/css" href="./css/estilos.css" />
	</head>

	<body>
		<?php include "functions.php" ?>
		<header>
			<h1>Laboratorio 6 - PHP</h1>
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

					<strong>Los números ordenados son: </strong>
						<?php
							for ($i=0; $i < count($numerosOrdenados); $i++) {
								echo $numerosOrdenados[$i];
								if($i+1 < count($numerosOrdenados))
									echo ",";
							}
						?><br/><br/>

					<strong>Se buscan los números </strong>
						<?php
							if($_POST["number_type"]) {
								echo "<strong>pares: </strong>";
								for ($j=0; $j < count($pairNumbers); $j++) {
									echo $pairNumbers[$j];
									if($j+1 < count($pairNumbers))
										echo ",";
								}
							}
							else {
								echo "<strong>impares: </strong>";
								for ($k=0; $k < count($oddNumbers); $k++) {
									echo $oddNumbers[$k];
									if($k+1 < count($oddNumbers))
										echo ",";
								}
							}
						?><br/><br/>

					<strong>Se solicitan las siguientes estadísticas: </strong>
					<ul>
						<?php foreach($_POST["stats"] as $name => $value){ ?>
							<li>
								<?php
								 	if($name == "Average") echo $name . ": ". $average;
									elseif ($name == "median") echo $name . ": " . $median;
									elseif ($name == "Fashion") echo $name . ": " . $fashion;
								?>
							</li>
						<?php } ?>
					</ul>

					<strong>Color: </strong> <?php	echo $_POST["background_color"]; ?><br/><br/>

				</section>
			</div>
		</div>
		<footer>
			Gerardo Daniel Naranjo Gallegos, A01209499<br/>
			Desarrollo de Aplicaciones Web<br/>
			Agosto - Diciembre 2019
		</footer>
	</body>
</html>
