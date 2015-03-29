<?php

$numero= 15;
/*
function incrementa(){
	global $numero;
	$numero++;
	echo $numero;
}
incrementa(); // stampa 16, se invece commento $numero stampa 1
*/

function incrementaGlobal(){
	$GLOBALS['numero']++;
	echo $GLOBALS['numero'];
}
incrementaGlobal();
?>