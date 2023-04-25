<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional 5</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div>
    <?php
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
    ?>

</div>
</body>

</html>