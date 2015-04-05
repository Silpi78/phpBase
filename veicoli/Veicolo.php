<?php
	/**
	 * @author Silvio
	 * @package Veicolo 
	 * Classe principale che descrive un Veicolo 
	 */
	class Veicolo{
		/**
		 * variabili istanza
		 * @var object Proprietario
		 * @var	string telaio 
		 * @var string colore
		 */
		protected $Proprietario; // proprietario del veicolo
		private $telaio; //numero del telaio non può essere modificato ma solo visualizzato
		protected $colore; // colore del veicolo
		
		/**
		 * @param object $Proprietario
		 * @param string $telaio
		 * @param string $colore
		 */
		
		public function __construct($Proprietario,$telaio,$colore){
			$this->Proprietario =$Proprietario;
			$this->telaio=$telaio;
			$this->colore=$colore;										
		}
		
		/**
		 * @return object Restituisce oggetto Proprietario con i dati 
		 */
		public function getProprietario(){
			return $this->Proprietario;
		}
					
		/**
		 * @param object $Proprietario Modifica il proprietario
		 */
		public function setProprietario($Proprietario){
				$this->Proprietario=$Proprietario;		
		}
				
		/**
		 * @return string ritorna il numero di telaio della macchina
		 */
		public function getTelaio(){
			return $this->telaio;
		}

		/**
		 * @param string $telaio
		 */
		private function setTelaio($telaio) {
			$this->telaio=$telaio;
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
		 * @return string Restituisce i dati del veicolo:Proprietario,Telaio e Colore
		 */
		public function veicoloToString() {
			return $this->Proprietario->toString()."Dati Veicolo:<br /> "."Telaio: ".$this->getTelaio()."<br />"."Colore: ".$this->getColore()."<br />";
		}
		
		/**
		 * @param string $nuovotelaio Chiama il metodo privato setTelaio e modifica il numero di telaio
		 */
		public function modificaTelaio($nuovotelaio){
			$this->setTelaio($nuovotelaio);
		}
	}
			
	require_once 'Proprietario.php';
?>