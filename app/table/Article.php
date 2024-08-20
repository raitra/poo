<?php
    namespace App\Table;

use App\Connexion;
use App\Database;

    class Article
    {
       public static function getLast()
       {
            return Connexion::getDatabase()->query(
                'SELECT articles.id,articles.title, articles.description, categories.titre
                FROM articles LEFT JOIN categories
                ON categorie_id = categories.id', __CLASS__
            );
       }
       
        public function getUrl()
        {
            return 'index.php?p=article&id='. $this->id;
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