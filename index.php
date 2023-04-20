<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Variables en PHP</title>
	<link rel="stylesheet" href="style.css">
	<meta name="description"
		content="Programa que permite realizar operaciones matemáticas básicas como multiplicación, cuadrado de un número, cálculo de distancia, cálculo de edad, porcentajes, área de un cuadrado, promedio de números, cálculo de valor a pagar con IVA y descuentos, cálculo de la hipotenusa con el teorema de Pitágoras, conversión de tiempo y distancia. Ejercicios en PHP.">
	<meta name="keywords"
		content="PHP, ejercicios, multiplicación, cuadrado, distancia, edad, porcentaje, área, promedio, valor a pagar, IVA, descuentos, hipotenusa, teorema de Pitágoras, tiempo, distancia, conversión.">
		<meta name="author" content="Diego Navarro">
</head>

<body>
	<header>
		<ul id="nav">
			<li><a href="index.php?num=1">Variable 1</a></li>
			<li><a href="index.php?num=2">Variable 2</a></li>
			<li><a href="index.php?num=3">Variable 3</a></li>
			<li><a href="index.php?num=4">Variable 4</a></li>
			<li><a href="index.php?num=5">Variable 5</a></li>
			<li><a href="index.php?num=6">Variable 6</a></li>
			<li><a href="index.php?num=7">Variable 7</a></li>
			<li><a href="index.php?num=8">Variable 8</a></li>
			<li><a href="index.php?num=9">Variable 9</a></li>
			<li><a href="index.php?num=10">Variable 10</a></li>
			<li><a href="index.php?num=11">Variable 11</a></li>
			<li><a href="index.php?num=12">Variable 12</a></li>
			<li><a href="index.php?num=13">Variable 13</a></li>
			<li><a href="index.php?num=14">Variable 14</a></li>
			<li><a href="https://davidbcaro.notion.site/Variables-e37026ab415742129bd59ba8d8844d90" target="_blank">Listado de las Variables</a></li>
		</ul>
	</header>
	<div>
		<?php
		// Obtener el valor del parámetro 'num' de la URL
		if (isset($_GET['num'])) {
			$num = $_GET['num'];
		} else {
			$num = 1;
		}

		// Mostrar el contenido correspondiente a la pestaña seleccionada
		switch ($num) {
			case 1:
				echo '<div id="tab" class="tabcontent">';
				echo '<h2>Multiplicación de tres números</h2>';
				echo '<form method="post">';
				echo '<label for="num1-1">Primer número:</label>';
				echo '<input type="number" id="num1-1" name="num1-1" required>';

				echo '<label for="num2-1">Segundo número:</label>';
				echo '<input type="number" id="num2-1" name="num2-1" required>';

				echo '<label for="num3-1">Tercer número:</label>';
				echo '<input type="number" id="num3-1" name="num3-1" required>';

				echo '<input type="submit" value="Calcular">';
				echo '</form>';
				echo '</div>';

				// Comprobamos si se ha enviado el formulario
				if (isset($_POST['num1-1']) && isset($_POST['num2-1']) && isset($_POST['num3-1'])) {
					$num1 = $_POST['num1-1'];
					$num2 = $_POST['num2-1'];
					$num3 = $_POST['num3-1'];
					$resultado = $num1 * $num2 * $num3;

					// Mostramos el resultado
					echo "<div class='resultado'>";
					echo "<h2>El resultado de la multiplicación es:</h2>";
					echo "<p>$num1 x $num2 x $num3 = $resultado</p>";
					echo "</div>";
				}
				break;
			case 2:
				echo '<div id="tab" class="tabcontent">';
				echo '<h2>Cuadrado de un número</h2>';
				echo '<form method="post">';
				echo '<label for="num1-2">Ingrese el número:</label>';
				echo '<input type="number" id="num1-2" name="num1-2" required>';
				echo '<input type="submit" value="Calcular">';
				echo '</form>';
				echo '</div>';

				// Comprobamos si se ha enviado el formulario
				if (isset($_POST['num1-2'])) {
					$num1 = $_POST['num1-2'];
					$resultado = pow(2, $num1);

					// Mostramos el resultado
					echo "<div class='resultado'>";
					echo "<h2>El cuadrado de $num1 es:</h2>";
					echo "<p>$num1 x $num1 = $resultado</p>";
					echo "</div>";
				}
				break;
			case 3:
				echo '<div id="tab" class="tabcontent">';
				echo '<h2>Distancia recorrida en un movimiento rectilíneo</h2>';
				echo '<form method="post">';
				echo '<label for="num1-3">Velocidad en kilómetros por hora (Km/h):</label>';
				echo '<input type="number" id="num1-3" name="num1-3" required>';

				echo '<label for="num2-3">Tiempo en horas:</label>';
				echo '<input type="number" id="num2-3" name="num2-3" required>';

				echo '<input type="submit" value="Calcular">';
				echo '</form>';
				echo '</div>';

				// Comprobamos si se ha enviado el formulario
				if (isset($_POST['num1-3']) && isset($_POST['num2-3'])) {
					$velocidad = $_POST['num1-3'];
					$tiempo = $_POST['num2-3'];
					$distancia = $velocidad * $tiempo;

					// Mostramos el resultado
					echo "<div class='resultado'>";
					echo "<h2>La distancia recorrida es:</h2>";
					echo "<p>$velocidad Km/h x $tiempo h = $distancia Km</p>";
					echo "</div>";
				}
				break;
			case 4:
				echo '<div id="tab" class="tabcontent">';
				echo '<h2>Calcular la edad actual</h2>';
				echo '<form method="post">';
				echo '<label for="num1-4">Ingrese su año de nacimiento:</label>';
				echo '<input type="number" id="num1-4" name="num1-4" required>';
				echo '<input type="submit" value="Calcular">';
				echo '</form>';
				echo '</div>';

				// Comprobamos si se ha enviado el formulario
				if (isset($_POST['num1-4'])) {
					$anoactual = date("Y");
					$edad = $_POST['num1-4'];
					$edadActual = $anoactual - $edad;

					// Mostramos el resultado
					echo "<div class='resultado'>";
					echo "<h2>La edad de la persona es:</h2>";
					echo "<p>$anoactual - $edad = $edadActual</p>";
					echo "</div>";
				}
				break;
			case 5:
				echo '<div id="tab" class="tabcontent">';
				echo '<h2>Calcular el 20% del número</h2>';
				echo '<form method="post">';
				echo '<label for="num1-5">Ingrese el número:</label>';
				echo '<input type="number" id="num1-5" name="num1-5" required>';
				echo '<input type="submit" value="Calcular">';
				echo '</form>';
				echo '</div>';

				// Comprobamos si se ha enviado el formulario
				if (isset($_POST['num1-5'])) {
					$num = $_POST['num1-5'];
					$porcentaje = $num * 0.20;

					// Mostramos el resultado
					echo "<div class='resultado'>";
					echo "<h2>El 20% de $num es:</h2>";
					echo "<p>$num * 0.20 = $porcentaje</p>";
					echo "</div>";
				}
				break;
			case 6:
				echo '<div id="tab" class="tabcontent">';
				echo '<h2>Calcular el 30%, 60% y el 90% del número</h2>';
				echo '<form method="post">';
				echo '<label for="num1-6">Ingrese el número:</label>';
				echo '<input type="number" id="num1-6" name="num1-6" required>';
				echo '<input type="submit" value="Calcular">';
				echo '</form>';
				echo '</div>';

				// Comprobamos si se ha enviado el formulario
				if (isset($_POST['num1-6'])) {
					$num = $_POST['num1-6'];
					$porcentaje30 = $num * 0.30;
					$porcentaje60 = $num * 0.60;
					$porcentaje90 = $num * 0.90;

					// Mostramos el resultado
					echo "<div class='resultado'>";
					echo "<h2>Los porcentajes de $num son:</h2>";
					echo "<p>$num * 30% = $porcentaje30</p>";
					echo "<p>$num * 60% = $porcentaje60</p>";
					echo "<p>$num * 90% = $porcentaje90</p>";
					echo "</div>";
				}
				break;
			case 7:
				echo '<div id="tab" class="tabcontent">';
				echo '<h2>Calcular el área de un cuadrado</h2>';
				echo '<form method="post">';
				echo '<label for="num1-7">Ingrese la longitud de un lado del cuadrado:</label>';
				echo '<input type="number" id="num1-7" name="num1-7" required>';
				echo '<input type="submit" value="Calcular">';
				echo '</form>';
				echo '</div>';

				// Comprobamos si se ha enviado el formulario
				if (isset($_POST['num1-7'])) {
					$lado = $_POST['num1-7'];
					$area = $lado * $lado;

					// Mostramos el resultado
					echo "<div class='resultado'>";
					echo "<h2>El área del cuadrado es:</h2>";
					echo "<p>$lado * $lado = $area</p>";
					echo "</div>";
				}
				break;
			case 8:
				echo '<div id="tab" class="tabcontent">';
				echo '<h2>Calcular el promedio de cinco números</h2>';
				echo '<form method="post">';
				echo '<label for="num1-8">Primer número:</label>';
				echo '<input type="number" id="num1-8" name="num1-8" required>';

				echo '<label for="num2-8">Segundo número:</label>';
				echo '<input type="number" id="num2-8" name="num2-8" required>';

				echo '<label for="num3-8">Tercer número:</label>';
				echo '<input type="number" id="num3-8" name="num3-8" required>';

				echo '<label for="num4-8">Cuarto número:</label>';
				echo '<input type="number" id="num4-8" name="num4-8" required>';

				echo '<label for="num5-8">Quinto número:</label>';
				echo '<input type="number" id="num5-8" name="num5-8" required>';

				echo '<input type="submit" value="Calcular">';
				echo '</form>';
				echo '</div>';

				// Comprobamos si se ha enviado el formulario
				if (isset($_POST['num1-8']) && isset($_POST['num2-8']) && isset($_POST['num3-8']) && isset($_POST['num4-8']) && isset($_POST['num5-8'])) {
					$num1 = $_POST['num1-8'];
					$num2 = $_POST['num2-8'];
					$num3 = $_POST['num3-8'];
					$num4 = $_POST['num4-8'];
					$num5 = $_POST['num5-8'];
					$promedio = ($num1 + $num2 + $num3 + $num4 + $num5) / 5;

					// Mostramos el resultado
					echo "<div class='resultado'>";
					echo "<h2>El promedio de los números esx:</h2>";
					echo "<p>($num1 + $num2 + $num3 + $num4 + $num5) / 5 = $promedio</p>";
					echo "</div>";
				}
				break;
			case 9:
				echo '<div id="tab" class="tabcontent">';
				echo '<h2>Calcular valor de la compra</h2>';
				echo '<form method="post">';
				echo '<label for="num1-9">Ingrese el valor unitario del producto:</label>';
				echo '<input type="number" id="num1-9" name="num1-9" required>';

				echo '<label for="num2-9">Ingrese la cantidad de productos comprados:</label>';
				echo '<input type="number" id="num2-9" name="num2-9" required>';

				echo '<input type="submit" value="Calcular">';
				echo '</form>';
				echo '</div>';

				// Comprobamos si se ha enviado el formulario
				if (isset($_POST['num1-9']) && isset($_POST['num2-9'])) {
					$valorUnidad = $_POST['num1-9'];
					$cantidad = $_POST['num2-9'];
					$subtotal = $valorUnidad * $cantidad;
					$iva = $subtotal * 0.16;
					$total = $subtotal + $iva;

					// Mostramos el resultado
					echo "<div class='resultado'>";
					echo "<h2>El valor total de la compra es:</h2>";
					echo "<p>Valor unidad: $$valorUnidad</p>";
					echo "<p>Cantidad: $cantidad</p>";
					echo "<p>Subtotal: $$subtotal</p>";
					echo "<p>Iva: $$iva</p>";
					echo "<p>Total: $$total</p>";
					echo "</div>";
				}
				break;
			case 10:
				echo '<div id="tab" class="tabcontent">';
				echo '<h2>Calcular valor de la compra</h2>';
				echo '<form method="post">';
				echo '<label for="num1-10">Ingrese el salario diario del empleado:</label>';
				echo '<input type="number" id="num1-10" name="num1-10" required>';

				echo '<label for="num2-10">Ingrese el número de días trabajados:</label>';
				echo '<input type="number" id="num2-10" name="num2-10" required>';

				echo '<input type="submit" value="Calcular">';
				echo '</form>';
				echo '</div>';

				// Comprobamos si se ha enviado el formulario
				if (isset($_POST['num1-10']) && isset($_POST['num2-10'])) {
					$salarioDia = $_POST['num1-10'];
					$diasTrabajo = $_POST['num2-10'];
					$salarioPorDias = $salarioDia * $diasTrabajo;
					$pension = $salarioPorDias * 0.10;
					$salud = $salarioPorDias * 0.15;
					$totalSalario = $salarioPorDias - $pension - $salud;

					// Mostramos el resultado
					echo "<div class='resultado'>";
					echo "<h2>El salario a pagar al empleado es:</h2>";
					echo "<p>Salario por día: $$salarioDia</p>";
					echo "<p>Dias trabajados: $diasTrabajo</p>";
					echo "<p>Pensión: $$pension</p>";
					echo "<p>Salud: $$salud</p>";
					echo "<p>Salario total del empleado: $$totalSalario</p>";
					echo "</div>";
				}
				break;
			case 11:
				echo '<div id="tab" class="tabcontent">';
				echo '<h2>Calcular la raíz cuadrada del número sin función</h2>';
				echo '<form method="post">';
				echo '<label for="num1-11">Ingrese el número:</label>';
				echo '<input type="number" id="num1-11" name="num1-11" required>';
				echo '<input type="submit" value="Calcular">';
				echo '</form>';
				echo '</div>';

				// Comprobamos si se ha enviado el formulario
				if (isset($_POST['num1-11'])) {
					$num = $_POST['num1-11'];
					$x = $num; // valor inicial de x
					$error = 1e-10; // criterio de convergencia
					$iteraciones = 0; // contador de iteraciones
		
					// iteración de Newton-Raphson
					while (abs($x * $x - $num) > $error) {
						$y = $num / $x;
						$x = ($x + $y) / 2;
						$iteraciones++;
					}

					// Mostramos el resultado
					echo "<div class='resultado'>";
					echo "<h2>La raíz cuadrada de $num es:</h2>";
					echo "<p>$x (en $iteraciones iteraciones)</p>";
					echo "</div>";
				}
				break;
			case 12:
				echo '<div id="tab" class="tabcontent">';
				echo '<h2>Calcular la hipotenusa con el Teorema de Pitágoras</h2>';
				echo '<form method="post">';
				echo '<label for="num1-12">Ingrese el valor del cateto a:</label>';
				echo '<input type="number" id="num1-12" name="num1-12" required>';

				echo '<label for="num2-12">Ingrese el valor del cateto b:</label>';
				echo '<input type="number" id="num2-12" name="num2-12" required>';

				echo '<input type="submit" value="Calcular">';
				echo '</form>';
				echo '</div>';

				// Comprobamos si se ha enviado el formulario
				if (isset($_POST['num1-12']) && isset($_POST['num2-12'])) {
					$a = $_POST['num1-12'];
					$b = $_POST['num2-12'];
					$c = sqrt(pow($a, 2) + pow($b, 2));

					// Mostramos el resultado
					echo "<div class='resultado'>";
					echo "<h2>El valor de la hipotenusa es:</h2>";
					echo "<p> Raíz cuadrada de ($a^2 + $b^2): $c</p>";
					echo "</div>";
				}
				break;
			case 13:
				echo '<div id="tab" class="tabcontent">';
				echo '<h2>Conversión de segundos a horas y minutos</h2>';
				echo '<form method="post">';
				echo '<label for="num1-13">Ingrese el tiempo en segundos:</label>';
				echo '<input type="number" id="num1-13" name="num1-13" required>';
				echo '<input type="submit" value="Calcular">';
				echo '</form>';
				echo '</div>';

				// Comprobamos si se ha enviado el formulario
				if (isset($_POST['num1-13'])) {
					$segundos = $_POST['num1-13'];
					$horas = floor($segundos / 3600);
					$minutos = floor(($minutos / 60) % 60);

					// Mostramos el resultado
					echo "<div class='resultado'>";
					echo "<h2>Los $segundos segundos equivalen a:</h2>";
					echo "<p>$horas horas y $minutos minutos</p>";
					echo "</div>";
				}
				break;
			case 14:
				echo '<div id="tab" class="tabcontent">';
				echo '<h2>Conversión de metros a km, cm y mm</h2>';
				echo '<form method="post">';
				echo '<label for="num1-14">Ingrese la distancia en metros:</label>';
				echo '<input type="number" id="num1-14" name="num1-14" required>';
				echo '<input type="submit" value="Calcular">';
				echo '</form>';
				echo '</div>';

				// Comprobamos si se ha enviado el formulario
				if (isset($_POST['num1-14'])) {
					$distancia = $_POST['num1-14'];
					$km = $distancia / 1000;
					$cm = $distancia * 100;
					$mm = $distancia * 1000;

					// Mostramos el resultado
					echo "<div class='resultado'>";
					echo "<h2>Los $distancia metros equivalen a:</h2>";
					echo "<p>$km km, $cm cm y $mm mm</p>";
					echo "</div>";
				}
				break;
			default:
				echo "Pestaña no válida";
				break;
		}
		?>
	</div>
</body>

</html>