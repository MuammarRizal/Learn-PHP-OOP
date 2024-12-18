<?php 
    class Connection {
        protected $link,$database,$username,$password,$host,$port;

        public function __construct($database,$username,$password,$host,$port){
            $this->database = $database;
            $this->username = $username;
            $this->password = $password;
            $this->host = $host;
            $this->port = $port;
            $this->connect();
        }

        public function __sleep(){
            return array('host','port','username','password','database');
        }

        public function __wakeup(){
            $this-> connect();
        }

        public function connect(){
            $this->link = new PDO(sprintf('mysql:host=%s;port=%d;dbname=%s', $this->host, $this->port, $this->database), $this->username, $this->password);
        }
    }
?>