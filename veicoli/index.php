<?php
require_once 'Proprietario.php';
require_once 'Veicolo.php';
require_once 'Database.php';
require_once 'Dbinfo.inc';

//Classe per visualizzare il funzionamento delle classi

//testo la classe Proprietario provando i vari metodi get e set
/*
$prop = new Proprietario(1,'Mario','Rossi','via Dante 45', 'Modena','mariorossi@gmail.com','09382374');
print $prop->getidProprietario()."<br />";
$prop->setidProprietario(20);
print $prop->getidProprietario()."<br />";

print $prop->getNome()."<br />";
$prop->setNome('Carlo');
print $prop->getNome()."<br />";

print $prop->getCognome()."<br />";
$prop->setCognome('Bianchi');
print $prop->getCognome()."<br />";

print $prop->getIndirizzo()."<br />";
$prop->setIndirizzo('via Parini 95');
print $prop->getIndirizzo()."<br />";

print $prop->getCitta()."<br />";
$prop->setCitta('Torino');
print $prop->getCitta()."<br />";

print $prop->getEmail()."<br />";
$prop->setEmail('carlobianchi@yahoo.it');
print $prop->getEmail()."<br />";

print $prop->getTelefono()."<br />";
$prop->setTelefono('035892642');
print $prop->getTelefono()."<br />";
//stampo tutti dati dell'oggetto
print $prop->toString();

 
//test della classe veicolo
$veicolo = new Veicolo(0000000001,1,'300x120x150','nero');
print $veicolo->getTelaio()."<br />";
$veicolo->setTelaio('0000000002');
print $veicolo->getTelaio()."<br />";

print $veicolo->getcodVeicolo()."<br />";
$veicolo->setcodVeicolo(20);
print $veicolo->getcodVeicolo()."<br />";

print $veicolo->getDimensioni()."<br />";
$veicolo->setDimensioni('330x140x120');
print $veicolo->getDimensioni()."<br />";

print $veicolo->getColore()."<br />";
$veicolo->setColore('verde');
print $veicolo->getColore()."<br />";
//stampo tutti dati dell'oggetto
print $veicolo->toString();
*/

$db= new Database();
//$con=$db->openCon();
//var_dump($db);
$con=$db->connetti();
//var_dump($con)."<br />";
$risultati=$db->eseguiQuery("SELECT * from veicolo");
//var_dump($risultati)."<br>";

while($row = $risultati->fetch_array())
{
	$rows[] = $row;
}

echo "Telaio "."Dimensioni "."Colore "."<br>";
foreach($rows as $row){
	echo $row['telaio']." ";
	echo $row['dimensioni']." ";
	echo $row['colore']."<br>";
}
?>