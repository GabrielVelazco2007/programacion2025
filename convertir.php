<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidadEnPesos = floatval($_POST["pesos"]);

$valorDolar = 40;
$cantidadEnPesos;
$cantidadTotalDolares = $cantidadEnPesos / $valorDolar;
echo"<h2>Resultado de la convercion</h2>";
echo "<p>$cantidadEnPesos pesos Uruguayos equivalentes a <strong>" . $cantidadTotalDolares . " dolares";
}else{
    echo "Error en la solicitud.";
}
?>