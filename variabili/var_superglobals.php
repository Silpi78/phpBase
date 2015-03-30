<?php
//$_SERVER mostra dati del server

$server=$_SERVER;
foreach ($server as $var => $value) {
	echo "$var => $value <br /><hr>";
}
?>