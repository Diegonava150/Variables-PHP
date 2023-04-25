<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional 9</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div>
    <?php
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
    ?>

</div>
</body>

</html>