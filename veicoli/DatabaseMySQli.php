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
	
	
	
	public function selectPstm($sql,$columns=array(),$placeholder,$values){
		$db=$this->connetti();
		//$sql = "SELECT (`telaio`,`dimensioni`,`colore`) FROM (`veicolo`) WHERE `codveicolo`=?";
		//$columns=implode(',', $columns);
		$countcolumns=count($columns);
		//print_r($columns);
		//estraggo da un array i valori e li metto in 3 variabili distinte var
		extract($columns,EXTR_PREFIX_ALL,'var');
		//var_dump($var_0);
		//var_dump($var_1);
		//var_dump($var_2);
		$stmt=$db->prepare($sql);
			if($stmt === false) {
				trigger_error('Errore sintassi SQL: ' . $sql . ' Errore: ' . $db->error, E_USER_ERROR);		
			}
		//$values=implode(",", $values);
		$stmt->bind_param($placeholder,$values);
		//eseguo statement
		$stmt->execute();
		if ($stmt->execute()===false) {
			"Query non eseguita";
		}
		// Primo metodo:ottengo risultati con metodo get result
		/* $res = $stmt->get_result();
		while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
			var_dump($row);
		} */
		
		$stmt->bind_result($var_0, $var_1,$var_2);
		while ($stmt->fetch()) {
			printf("%s | %s | %s |<br>", $var_0, $var_1,$var_2);
		}
		$stmt->close();
		
		
	}
	
	/** Metodo che inserisce un singolo record in una tabella di un db
	 * @param string $table Il nome della tabella
	 * @param array string $columns Il nome delle colonne
	 * @param array $values i valori da inserire
	 * @param string $placeholder Il tipo di dato da inserire. Può contenere s,i,b,d; 
	 * @param array string $format=? Inserire tanti ? quanti sono i valori corrispondenti
	 * @return boolean
	 */
	public function insertPstm($table,$columns=array(),$values=array(),$placeholder,$format=array()){
		$db=$this->connetti();
		$sql="INSERT INTO $table (%s) VALUES(%s)";
		//$sql="INSERT INTO $table ($columns) VALUES($format)";
		//INSERT INTO veicolo(telaio,codveicolo,dimensioni,colore) VALUES (NULL,1,'330x162x150','verde menta');
		//creo una stringa con i valori dell'array $columns
		$columns=implode(',', $columns);
		//creo una stringa con i valori dell'array $format
		$format=implode(',', $format);
		//con la funzione sprintf unisco i valori delle 2 variabili $columns e $format in sql
		$sql=sprintf($sql,$columns,$format);
		//creazione del preparement statement
		$stmt=$db->prepare($sql);
		if ($stmt===false) {
			trigger_error('Errore sintassi SQL: ' . $sql . ' Errore: ' . $db->error, E_USER_ERROR);
		}
		//bind_param non accetta array uso la funzione list per dividere array $values in 4 variabili
		//trovare una soluzione più elegante!!!
		list($value1,$value2,$value3,$value4)=$values;
				//passo i parametri a bind parameter
		$bind=$stmt->bind_param($placeholder,$value1,$value2,$value3,$value4);
		//var_dump($stmt);
		 if ($bind===false){
			echo "Parametri non corretti";
		}
		//eseguo la query
		$result=$stmt->execute();
		if($result==false){
			echo 'Query non eseguita!';
		}
		else 
			echo "ID".$stmt->insert_id;
			echo "Righe inserite".$stmt->affected_rows;
					
		//chiudo prepare statement
		$stmt->close();
		//chiudo connessione
		$db=$this->disconnetti();
	}
	
	/** Metodo che cancella un singolo record del db 
	 * @param string $table nome della tabella
	 * @param string $columns nome della colonna
	 * @param mixed $values valori da eliminare
	 * @param string $placeholder
	 * @param string $format Corrisponde a ?
	 */
	public function deletePstm($table,$columns,$values,$placeholder,$format){
		$db=$this->connetti();
		$sql= "DELETE FROM $table WHERE $columns=$format";		
		//apertura prepare statement
		$stmt=$db->prepare($sql);
			if($stmt === false) {
				trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $db->error, E_USER_ERROR);
			}
		$stmt->bind_param($placeholder,$values);
		$ex_sql=$stmt->execute();
		//devo inserire controllo su ID: se una riga è già stata eliminata 
			if($ex_sql===false){ 
				echo 'Query non eseguita!';
			}
			else {
				echo "Riga eliminata".$stmt->affected_rows;
				}
		//chiudo prepare statement
		$stmt->close();
		//chiudo connessione
		$db=$this->disconnetti();
	}
	
	public function updatePstm($table,$data=array(),$conditions=array(),$valcond=array(),$placeholder){
		//UPDATE veicolo SET dimensioni='350x170x150',colore='fucsia' WHERE telaio=0000000020;
		//UPDATE veicolo SET dimensioni='?',colore='?' WHERE campo1=? AND campo2=?
		
		//UPDATE $table SET $data; divido la query in 2 sub query
		$formato='?';
		//creo una stringa con le chiavi dell'array data
		$chiavi=implode(", ",array_keys($data));
		//estraggo i valori dell'array data
		$valori= array_values($data);		
		//ciclo su array data e inserisco i valori nell'array kv per sostituire i valori con ?
		foreach ($data as $chiavi=>$val){
			 //$kv[]=$chiavi.'='.$formato."\r";	
			 $kv[]= sprintf("%s =%s ", $chiavi, $formato);		
		}
		//creo una stringa per la query
		$kv=implode($kv);
		$sql="UPDATE $table SET $kv";
		//creo stringa per le condizioni WHERE O AND
		$conditions=(implode(",",$conditions));
		//estraggo le chiavi dall'array valcond
		$keys=implode(", ",array_keys($valcond));
		//estraggo i valori dall'array valcond
		$values=array_values($valcond);
		//var_dump($values);
		$sql .= 'WHERE';
		//ciclo chiavi e valori dell'array valcond sostituendo i valori con $formato 
		foreach($valcond as $k => $v) {
			 $where[] = sprintf(" %s = %s;", $k, $formato);
		}
		//creo seconda parte della stringa
		$where=implode(',' , $where);
		$sql=$sql.=$where;
		print $sql;
		//unisco i valori degli array valori e values in un unico array sostvalues
		$sostvalues=array_merge($valori,$values);
		
		//connessione al database
		$db=$this->connetti();
		//apro preparament statement e passo la query
		$stmt=$db->prepare($sql);
		//controllo sulla query
		if($stmt === false) {
			trigger_error('Errore SQL: ' . $sql . ' Error: ' . $db->error, E_USER_ERROR);
		}
		//passo i parametri con bind_param
		$stmt->bind_param($placeholder,$sostvalues);
			If($stmt->execute()===false){
				echo 'Query non eseguita!';
				}
				else {
					echo "Valori modificati".$stmt->affected_rows;
				}
		//chiudo prepare statement
		$stmt->close();
		//chiudo connessione
		$db=$this->disconnetti();
	}	
}
?>