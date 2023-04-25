<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional 4</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div>
    <?php
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
    ?>

</div>
</body>

</html>