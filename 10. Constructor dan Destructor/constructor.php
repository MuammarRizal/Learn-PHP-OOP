<?php 
    class Connection{
        private $host; 
        private $port; 
        private $username; 
        private $password;
        private $database;
        public function __construct(string $username="admin",string $password="",string $database,string $host="localhost",string | int $port = 3306){
            $this->host = $host;
            $this->port = $port;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }
        public function connect(){
		    return new PDO(sprintf('mysql:host=%s;port=%d;dbname=%s', $this->host, $this->port, $this->database), $this->username, $this->password);
	    }
    }

    $connection = new Connection("root","","admin");
    echo $connection->connect();
?>