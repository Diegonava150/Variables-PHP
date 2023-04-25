<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional 12</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div>
    <?php
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
    ?>

</div>
</body>

</html>