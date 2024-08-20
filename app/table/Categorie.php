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
        
        public function getUrl(){
            return 'categorie.php?p=categorie';
        }
    }
?>