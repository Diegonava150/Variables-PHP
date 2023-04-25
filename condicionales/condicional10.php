<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional 10</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div>
    <?php
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
    ?>

</div>
</body>

</html>