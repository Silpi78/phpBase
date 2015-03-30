<?php
/* Una variabile dichiarata dentro una funzione ha visibilità locale e può essere accessibile solo dentro  
 * la funzione.
 */
function testVarLocale(){
	$x=5; // variable locale
	echo "il valore di x: ".$x;
}

testVarLocale();

//usando la variabile x fuori dalla funzione si genererà un errore: " Undefined variable: x "
echo "il valore di x: ".$x;

?>