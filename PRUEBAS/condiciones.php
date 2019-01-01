<?php
#CONDICIONES
$A=3;
$B=7;

if($A>$B){
	echo "es mayor que b";
}
elseif ($A==$B) {
	echo "es igual a b";
}
else{
	echo "a es menor que b";
}

echo "<br>";

#SWITCHER
$dia="domingo";
switch ($dia) {
	case 'sabado':
		echo "voy a estudiar PHP!";
		break;
	
	case 'domingo':
		echo "voy a descansar!";
		break;
	
	default:
		echo "voy a comer!";
		break;
}

#CICLO WHILE
echo "<br>";

$n=1;
while ( $n <= 5) {	
	echo $n;
	$n++;
}

echo "<br>";

#CICLO DO WHILE
$p = 1;
do{
	echo $p;
	$p++;
}
while ($p <= 5);

echo "<br>";

#CICLO FOR
for ($i = 1; $i <= 5 ; $i++) { 
	echo $i;
}

?>


