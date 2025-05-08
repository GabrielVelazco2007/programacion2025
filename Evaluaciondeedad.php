<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = intval($_POST["edad"]);

    if ($edad >= 11 && $edad <=19) { 
        echo "<p> conseguiste la promocion </p>";
    }else{ 
        echo "<p> no conseguiste la promocion </p>";
    }

}

?>