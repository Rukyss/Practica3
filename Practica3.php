<?php
//Ejercicio1
if(isset($_POST["precio"])){

 $precio = $_POST["precio"];

    if ($precio <= 50 && $precio > 0) {
        echo "los gastos de envío serán de 3,95€";

        }elseif ($precio > 50 && $precio <= 75 )  {
             echo "los gastos de envío serán de 2,95€";

        }elseif ($precio > 75 && $precio <= 100 ) {
            echo "los gastos de envío serán de 1,95€";

        }elseif ($precio > 100) {
            echo "los gastos de envío serán gratuitos€";
        }
    }

//Ejercicio2


if(isset($_POST["preciocase"])){
    $preciocase = $_POST["preciocase"];

    switch ($preciocase){ 
    case $preciocase <= 50 && $preciocase > 0: {
        echo "los gastos de envío serán de 3,95€";
        break;
    }
    case $preciocase > 50 && $preciocase <= 75: {
        echo "los gastos de envío serán de 2,95€";
        break;
    }
    case $preciocase > 75 && $preciocase <= 100: {
        echo "los gastos de envío serán de 1,95€";
        break;
    }
    default:
        echo "los gastos de envío serán gratuitos";
        break;
    }
}

//Ejericio 3
if(isset($_POST["n1"])){
    $numero1 = ($_POST["n1"]);
    $numero2 = ($_POST["n2"]);
    $numero3 = ($_POST["n3"]);
    $numero4 = ($_POST["n4"]);
    $numero5 = ($_POST["n5"]);

    $miArray = array($numero1, $numero2, $numero3, $numero4, $numero5);

    $numeroMasAlto = $miArray[0]; 

    for ($i = 1; $i < count($miArray); $i++) {
        if ($miArray[$i] > $numeroMasAlto) {
            $numeroMasAlto = $miArray[$i];
        }
    }
    echo $numeroMasAlto;
}

//Ejercicio 4
if(isset($_POST["ej4"])){

$matriz = array(
    array(3, 1),
    array(2, 0)
);


foreach ($matriz as $fila) {
    foreach ($fila as $valor) {
        echo $valor . " ";
    }
    echo "<br>";
    }     
}
    

// Ejercicio 5

if(isset($_POST["boton2"])){
    $matriz1 = array (
        array (1, 0),
        array (0, 1)
    ); 
    $matriz2 = array (
        array (0, 1),
        array (1, 0)
    );

    for($i=0;$i<2;$i++){
        for($j=0;$j<2;$j++){
            $matriztotal[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
            echo $matriztotal[$i][$j];
        }

        echo "<br>";
    }
}

?>