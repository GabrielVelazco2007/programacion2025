<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidadEnPesos = floatval($_POST["cantidad"]);
    $moneda = ($_POST["moneda"]);


$valorDolar = 40;

switch ($moneda) {
    case "USD":
        $cantidadTotalDolares = $cantidadEnPesos / $valorDolar;
        echo"<h2>Resultado de la convercion</h2>";
        echo "<p>$cantidadEnPesos pesos Uruguayos equivalentes a <strong>" . $cantidadTotalDolares . " dolares";
        
        break;
        
    case "EUR":
        $valorEuros = 43;
        $cantidadEnPesos;
        $cantidadTotalEuros = $cantidadEnPesos / $valorEuros;
        echo"<h2>Resultado de la convercion</h2>";
        echo "<p>$cantidadEnPesos pesos Uruguayos equivalentes a <strong>" . $cantidadTotalEuros . " dolares";
        break;

        case "BRL":
            $valorReal = 8;
            $cantidadEnPesos;
            $cantidadTotalReales = $cantidadEnPesos / $valorReal;
            echo"<h2>Resultado de la convercion</h2>";
            echo "<p>$cantidadEnPesos pesos Uruguayos equivalentes a <strong>" . $cantidadTotalReales . " dolares";
            break;
    default:
      
    
}


}else{
    echo "Error en la solicitud.";
}

?>
