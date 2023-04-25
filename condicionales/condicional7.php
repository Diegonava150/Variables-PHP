<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional 7</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div>
    <?php
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
    ?>

</div>
</body>

</html>