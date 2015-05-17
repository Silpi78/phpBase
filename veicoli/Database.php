<?php
require_once 'Dbinfo.inc';
/**
 * @author Silvio
 *Classe per connessione e operazioni su un db mysqli
 */
class Database{
	
	protected static $connessione;
	
	/**
	 * Metodo per connettersi ad un database mysql. Restituisce un oggetto mysqli,false se ci sono problemi di connessione
	 * @return boolean|mysqli
	 */
	public function connetti(){
		
		if(!isset(self::$connessione)){
			self::$connessione= new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		}
		if (self::$connessione===false){
			return false;
		}
		return self::$connessione;
	}
	
	/**
	 * Disconnette una connessione da mysql
	 */
	public function disconnetti(){
		if(isset(self::$connessione)){
			self::$connessione->close();
		}
	}
	
	/**
	 * Metodo che esegue una query
	 * @param string $query
	 * @return Il risultato della funzione mysqli->query
	 */
	public function eseguiQuery($query){
		//connessione al database
		$con=$this->connetti();
		//esecuzione della query
		$ris=$con->query($query);
		return $ris;
	}	
	
	
	/* public function select($query,$dati){
		$db=$this->connetti();
	}
	
	public function insert($tabella,$dati){
		
	}
	
	public function delete($tabella,$dati){
		
	} */
}
?>