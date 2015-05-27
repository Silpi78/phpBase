<?php
	/** Classe che rappresenta la tabella utente 
	 * @author Silvio
	 *
	 */
	class Utente{
		private $idUtente;
		private $nome;
		private $cognome;
		private $email;
		private $username;
		private $password;
		
		/**
		 * @param int $idUtente
		 * @param string $nome
		 * @param string $cognome
		 * @param string $email
		 * @param string $username
		 * @param string $password
		 */
		public function __construct($idUtente,$nome,$cognome,$email,$username,$password){
			$this->idUtente=$idUtente;
			$this->nome=$nome;
			$this->cognome=$cognome;
			$this->email=$email;
			$this->username;
			$this->password;
		}
		
		/**
		 * @return int Restituisce ID utente 
		 */
		public function getidUtente() {
			return $this->idUtente;
		}
		
		/**
		 * @param int $idUtente 
		 */
		public function setidUtente($idUtente){
			$this->idUtente=$idUtente;
		}
		
		/**
		 * @return string Restituisce Nome dell'utente
		 */
		public function getNome(){
			return $this->nome;
		}
		
		/**
		 * @param string $nome Modifica il nome dell'utente
		 */
		public function setNome($nome){
			$this->nome=$nome;
		}
		
		/**
		 * @return string Ritorna il cognome dell'Utente
		 */
		public function getCognome(){
			return $this->cognome;
		}
		
		/**
		 * @param string $cognome Modifica il cognome dell'utente
		 */
		public function setCognome($cognome){
			$this->cognome=$cognome;
		}
		
		/**
		 * @return string Restituisce email dell'utente
		 */
		public  function getEmail(){
			return $this->email;
		}
		
		/**
		 * @param string $email Modica l'email dell'utente
		 */
		public function setEmail($email){
			$this->email=$email;
		}
		
		/**
		 * @return string Restituisce username dell'utente
		 */
		public function getUsername(){
			return $this->username;
		}
		
		/**
		 * @param string $username Modifica username utente
		 */
		public function setUsername($username){
			$this->username=$username; 
		}
		
		/**
		 *  @return string Ritorna la password dell'utente
		 */
		public function getPassword(){
			return $this->password;
		}
		
		/**
		 * @param string $password Modifica la password dell'uetente
		 */
		public function setPassword($password){
			$this->password=$password;
		}
		
		/**
		 * @return string Ritorna una stringa con i dati dell'utente
		 */
		public function __toString(){
			return "Nome: $this->nome. Cognome: $this->cognome .Email: $this->email .Username:$this->username .Password:$this->password";		
		}
	}
?>