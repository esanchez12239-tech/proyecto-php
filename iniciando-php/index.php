<h1>Mi primer programa en php</h1>
<?php
include ("funciones2.php");
    // Mi primer programa en php
    echo "Hola mundo desde php"."<br>";
    echo "<h3>Test  1</h3>"."<br>";
    echo "<h3>"."Test 2"."</h3>";

   
    
    // Variables
    $edad = 20;
    $nombre = "Edgar";
    $precioTotal = 12000;
    echo "<h3> Mi nombre es: ".$nombre." y mi edad es: ".$edad."</h3>";
    echo "<h3> El precio total es: ".$precioTotal."</h3>";

    $rol = "secre";
    switch ($rol) {
        case "editor":
            echo "<h3> Es un editor </h3>";
            break;
            case "admin":
                echo "<h3> Es un administrador </h3>";
                break;
                default:
                echo "<h3> No tiene rol asignado </h3>";
                break;
    }

    $i = 0;
    while ($i < 5){
        echo "<h2> El valor de i es: ".$i."</h2>";
        $i++;

    }

$res = restar (19, 7);
echo "El resultado de la resta es: ". $res;

echo "<br>";

$div = division(125, 25);
echo "El resultado de la division es: ".$div;

function despido($nombre = "visitante"){
    return "Adios ".$nombre;
}

echo "<br>";
echo despido(" Edgar");

echo "<br>";
echo despido();







?>
<h2>Fin del programa</h2>