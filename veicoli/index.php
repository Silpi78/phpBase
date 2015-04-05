<?php
require_once 'Proprietario.php';
require_once 'Veicolo.php';
require_once 'VeicoloMotore.php';
//Classe per visualizzare il funzionamento delle altre classi

$prop = new Proprietario ( "Antonio", "Verdi", "via tremonti 9 Bari", "case@yahoo.it","06335734");
//print $prop->toString(); 
$veic=new Veicolo($prop, "q97c432sd", "marrone");
//print $veic->getProprietario()->toString()."<br />";

//print $veic->veicoloToString();
//$veic->setColore("verde");
//print $veic->getColore();
//$prop2=new Proprietario("Mario", "Bianchi", "via Cattaneo 32 Vicenza", "mansdasd@yahoo.it", "023889323");
$veicoloMotore= new VeicoloMotore($prop, "AZ879034", "giallo", "Ah234zx", "1200", "benzina");
$dati= $veicoloMotore->veicoloMotoreToString();
print $dati;
$veicoloMotore->modificaTelaio("azncer223k");
print $veicoloMotore->getTelaio();

?>