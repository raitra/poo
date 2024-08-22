<?php
    namespace App\Table;

use App\Connexion;
use App\Database;

    class Article
    {

        private static $table = 'articles';

       public static function getLast()
       {
            return Connexion::getDatabase()->query(
                'SELECT articles.id,articles.title, articles.description, categories.titre
                FROM articles LEFT JOIN categories
                ON categorie_id = categories.id', __CLASS__
            );
       }
       
        public static function getUrl()
        {
            return 'index.php?p=article';
        }

        public static function getAll(){
            return Connexion::getDatabase()->query(
                'SELECT * FROM '. self::$table . ''             
            );
        }

        

        public function getExtrait()
        {
            return '<p>'.$this->content .'</p>';
        }

        public function __get($name)
        {
            $method = 'get' . ucfirst($name);
            $this->$name = $this->$method;
            return $this->$name;
        }
    }
?>