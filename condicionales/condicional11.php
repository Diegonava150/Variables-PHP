<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional 11</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div>
    <?php
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
    ?>

</div>
</body>

</html>