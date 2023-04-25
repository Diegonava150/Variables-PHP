<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional 2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div>
    <?php
    echo '
        <div id="tab" class="tabcontent"></div>
            <h2>Comprobar si la persona es mayor de edad</h2>
            <form method="post">
                <label for="nombre">Ingrese el nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="edad">Ingrese la edad:</label>
                <input type="number" id="edad" name="edad" required>

                <input type="submit" value="Comprobar">
            </form>
        </div>';

    // Comprobamos si se ha enviado el formulario
    if (isset($_POST['nombre']) && isset($_POST['edad'])) {
        $nombre = $_POST['nombre'];
        $edad = intval($_POST['edad']);

        if ($edad < 0 || $edad > 100) {
            $resp = "Por favor ingrese una edad válida";
        } elseif ($edad >= 18) {
            $resp = "Hola $nombre, usted es mayor de edad";
        } else {
            $resp = "Hola $nombre, usted es menor de edad";
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