<?php

include_once "constants.php";

class Database {
	
    private $host = HOST_BD;
    private $user = USER_BD;
    private $password = PASSWORD_BD;
    private $database = DATABASE_BD;
	
	protected $connection = null;
	
    public function __construct() {
        try {
            $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);
    	
            if ( mysqli_connect_errno()) {
                throw new Exception("Could not connect to database.");   
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());   
        }			
    }
	
    public function execute($query = "", $formats = "", $params = []) {
        try {
            $stmt = $this->executeStatement( $query, $formats, $params );
			$stmt->close();
            return $stmt;
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }
        return false;
    }
	
	public function select($query = "", $formats = "", $params = []) {
        try {
            $stmt = $this->executeStatement( $query, $formats, $params );
            $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
			$stmt->close();
            return $result;
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }
        return false;
    }
	
    private function executeStatement($query = "", $formats = "", $params = []) {
        try {
            $stmt = $this->connection->prepare( $query );
            if($stmt === false) {
                throw New Exception("Unable to do prepared statement: " . $query);
            }
            if( $params ) {
				$values = array_values($params);
                $stmt->bind_param($formats, ...$values);
            }
            $stmt->execute();
            return $stmt;
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }	
    }
	
} // End class

?>
