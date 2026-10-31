<?php
// Funciones php
function suma($a, $b) {
    return $a + $b;
}

echo suma (5,10);
echo "<br>";
echo suma (10,30);
echo "<br>";
echo suma(32,21);

function calcularAreaRectangulo ($base, $altura) {
    return $base * $altura;
}
echo "<br>";
echo calcularAreaRectangulo (5,7); 

function saludar (){
    return "Hola  mundo";

}
echo "<br>";
echo saludar ();

function saludando () {
    echo "Hola Mundo 2";
}
echo "<br>";

echo saludando();

function saludo ($nombre) {
    echo "Hola mi nombre es: ".$nombre;
}
echo "<br>";
     saludo ("Edgar");

function suma2 ($a, $b){
    return $a + $b ;
}    
 echo "<br>";
$resultado = suma2(5,10);
echo $resultado *3;

function presentacion () {
    return "Bienvenidos a la asignatura de desarrollo web.....web";
} 
echo "<br>";

echo "Hola, ".presentacion ();






?>