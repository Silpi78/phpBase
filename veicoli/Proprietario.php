<?php
/**
 * @author Silvio
 * Classe Proprietario Descrive una pers
 */
class Proprietario {
	
	/**
	 * Variabili istanza della classe 
	 * @var number idProprietario
	 * @var string nome
	 * @var string cognome
	 * @var string indirizzo
	 * @var string citta 
	 * @var string email
	 * @var string telefono
	 * 
	 */
	private $idProprietario;
	private $nome;
	private $cognome;
	private $indirizzo;
	private $citta;
	private $email;
	private $telefono;
	
	/** 
	 * costruttore oggetto Proprietario
	 * @param string $nome
	 * @param string $cognome
	 * @param string $indirizzo
	 * @param string $email
	 * @param string $telefono
	 */
	public function __construct($idProprietario,$nome, $cognome, $indirizzo, $citta, $email, $telefono) {
		$this->idProprietario= $idProprietario;
		$this->nome = $nome;
		$this->cognome = $cognome;
		$this->indirizzo = $indirizzo;
		$this->citta=$citta;
		$this->email = $email;
		$this->telefono = $telefono;
		
	}
	
	/**
	 * @return int Restituisce idProprietario
	 */
	public function getidProprietario(){
		return $this->idProprietario;
	}
	
	/**
	 * @param int $idProprieatario Modifica id del Proprietario
	 */
	public function setidProprietario($idProprieatario){
		$this->idProprietario=$idProprieatario;
	}
	
	/**
	 * @return string Restituisce il nome del proprietario
	 */
	public function getNome() {	
		return $this->nome;
	}
	
	/**
	 * @param string $nome Modifica il nome del proprietario
	 */
	public function setNome($nome) {
		$this->nome=$nome;		
	}
		
	/**
	 * @return string Restituisce il cognome del proprietario
	 */
	public function getCognome(){
		return $this->cognome; 
	}
	 
	/**
	 * @param string $cognome Modifica il cognome del proprietario
	 */
	public function setCognome($cognome){
		$this->cognome=$cognome;		
	}
	
	/**
	 * @return string Restituisce l'indirizzo del proprietario
	 */
	public function getIndirizzo(){
		return $this->indirizzo;
	}
	
	/**
	 * @param string $indirizzo Modifica l'indirizzo del proprietario
	 */
	public function setIndirizzo($indirizzo) {
		$this->indirizzo=$indirizzo;
	}
	
	/**
	 *  @return string Restituisce il nome della citt�
	 */
	public function getCitta(){
		return $this->citta;
	}
	
	/**
	 * @param string $citta Modifica il nome della citt�
	 */
	public function setCitta($citta){
		$this->citta=$citta;
	}
	
	/**
	 * @return string Restituisce l'email del proprietario
	 */
	public function getEmail(){
		return $this->email;
	}
	
	/**
	 * @param string $email Modifica l'email del proprietario
	 */
	public function setEmail($email) {
		$this->email=$email;
	}
	
	/**
	 * @return string Restituisce il numero di telefono del proprietario
	 */
	public function getTelefono() {
		return $this->telefono;
	}
	
	/**
	 * @param string $telefono. Modifica il nome del telefono del proprietario
	 */
	public function setTelefono($telefono){
		$this->telefono=$telefono;
	}
	
	/**
	 * @return string Restituisce tutti i dati dell'oggetto Proprietario
	 */
	public function toString(){
		return "Dati Proprietario<br />ID :".$this->getidProprietario()."<br />"."Nome: ".$this->getNome()."<br />"."Cognome: ".$this->getCognome()."<br />"."Indirizzo: ".$this->getIndirizzo()."<br />"."Email: ".$this->getEmail()."<br />"."Citt�: ".$this->getCitta()."<br />"."Telefono: " .$this->getTelefono()."<br />";
		
	}
}

?>	