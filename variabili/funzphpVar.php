<?php
/*
Empty restituisce FALSE se la variabile esiste e ha un valore non vuoto e diverso da zero.Altrimenti restituisce TRUE.
Sono considerati vuoti i seguenti valori:

    "" (una stringa vuota)
    0 (0 come intero)
    0.0 (0 come numero decimale)
    "0" (0 come stringa)
    NULL
    FALSE
    array() (un array vuoto)
    $var; (una variabile dichiarata, ma senza un valore)
*/

$variabile=array();


	if (empty($variabile)) 

		echo "La variabile non esiste o uguale a 0<br />";

echo var_dump($variabile);


?>	