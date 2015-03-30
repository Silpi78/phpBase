<?php
/* Una variabile dichiarata dentro una funzione ha visibilit� locale e pu� essere accessibile solo dentro  
 * la funzione.
 */
function testVarLocale(){
	$x=5; // variable locale
	echo "il valore di x: ".$x;
}

testVarLocale();

//usando la variabile x fuori dalla funzione si generer� un errore: " Undefined variable: x "
echo "il valore di x: ".$x;

?>