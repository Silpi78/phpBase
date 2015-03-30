<?php 
/* Tipi di dati ammessi in PHP
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/

$stringa= "stringa";
$num_intero= 10;
$num_virgola=10.802;
$boleano=true;
$lettere= array("A","B","C","D","E");
$x=null;

echo $stringa."<br />";
echo $num_intero."<br />";
echo $num_virgola."<br />";
echo $boleano."<br />";
var_dump($lettere)."<br />";
var_dump($x);
?>