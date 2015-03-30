<?php

/*
function incrementaNumero(){
	//senza parola chiave static stampa 1-1-1
	$numero= 0;
	$numero++;
	echo $numero."\n";
}

incrementaNumero();
incrementaNumero();
incrementaNumero();
*/

function incrementaNumero(){
	 static $numero= 0;
	$numero++;
	echo $numero."\n";
}

incrementaNumero();
incrementaNumero();
incrementaNumero();

?>