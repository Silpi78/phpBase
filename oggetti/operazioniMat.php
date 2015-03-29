<?php
class operazioniMat{
	
	private $numero; // attributi della classe operazioniMat
	private $numero2;

	function __construct($numero, $numero2){ // costruttore della classe 
		$this->numero=$numero; // inizializzazione degli attributi numero e numero2
		$this->numero2=$numero2;
	}
	
	function somma(){  // il metodo somma due numeri e stampa il risultato
		$somma= ($this->numero + $this->numero2."\n");
		print "Somma:".$somma."<br />";
	}
	
	function sottrazione(){ // il metodo sottrae due numeri e stampa il risultato
		$sottrazione=$this->numero - $this->numero2."\n"; 
		print "Sottrazione:".$sottrazione."<br />";
	}
	
	function moltiplicazione(){ // il metodo moltiplica due numeri e stampa il risultato
		$moltiplicazione=$this->numero * $this->numero2;
		print "Moltiplicazione:". $moltiplicazione."<br />";
	}

	function divisione(){		
		$divisione=$this->numero / $this->numero2;
		print "Divisione:". $divisione."<br />";
		}
	/*
	function controlloNumeri($_POST['numero'],$_POST['numero2']){
		if($_POST['numero'],$_POST['numero2']){			
		}
	}
	*/
}
$operazione= new operazioniMat($_POST['numero'],$_POST['numero2']); // istanza oggetto della classe
$operazione->somma(); // chiamata metodo somma
$operazione->sottrazione();
$operazione->moltiplicazione();
$operazione->divisione();

echo "<a href='operazioni.html'><B>Torna al form</B></a>"
?>