<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional 6</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div>
    <?php
    echo '
        <div id="tab" class="tabcontent">
            <h2>Calcular el área de las figuras</h2>
            <form method="post">
                <label for="figura">Seleccione una figura y llenar los respectivos campos:</label>
                <select name="figura" id="figura">
                    <option value="cuadrado">Cuadrado (Lado 1 x Lado 1)</option>
                    <option value="rectangulo">Rectángulo (Lado 1 x Lado 2)</option>
                    <option value="triangulo">Triángulo ((Base x Altura) / 2)</option>
                    <option value="circulo">Círculo (π x (Lado 1 x Lado 1))</option>
                    <option value="rombo">Rombo ((Lado 1 x Altura) / 2)</option>
                    <option value="trapecio">Trapecio (((Lado 1 + Lado 2) x Altura) / 2)</option>
                </select>

                <label for="lado1">Lado 1:</label>
                <input type="number" name="lado1" step="any" id="lado1">

                <label for="lado2">Lado 2:</label>
                <input type="number" name="lado2" step="any" id="lado2">

                <label for="base">Base:</label>
                <input type="number" name="base" step="any" id="base">

                <label for="altura">Altura:</label>
                <input type="number" name="altura" step="any" id="altura">

                <input type="submit" value="Calcular">
            </form>
        </div>';

    // Comprobamos si se ha enviado el formulario
    if (isset($_POST['figura']) && isset($_POST['lado1']) && isset($_POST['lado2']) && isset($_POST['base']) && isset($_POST['altura'])) {
        $figura = $_POST['figura'];
        $lado1 = floatval($_POST["lado1"]);
        $lado2 = floatval($_POST["lado2"]);
        $base = floatval($_POST["base"]);
        $altura = floatval($_POST["altura"]);

        switch ($figura) {
            case 'cuadrado':
                $area = $lado1 * $lado1;
                break;

            case 'rectangulo':
                $area = $lado1 * $lado2;
                break;

            case 'triangulo':
                $area = ($base * $altura) / 2;
                break;

            case 'circulo':
                $area = pi() * ($lado1 * $lado1);
                break;

            case 'rombo':
                $area = ($lado1 * $altura) / 2;
                break;

            case 'trapecio':
                $area = (($lado1 + $lado2) * $altura) / 2;
                break;
            default:
                echo 'Debe seleccionar una figura';
                exit;
        }
        // Mostramos el resultado
        echo "<div class='resultado'>";
        echo '<p>El área del ' . $figura . ' es: ' . $area . '</p>';
        echo "</div>";
    }
    ?>

</div>
</body>

</html>