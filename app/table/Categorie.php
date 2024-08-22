<?php 
    namespace App\Table;

use App\Connexion;

    class Categorie  
    {
        private static $table = 'categories';

        public static function getAll()
        {
            return Connexion::getDatabase()->query(
                'SELECT * FROM '.self::$table.' '
            );
        }
        
        public static function getUrl(){
            return '../../pages/index.php?p=categorie';
        }
    }
?>