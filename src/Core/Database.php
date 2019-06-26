<?php
namespace App\Core;
class Database{
	private static $_instance;
	private $connection;
    /**
     * private constructor to prevent duplicate
     */
    private function __construct()
    {
		require_once(APPPATH.'../config/database.php');
    	$this->connection = new \mysqli($database['server'], $database['username'], $database['password'], $database['dbname']);
		// Check connection
		if ($this->connection->connect_error) {
		    echo "Connection failed: " . $this->connection->connect_error;
		}
    }
    // Magic method clone is empty to prevent duplication of connection
	private function __clone() { }
    public static function getInstance() {
        if(self::$_instance == null) {
            // No instance, then create one
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    private function getConnection() {
        return $this->connection;
    }
    public function query($sql){
    	return $this->getConnection()->query($sql);
    }
}