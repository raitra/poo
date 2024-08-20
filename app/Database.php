<?php
    namespace App;
    use \PDO;

    class Database{
        private $db_name;
        private $db_host;
        private $db_user;
        private $db_password;
        private $pdo;

        public function __construct($db_name, $db_user='root', $db_password='', $db_host='localhost')
        {
            $this->db_host = $db_host;
            $this->db_name = $db_name;
            $this->db_user = $db_user;
            $this->db_password = $db_password;
                
        }

        public function getPdo(){
            if($this->pdo === null){
                $pdo = new PDO('mysql:dbname=blog;host=127.0.0.1', 'root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo = $pdo;
            }
            return $this->pdo;
        }

        public function query($statement){
            $req = $this->getPdo()->query($statement);
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }

        public function prepare($statement, $attributes, $class_name, $one= false)
        {
            $req = $this->getPdo()->prepare($statement);
            $req->execute($attributes);
            $req->fetchAll(PDO::FETCH_CLASS, $class_name);
            if($one){
                $data = $req->fetch();
            }else{
                $data = $req->fetchAll();
            }
            return $data;
        }
    }
?>