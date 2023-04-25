<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional 14</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div>
    <?php
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
    ?>

</div>
</body>

</html>