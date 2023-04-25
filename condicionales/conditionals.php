<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales en PHP</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="description"
        content="Programa que permite realizar operaciones matemáticas básicas como multiplicación, condicionales. Ejercicios en PHP.">
    <meta name="keywords"
        content="PHP, ejercicios, multiplicación, cuadrado, distancia, edad, porcentaje, área, promedio, valor a pagar, IVA, descuentos, hipotenusa, teorema de Pitágoras, tiempo, distancia, conversión.">
    <meta name="author" content="Diego Navarro">
</head>

<body>
    <header>
        <ul id="nav">
            <li><a href="conditionals.php?num=1">Condicional 1</a></li>
            <li><a href="conditionals.php?num=2">Condicional 2</a></li>
            <li><a href="conditionals.php?num=3">Condicional 3</a></li>
            <li><a href="conditionals.php?num=4">Condicional 4</a></li>
            <li><a href="conditionals.php?num=5">Condicional 5</a></li>
            <li><a href="conditionals.php?num=6">Condicional 6</a></li>
            <li><a href="conditionals.php?num=7">Condicional 7</a></li>
            <li><a href="conditionals.php?num=8">Condicional 8</a></li>
            <li><a href="conditionals.php?num=9">Condicional 9</a></li>
            <li><a href="conditionals.php?num=10">Condicional 10</a></li>
            <li><a href="conditionals.php?num=11">Condicional 11</a></li>
            <li><a href="conditionals.php?num=12">Condicional 12</a></li>
            <li><a href="conditionals.php?num=13">Condicional 13</a></li>
            <li><a href="conditionals.php?num=14">Condicional 14</a></li>
            <li><a href="index.php?num=1">Variables</a></li>
            <li><a href="https://davidbcaro.notion.site/Condicional-a6f319a8665d422e9e9b55c255147f13"
                    target="_blank">Listado de las condicionales</a></li>
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
                echo '
                <div id="tab" class="tabcontent"></div>
                    <h2>Calcular si un número es par, impar o es cero.</h2>
                    <form method="post">
                        <label for="num">Ingrese el número:</label>
                        <input type="number" id="num" name="num" required>

                        <input type="submit" value="Calcular">
                    </form>
                </div>';

                // Comprobamos si se ha enviado el formulario
                if (isset($_POST['num'])) {
                    $num = $_POST['num'];

                    if ($num == 0) {
                        $resp = "$num = Cero";
                    } elseif ($num % 2 == 0) {
                        $resp = "$num = Par";
                    } else {
                        $resp = "$num = Impar";
                    }

                    // Mostramos el resultado
                    echo "<div class='resultado'>";
                    echo "<p>$resp</p>";
                    echo "</div>";

                }
                break;

            case 2:
                echo '
                <div id="tab" class="tabcontent"></div>
                    <h2>Comprobar si la persona es mayor de edad</h2>
                    <form method="post">
                        <label for="nombre">Ingrese el nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>

                        <label for="edad">Ingrese la edad:</label>
                        <input type="number" id="edad" name="edad" required>

                        <input type="submit" value="Comprobar">
                    </form>
                </div>';

                // Comprobamos si se ha enviado el formulario
                if (isset($_POST['nombre']) && isset($_POST['edad'])) {
                    $nombre = $_POST['nombre'];
                    $edad = intval($_POST['edad']);

                    if ($edad < 0 || $edad > 100) {
                        $resp = "Por favor ingrese una edad válida";
                    } elseif ($edad >= 18) {
                        $resp = "Hola $nombre, usted es mayor de edad";
                    } else {
                        $resp = "Hola $nombre, usted es menor de edad";
                    }

                    // Mostramos el resultado
                    echo "<div class='resultado'>";
                    echo "<p>$resp</p>";
                    echo "</div>";
                }
                break;

            case 3:
                echo '
                <div id="tab" class="tabcontent">
                    <h2>Calcular si un número es positivo, negativo o cero</h2>
                    <form method="post">
                        <label for="num">Ingrese el número:</label>
                        <input type="number" id="num" name="num" required>

                        <input type="submit" value="Calcular">
                    </form>
                </div>';

                // Comprobamos si se ha enviado el formulario
                if (isset($_POST['num'])) {
                    $num = intval($_POST['num']);

                    if ($num == 0) {
                        $resp = "$num = Cero";
                    } elseif ($num > 0) {
                        $resp = "$num = Positivo";
                    } else {
                        $resp = "$num = Negativo";
                    }

                    // Mostramos el resultado
                    echo "<div class='resultado'>";
                    echo "<p>$resp</p>";
                    echo "</div>";
                }
                break;

            case 4:
                echo '
                <div id="tab" class="tabcontent">
                    <h2>Calcular el número mayor y menor</h2>
                    <form method="post">
                        <label for="num1">Primer número:</label>
                        <input type="number" id="num1" name="num1" required>

                        <label for="num2">Segundo número:</label>
                        <input type="number" id="num2" name="num2" required>

                        <input type="submit" value="Calcular">
                    </form>
                </div>';

                // Comprobamos si se ha enviado el formulario
                if (isset($_POST['num1']) && isset($_POST['num2'])) {
                    $num1 = intval($_POST['num1']);
                    $num2 = intval($_POST['num2']);

                    if ($num1 == $num2) {
                        $resp = "Los números son iguales";
                    } elseif ($num1 > $num2) {
                        $resp = "El número mayor es $num1 y el menor es $num2";
                    } else {
                        $resp = "El número mayor es $num2 y el menor es $num1";
                    }

                    // Mostramos el resultado
                    echo "<div class='resultado'>";
                    echo "<p>$resp</p>";
                    echo "</div>";
                }
                break;

            case 5:
                echo '
                <div id="tab" class="tabcontent"></div>
                    <h2>Calcular el promedio y si aprobó el estudiante</h2>
                    <form method="post">
                        <label for="nombre">Nombre del estudiante:</label>
                        <input type="text" id="nombre" name="nombre" step="any" required>

                        <label for="num1">Primer nota:</label>
                        <input type="number" id="num1" name="num1" step="any" required>

                        <label for="num2">Segunda nota:</label>
                        <input type="number" id="num2" name="num2" step="any" required>

                        <label for="num3">Tercer nota:</label>
                        <input type="number" id="num3" name="num3" step="any" required>

                        <label for="num4">Cuarta nota:</label>
                        <input type="number" id="num4" name="num4" step="any" required>

                        <label for="num5">Quinta Nota:</label>
                        <input type="number" id="num5" name="num5" step="any" required>

                        <input type="submit" value="Calcular">
                    </form>
                </div>';

                // Comprobamos si se ha enviado el formulario
                if (isset($_POST['nombre']) && isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['num4']) && isset($_POST['num5'])) {
                    $nombre = $_POST['nombre'];
                    $nota1 = floatval($_POST["num1"]);
                    $nota2 = floatval($_POST["num2"]);
                    $nota3 = floatval($_POST["num3"]);
                    $nota4 = floatval($_POST["num4"]);
                    $nota5 = floatval($_POST["num5"]);
                    $promedio = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;
                    if ($promedio >= 3.0) {
                        $resp = "$nombre aprobó con un promedio de $promedio";
                    } else {
                        $resp = "$nombre no aprobó con un promedio de $promedio";
                    }

                    // Mostramos el resultado
                    echo "<div class='resultado'>";
                    echo "<p>$resp</p>";
                    echo "</div>";
                }
                break;

            case 6:
                echo '
                <div id="tab" class="tabcontent">
                    <h2>Calcular el área de las figuras</h2>
                    <form method="post">
                        <label for="figura">Seleccione una figura y llenar los respectivos campos:</label>
                        <select name="figura" id="figura">
                            <option value="cuadrado">Cuadrado (Lado 1 x Lado 1)</option>
                            <option value="rectangulo">Rectángulo (Lado 1 x Lado 2)</option>
                            <option value="triangulo">Triángulo ((Base x Altura) / 2)</option>
                            <option value="circulo">Círculo (π x (Lado 1 x Lado 1))</option>
                            <option value="rombo">Rombo ((Lado 1 x Altura) / 2)</option>
                            <option value="trapecio">Trapecio (((Lado 1 + Lado 2) x Altura) / 2)</option>
                        </select>

                        <label for="lado1">Lado 1:</label>
                        <input type="number" name="lado1" step="any" id="lado1">

                        <label for="lado2">Lado 2:</label>
                        <input type="number" name="lado2" step="any" id="lado2">

                        <label for="base">Base:</label>
                        <input type="number" name="base" step="any" id="base">

                        <label for="altura">Altura:</label>
                        <input type="number" name="altura" step="any" id="altura">

                        <input type="submit" value="Calcular">
                    </form>
                </div>';

                // Comprobamos si se ha enviado el formulario
                if (isset($_POST['figura']) && isset($_POST['lado1']) && isset($_POST['lado2']) && isset($_POST['base']) && isset($_POST['altura'])) {
                    $figura = $_POST['figura'];
                    $lado1 = floatval($_POST["lado1"]);
                    $lado2 = floatval($_POST["lado2"]);
                    $base = floatval($_POST["base"]);
                    $altura = floatval($_POST["altura"]);

                    switch ($figura) {
                        case 'cuadrado':
                            $area = $lado1 * $lado1;
                            break;

                        case 'rectangulo':
                            $area = $lado1 * $lado2;
                            break;

                        case 'triangulo':
                            $area = ($base * $altura) / 2;
                            break;

                        case 'circulo':
                            $area = pi() * ($lado1 * $lado1);
                            break;

                        case 'rombo':
                            $area = ($lado1 * $altura) / 2;
                            break;

                        case 'trapecio':
                            $area = (($lado1 + $lado2) * $altura) / 2;
                            break;
                        default:
                            echo 'Debe seleccionar una figura';
                            exit;
                    }
                    // Mostramos el resultado
                    echo "<div class='resultado'>";
                    echo '<p>El área del ' . $figura . ' es: ' . $area . '</p>';
                    echo "</div>";
                }



                break;

            case 7:
                echo '
                <div id="tab" class="tabcontent">
                    <h2>Conversión de temperaturas</h2>
                    <form method="post">
                        <label for="temperatura">Introduce la temperatura:</label>
                        <input type="number" name="temperatura" id="temperatura" step="any" required>

                        <label for="origen">Selecciona la unidad de origen:</label>
                        <select name="origen" id="origen">
                            <option value="celsius">Celsius</option>
                            <option value="fahrenheit">Fahrenheit</option>
                            <option value="kelvin">Kelvin</option>
                        </select>

                        <label for="destino">Selecciona la unidad de destino:</label>
                        <select name="destino" id="destino">
                            <option value="celsius">Celsius</option>
                            <option value="fahrenheit">Fahrenheit</option>
                            <option value="kelvin">Kelvin</option>
                        </select>

                        <input type="submit" value="Convertir">
                    </form>
                </div>';

                // Comprobamos si se ha enviado el formulario
                if (isset($_POST['temperatura']) && isset($_POST['origen']) && isset($_POST['destino'])) {
                    $temperatura = $_POST["temperatura"];
                    $origen = $_POST["origen"];
                    $destino = $_POST["destino"];

                    // Convertimos la temperatura a Celsius para hacer las conversiones
                    if ($origen == "fahrenheit") {
                        $temperatura = ($temperatura - 32) * 5 / 9;
                    } elseif ($origen == "kelvin") {
                        $temperatura = $temperatura - 273.15;
                    }

                    // Realizamos la conversión
                    if ($destino == "fahrenheit") {
                        $temperatura = $temperatura * 9 / 5 + 32;
                    } elseif ($destino == "kelvin") {
                        $temperatura = $temperatura + 273.15;
                    }

                    // Imprimir los números ordenados
                    echo "<div class='resultado'>";
                    echo "<p>La temperatura convertida es: " . number_format($temperatura, 2) . " " . strtoupper($destino) . "</p>";
                    echo "</div>";
                }
                break;

            case 8:
                echo '
                <div id="tab" class="tabcontent">
                    <h2>Ordenar los números ingresados en orden ascendente y descendente</h2>
                    <form method="post">
                        <label for="num1">Primer número:</label>
                        <input type="number" id="num1" name="num1" required>

                        <label for="num2">Segundo número:</label>
                        <input type="number" id="num2" name="num2" required>

                        <label for="num3">Tercer número:</label>
                        <input type="number" id="num3" name="num3" required>

                        <input type="submit" value="Ordenar">
                    </form>
                </div>';

                // Comprobamos si se ha enviado el formulario
                if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $num3 = $_POST['num3'];

                    // Ordenar los números en forma ascendente
                    $ascendente = array($num1, $num2, $num3);
                    sort($ascendente);

                    // Ordenar los números en forma descendente
                    $descendente = array($num1, $num2, $num3);
                    rsort($descendente);

                    // Imprimir los números ordenados
                    echo "<div class='resultado'>";
                    echo "<p>Ascendente:</p>";
                    foreach ($ascendente as $num) {
                        echo $num . " ";
                    }
                    echo "<p>Descendente</p>";
                    foreach ($descendente as $num) {
                        echo $num . "  ";
                    }
                    echo "</div>";
                }
                break;

            case 9:
                echo '
                <div id="tab" class="tabcontent">
                    <h2>Calcular método de pago adecuado según el valor</h2>
                    <form method="post">
                        <label for="valor">Ingrese el valor de la cuenta:</label>
                        <input type="number" id="valor" name="valor" required>

                        <input type="submit" value="Calcular">
                    </form>
                </div>';

                // Comprobamos si se ha enviado el formulario
                if (isset($_POST['valor'])) {
                    $cuenta = $_POST['valor'];

                    if ($cuenta < 150000) {
                        $resp = "El pago debe realizarse en efectivo.";
                    } elseif ($cuenta >= 150000 && $cuenta <= 300000) {
                        $resp = "El pago debe realizarse con el celular (dinero electrónico).";
                    } elseif ($cuenta > 300000 && $cuenta <= 600000) {
                        $resp = "El pago debe realizarse con la tarjeta de débito.";
                    } else {
                        $resp = "El pago debe realizarse con la tarjeta de crédito.";
                    }


                    // Mostramos el resultado
                    echo "<div class='resultado'>";
                    echo "<p>$resp</p>";
                    echo "</div>";
                }
                break;

            case 10:
                echo '
                <div id="tab" class="tabcontent">
                    <h2>Calcular el valor a pagar de las llantas</h2>
                    <form method="post">
                        <label for="numero">Ingrese el número de llantas:</label>
                        <input type="number" id="numero" name="numero" required>

                        <input type="submit" value="Calcular">
                    </form>
                </div>';

                // Comprobamos si se ha enviado el formulario
                if (isset($_POST['numero'])) {
                    $llantas = $_POST["numero"];

                    if ($llantas < 6) {
                        $precio = 240000;
                    } elseif ($llantas <= 7) {
                        $precio = 221000;
                    } else {
                        $precio = 180000;
                    }
                    $total = $llantas * $precio;

                    // Mostramos el resultado
                    echo "<div class='resultado'>";
                    echo "<p>Total a pagar: $$total</p>";
                    echo "</div>";
                }
                break;

            case 11:
                echo '
                <div id="tab" class="tabcontent">
                    <h2>Calcular el precio de la pizza por tamaño e ingredientes</h2>
                    <form method="post">
                        <label for="tamaño">Tamaño de la pizza:</label>
                        <select name="tamaño" id="tamaño">
                            <option value="1">Pequeña</option>
                            <option value="2">Mediana</option>
                            <option value="3">Grande</option>
                        </select>

                        <label for="ingredientes">Cantidad de ingredientes adicionales:</label>
                        <input type="number" name="ingredientes" id="ingredientes">

                        <input type="submit" value="Calcular">
                    </form>
                </div>';

                // Comprobamos si se ha enviado el formulario
                if (isset($_POST['tamaño']) && isset($_POST['ingredientes'])) {
                    $tamaño = $_POST['tamaño'];
                    $ingredientes = $_POST['ingredientes'];
                    $precio = 0;

                    switch ($tamaño) {
                        case 1:
                            $precio = 15000;
                            break;
                        case 2:
                            $precio = 24000;
                            break;
                        case 3:
                            $precio = 36000;
                            break;
                        default:
                            echo "Tamaño de pizza inválido";
                            exit;
                    }

                    $precio += $ingredientes * 4000;

                    // Mostramos el resultado
                    echo "<div class='resultado'>";
                    echo "<p>El precio de la pizza es: $$precio</p>";
                    echo "</div>";
                }
                break;

            case 12:
                echo '
                <div id="tab" class="tabcontent">
                    <h2>Calcular el valor según promoción</h2>
                    <form method="post">
                        <label for="cantidad">Cantidad de artículos:</label>
                        <input type="number" id="cantidad" name="cantidad" required>

                        <label for="precio">Precio unitario:</label>
                        <input type="number" id="precio" name="precio" required>

                        <input type="submit" value="Calcular">
                        </form>
                </div>';

                // Comprobamos si se ha enviado el formulario
                if (isset($_POST['cantidad']) && isset($_POST['precio'])) {
                    $cantidad = $_POST['cantidad'];
                    $precio = $_POST['precio'];

                    if ($cantidad <= 5) {
                        $total = $cantidad * $precio;
                    } elseif ($cantidad < 10) {
                        $total = $cantidad * $precio * 0.95;
                    } else {
                        $total = $cantidad * $precio * 0.92;
                    }

                    // Mostramos el resultado
                    echo "<div class='resultado'>";
                    echo "<p>El total a pagar es: $$total</p>";
                    echo "</div>";
                }
                break;

            case 13:
                echo '
                <div id="tab" class="tabcontent">
                    <h2>Calcular el IMC</h2>
                    <form method="post">
                        <label for="peso">Peso (kg):</label>
                        <input type="number" id="peso" name="peso" step="any" required>

                        <label for="talla">Talla (m):</label>
                        <input type="number" id="talla" name="talla" step="any" required>

                        <input type="submit" value="Calcular">
                    </form>
                </div>';

                // Comprobamos si se ha enviado el formulario
                if (isset($_POST['peso']) && isset($_POST['talla'])) {
                    $peso = $_POST["peso"];
                    $talla = $_POST["talla"];
                    $imc = $peso / ($talla * $talla);

                    if ($imc < 18.5) {
                        $estado = "Desnutrido";
                    } elseif ($imc >= 18.5 && $imc < 25) {
                        $estado = "Normal";
                    } elseif ($imc >= 25 && $imc < 30) {
                        $estado = "Sobrepeso";
                    } elseif ($imc >= 30 && $imc < 35) {
                        $estado = "Obesidad Grado 1";
                    } elseif ($imc >= 35 && $imc < 40) {
                        $estado = "Obesidad Grado 2";
                    } else {
                        $estado = "Obesidad Grado 3";
                    }

                    // Mostramos el resultado
                    echo "<div class='resultado'>";
                    echo "<p>Su IMC es: " . number_format($imc, 2) . "</p>";
                    echo "<p>Estado: $estado</p>";
                    echo "</div>";
                }
                break;

            case 14:
                echo '
                <div id="tab" class="tabcontent">
                    <h2>Calcular el número de pulsaciones</h2>
                    <form method="post">
                        <label for="edad">Edad:</label>
                        <input type="number" id="edad" name="edad" required>

                        <label for="genero">Género:</label>
                        <select name="genero" id="genero" required>
                            <option value="1">Femenino</option>
                            <option value="2">Masculino</option>
                        </select>

                        <input type="submit" value="Calcular">
                    </form>
                </div>';

                // Comprobamos si se ha enviado el formulario
                if (isset($_POST['edad']) && isset($_POST['genero'])) {
                    $edad = $_POST["edad"];
                    $genero = $_POST["genero"];
                    if ($genero == 1) {
                        $pulsaciones = (220 - $edad) / 10;
                    } else {
                        $pulsaciones = (210 - $edad) / 10;
                    }

                    // Mostramos el resultado
                    echo "<div class='resultado'>";
                    echo "<p>Su número de pulsaciones por cada 10 segundos de ejercicio aeróbico es: " . number_format($pulsaciones, 2) . "</p>";
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
