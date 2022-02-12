<?php
    class db{
        private $host = "localhost";
        private $user = "root";
        private $pwd = "root";
        private $dbName = "ticketsDB";


        protected function connect(){
            // $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            // $pdo = new PDO($dsn, $this->user, $this->pwd);
            // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            // return $pdo;

            $conn = mysqli_connect($this->host,$this->user,$this->pwd,$this->dbName);   
            
            if(!$conn){
                echo("connection error");
                die();
            }
            return $conn;
        }
    }
?>