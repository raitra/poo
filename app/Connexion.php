<?php
    namespace App;

    class Connexion {
        const DB_NAME = 'blog';
        const DB_HOST = 'localhost';
        const DB_PASS = '';
        const DB_USERNAME = 'root'; 
        private static $database;

        private static $title = 'Mon Blog';

        public static function getTitle(){
            return self::$title;
        }

        public function setTitle($title){
            $this->title = $title;
        }

        public static function getDatabase()
        {
            if(self::$database === null){
                self::$database = new Database(self::DB_NAME, self::DB_USERNAME, self::DB_PASS, self::DB_HOST);
            }
            return self::$database;
        }
    }
?>