<?php

class Database {
	private $_connection;
	private static $_instance;
	private $_host = "sunrice";
    private $_username = "root";
	private $_password = "";
	private $_database = "sunrice";
	
	public static function getInstance(){
		if(!self::$_instance){
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	private function __construct() {
		$this->_connection = new \mysqli($this->_host, $this->_username, $this->_password, $this->_database);
	}

	public function query($query){
         //echo $query;
        return $this->_connection->query($query);
    }
	
	public function query_one($query) {
        //var_dump($query);
		return  $this->_connection->query($query)->fetch_assoc();
	}

	public function query_all($query){
		//echo ($query);
      	$result = $this->_connection->query($query);
        $res=[];
        foreach($result as $val){
            $res[] = $val;
        }
        return $res;
    }
    protected function __clone() {}
}	

