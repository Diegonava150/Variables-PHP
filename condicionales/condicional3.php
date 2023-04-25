<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional 3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div>
    <?php
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
    ?>

</div>
</body>

</html>