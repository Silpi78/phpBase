<?php
require_once 'Veicolo.php';

	/**
	 * @author Silvio
	 *Classe Automobile è una sottoclasse specializzata di Veicolo
	 */
	class Automobile extends Veicolo{
		
		/** Proprietà della classe automobile
		 * @var string $targa Targa dell'auto alfanumerica composta da 8 cifre ;
		 * @var string $modello Modello dell'auto
		 * @var string $motore Tipo di motore dell'auto
		 * @var DateTime $immatricolazione Data immatricolazione auto
		 * @var string $velocitaMax Velocita massima auto
		 * @var int $codAlimentazione Il codice del tipo di alimentazione auto
		 */
		private $targa;
		private $marca;
		private $modello;
		private $motore;
		private $immatricolazione;
		private $velocitaMax;
		private $codAlimentazione;
		
		/** Costruttore dell'oggetto automobile che eredita le proprietà telaio, codVeicolo, dimensioni, colore dalla classe Veicolo
		 * @param string $targa
		 * @param string $marca
		 * @param string $modello
		 * @param string $motore
		 * @param DateTime $immatricolazione
		 * @param int $codAlimentazione
		 * @param int $telaio
		 * @param string $velocitaMax
		 * @param int $codVeicolo
		 * @param string $dimensioni
		 * @param string $colore
		 */
		public function __construct($targa,$marca,$modello,$motore,$immatricolazione,$codAlimentazione,$telaio,$velocitaMax, $codVeicolo, $dimensioni, $colore){
			parent:: __construct($telaio, $codVeicolo, $dimensioni, $colore);
			$this->targa=$targa;
			$this->marca=$marca;
			$this->modello=$modello;
			$this->motore=$motore;
			$this->immatricolazione=$immatricolazione;
			$this->velocitaMax=$velocitaMax;
			$this->codAlimentazione=$codAlimentazione;
		}
				
		/**
		 * @return int Chiama il metodo Veicolo::getTelaio che restituisce il numero del telaio
		 */
		public function getTelaio() {
			return parent::getTelaio();
		}
		
		/**
	 	* @param int $telaio Modifica il numero del telaio richiamando il metodo Veicolo::setTelaio
		*/
		public function setTelaio($telaio){
			parent::setTelaio($telaio);
		}
		
		/**
		 * @return string Restituisce la targa (8 cifre)
		 */
		public function getTarga(){
			return $this->targa;
		}
		
		/**
		 * @param string $targa Modifica il nome del proprietario
		 */
		public function setTarga($targa){
			$this->targa=$targa;
		}
				
		/**
		 * @return string Restituisce la marca
		 */
		public function getMarca() {
			return $this->marca;
		}
		
		/**
		 * @param string $marca Modifica la marca
		 */
		public function setMarca($marca){
			$this->marca=$marca;
		}
		
		/**
		 * @return string Restituisce il modello
		 */
		public function getModello(){
			return $this->modello;
		}
		
		/**
		 * @param string $modello Modifica il modello
		 */
		public function setModello($modello){
			$this->modello=$modello;
		}
		
		/**
		 * @return string restituisce il tipo di motore(es 1.3 16 v)
		 */
		public function getMotore() {
			return $this->motore;
		}
		
		/**
		 * @param string $motore Modifica il motore
		 */
		public function setMotore($motore){
			$this->motore=$motore;
		}
		
		/**
		 * @return DateTime Ritorna la data dell'immatricolazione
		 */
		public function getImmatricolazione(){
			return $this->immatricolazione;
		}
		
		/**
		 * @param DateTime $immatricolazione Modifica la data dell'immatricolazione
		 */
		public function setImmatricolazione($immatricolazione){
			$this->immatricolazione=$immatricolazione;
		}
		
		/**
		 * @return string Restituisce la velocità massima
		 */
		public function getVelocitaMax(){
			return $this->velocitaMax;
		}
		
		/**
		 * @param string $velocitaMax Modifica la velocità massima
		 */
		public function setVelocitaMax($velocitaMax){
			$this->velocitaMax=$velocitaMax;
		}
		
		/**
		 * @return int Ritorna il codice dell'alimentazione dell'auto
		 */
		public function getcodAlimentazione(){
			return $this->codAlimentazione;
		}
		
		/**
		 * @param int $codAlimentazione Modifica il codice dell'alimentazione
		 */
		public function setcodAlimentazione($codAlimentazione){
			$this->codAlimentazione=$codAlimentazione;
		}
		/**
		 * @return string Restituisce tutti i dati dell'oggetto 
		 */
		public function __toString(){
			return "Dati Automobile <br />"."Targa: ".$this->getTarga()."<br />"."Telaio: ".$this->getTelaio()."<br />"."Marca: ".$this->getMarca()."<br />"."Modello".$this->getModello()."<br />"."Motore ".$this->getMotore()."<br />"."Immatricolazione ".$this->getImmatricolazione()."<br />"."Velocita Max ".$this->getVelocitaMax()."<br />"."Codice Alimentazione: ".$this->getcodAlimentazione()."<br />";
		}
		
	} 
?>	