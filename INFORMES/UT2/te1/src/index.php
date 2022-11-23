<?php declare(strict_types=1)?>
<html>
<head>
    <title>Calculadora nativa</title>
</head>
<body>
    <table>
        <h2>Calculadora</h2>
        <form action="" method="post" enctype="multipart/form-data" name="formulario">
        <tr>
            <td>Valor 1:</td>
            <td><input type="number" name="valor1" id="valor1"></td>
        </tr>
        <tr>
            <td>Valor 2:</td>
            <td><input type="number" name="valor2" id="valor2"></td>
        </tr>
        <tr>
            <td>Operación:</td>
            <td>
                <select name="operacion" id="operacion">
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="mult">Multiplicacion</option>
                    <option value="division">División</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><img src="calculadora.png" alt="calculadora" srcset=""></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" >Calcular</button></td>
        </tr>
    </table>
        </form>
    <?php 
        if(isset($_POST)) {
            $num1 = $_POST['valor1'];
            $num2 = $_POST['valor2'];
            $operacion = $_POST['operacion'];

            function getOperacion($num1, $num2, $operacion):float {
                if($operacion == "suma") {
                    return $num1 + $num2;
                } elseif ($operacion == "resta"){
                    return $num1 - $num2;
                } elseif ($operacion == "mult") {
                    return $num1 * $num2;
                } elseif ($operacion == "division"){
                    return $num1 / $num2;
                }
            }
            $resultado = getOperacion($num1, $num2, $operacion);
            echo "<tr><td>El resultado es: $resultado</td></tr>";
        }
    ?>
</body>
</html>
