<?php
#DATOS DE PRUEBA PRINT Y ECHO
print "<h1>MI PRIMER CODIGO PHP!</h1>";
echo "<h2> SOY PHP </h2>","<p>MI SEGUNDO CODIGO PHP!</p>";

#VARIABLE NUMERICO
$numero = 5;
echo "<h2>Es un numero: $numero </h2>";

#VARIABLE TEXTO
$CADENA = "JM TU PAPI";
echo "<h2>Es un CADENA: $CADENA </h2>";

#VARIABLE BOOLEANO
$BOOLEANO = TRUE;
echo "<h2>Es un BOOLEANO: $BOOLEANO </h2>";

#VARIABLE ARREGLO
$ARRAY = array("RED","BLUE");
echo "<h2>Es un ARRAY: $ARRAY[1] </h2>";

#VARIABLE ARREGLO CON PROPIEDADES
$ARRAYPRO = array("RED"=>"ROJO","BLUE"=>"AZUL");
echo "<h2>Es un ARRAYPRO: $ARRAYPRO[RED] </h2>";

#VARIABLES OBJETO
$FRUTA=(object)["fruta"=>"pera","fruta1"=>"manzana"];
echo "<h2>Es un OBJETO: $FRUTA->fruta </h2>";
#var_dump ->> PARA SABER EL TIPO DE LA VARIABLE
var_dump($FRUTA);
var_dump($numero);

#FUNCIONES SIN PARAMETROS
function saludo(){
	echo "HOLA JM";
}
saludo();

#FUNCIONES CON PARAMETROS
function despedida($cadena){
	echo "<h2>Es un CADENA: $cadena </h2>";
	echo $cadena." - belleza<br>";
}
despedida($CADENA);


#FUNCIONES CON RETORNO
function param($cadena){
	return $cadena;
}
echo param($CADENA);


?>


