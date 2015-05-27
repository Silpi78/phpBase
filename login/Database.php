<?php
require_once 'Dbinfo.inc';
/**
 * @author Silvio
 *Classe per connessione con pdo
 */
class Database{
	
	protected $conn;
	
	public function __construct(){
		$pdo = NULL;
		try{
			$pdo = new PDO('mysql:host=localhost;dbname=dbveicoli',DB_USER,DB_PASS);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			echo 'ERROR: ' . $e->getMessage();
		}
		$this->conn = $pdo;
	}
	
	
	public function connetti(){
		return $this->conn;
	}
	
	public function disconnetti(){
		return $this->conn=null;
	}
	
	public function select($sql){
		$con=$this->connetti();
		$res=$con->query($sql);
		If($stmt===false){
			"Select non eseguita";
		}
		return $res;
	}
	
	public function update($sql){
		$con=$this->connetti();
		$
	}
}
?>