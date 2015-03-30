<?php

$x=5; //variabile globale

/*
 Una variabile dichiarata fuori di una funzione ha un ambito globale e può essere accessibile solo al di fuori
 di una funzione. Nell'esempio la variabile x all'interno della funzione non stampa alcun risultato e genera un errore Undefined variable: x
 */
function testVarGlobale(){
	echo "il valore di x:<br> ".$x; // 
}
testVarGlobale();

echo "il valore di x: ".$x;
?>