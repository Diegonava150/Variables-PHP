<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional 13</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div>
    <?php
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
    ?>

</div>
</body>

</html>