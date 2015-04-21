<?php
	/**
	 * @author Silvio
	 * @package Veicolo 
	 * Classe principale che descrive un Veicolo 
	 */
	class Veicolo{
		
		/**
		 * variabili istanza
		 * @var number telaio Un intero composto da 10 cifre
		 * @var int codveicolo Il codice del veicolo che indica il tipo di categoria del veicolo
		 * @var string dimensioni Lunghezza, larghezza e altezza del veicolo
		 * @var string colore
		 */
		
		protected $telaio;
		protected $codVeicolo;
		protected $dimensioni;
		protected $colore;
		
		
		/**
		 * @param int $telaio
		 * @param int $codveicolo
		 * @param string $dimensioni
		 * @param string $colore
		 */
		
		public function __construct($telaio,$codVeicolo,$dimensioni,$colore){
			
			$this->telaio=$telaio;
			$this->codVeicolo=$codVeicolo;
			$this->dimensioni=$dimensioni;
			$this->colore=$colore;										
		}
				
				
		/**
		 * @return int Restituisce il numero di telaio del veicolo
		 */
		public function getTelaio(){
			return $this->telaio;
		}

		/**
		 * @param int $telaio Modifica il numero del telaio
		 */
		public function setTelaio($telaio) {
			$this->telaio=$telaio;
		}
		
		/**
		 * @return int cod Restituisce il codice del veicolo
		 */
		public function getcodVeicolo(){
			return $this->codVeicolo;
		}
		
		/**
		 * @param int $codVeicolo Modifica il codice del veicolo
		 */
		public function setcodVeicolo($codVeicolo){
			$this->codVeicolo=$codVeicolo;
		}
		
		/**
		 * @return string Restituisce le dimensioni del veicolo
		 */
		public function getDimensioni(){
			return $this->dimensioni;
		}
		
		/**
		 * @param string $dimensioni Modifica le dimensioni del veicolo
		 */
		public function setDimensioni($dimensioni){
			$this->dimensioni=$dimensioni;
		}
			
		/**
		 * @return string Restituisce il colore del veicolo
		 */
		public function getColore(){
			return $this->colore;
		}
				
		/**
		 * @param string $colore Modifica il colore del veicolo
		 */
		public function setColore($colore){
			$this->colore=$colore;
		}
				
		/**
		 * @return string Restituisce i dati del veicolo:Telaio,codVeicolo,dimensioni e colore
		 */
		public function toString() {
			return "Dati Veicolo:<br /> "."Telaio: ".$this->getTelaio()."<br />"."Codice Veicolo: ".$this->getcodVeicolo()."<br />"."Dimensioni: ".$this->getDimensioni()."<br />"."Colore: ".$this->getColore()."<br />";
		}
		
	}
	require_once "Proprietario.php";
?>