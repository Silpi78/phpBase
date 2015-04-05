<?php
require_once 'Veicolo.php';

	class VeicoloMotore extends Veicolo{
		
		protected $targa;
		protected $cilindrata;
		protected $alimentazione;
		
		
		public function __construct($Proprietario,$telaio,$colore,$targa,$cilindrata,$alimentazione){
			parent::__construct($Proprietario, $telaio, $colore);
			$this->targa=$targa;
			$this->cilindrata=$cilindrata;
			$this->alimentazione=$alimentazione;
		}
		
		/**
		 *  @return string Ritorna la targa del Veicolo
		 */			
		protected function getTarga(){
			return $this->targa;
		}
		
		/**
		 * @param $targa Metodo private per modificare la targa di un veicolo. Non può essere ereditato, nè modificato da altre classe figlie
		 */
		final private function setTarga($targa){
			$this->targa=$targa;
		}
		
		/**
		 *  @return string Ritorna il tipo di alimentazione del veicolo(benzina,gasolio,metano,gpl,elettrica)
		 */
		public function getAlimentazione(){
			return $this->alimentazione;
		}
		
		/**
		 * @param string $alimentazione Modifica l'alimentazione
		 */
		public function setAlimentazione($alimentazione){
			$this->alimentazione=$alimentazione;
		}
		
		/**
		 *  @return string Ritorna la cilindrata
		 */
		public function getCilindrata(){
			return $this->cilindrata;
		}
		/**
		 * @param string $cilindrata Modifica la cilindrata del veicolo
		 */
		public function setCilindrata($cilindrata){
			$this->cilindrata=$cilindrata;
		}
		
		/**
		 * @return string Ritorna una stringa con i dati del veicolo
		 */
		public function veicoloMotoreToString(){
			$veicolostring=parent::veicoloToString();
			return $veicolostring."Targa: ".$this->getTarga()."<Br />Cilindrata: ".$this->getCilindrata()."<br />Alimentazione:".$this->alimentazione."<br />";
		}
		
	}
	
?>	