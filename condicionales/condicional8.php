<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional 8</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div>
    <?php
    echo '
        <div id="tab" class="tabcontent">
            <h2>Ordenar los números ingresados en orden ascendente y descendente</h2>
            <form method="post">
                <label for="num1">Primer número:</label>
                <input type="number" id="num1" name="num1" required>

                <label for="num2">Segundo número:</label>
                <input type="number" id="num2" name="num2" required>

                <label for="num3">Tercer número:</label>
                <input type="number" id="num3" name="num3" required>

                <input type="submit" value="Ordenar">
            </form>
        </div>';

    // Comprobamos si se ha enviado el formulario
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        // Ordenar los números en forma ascendente
        $ascendente = array($num1, $num2, $num3);
        sort($ascendente);

        // Ordenar los números en forma descendente
        $descendente = array($num1, $num2, $num3);
        rsort($descendente);

        // Imprimir los números ordenados
        echo "<div class='resultado'>";
        echo "<p>Ascendente:</p>";
        foreach ($ascendente as $num) {
            echo $num . " ";
        }
        echo "<p>Descendente</p>";
        foreach ($descendente as $num) {
            echo $num . "  ";
        }
        echo "</div>";
    }
    ?>

</div>
</body>

</html>