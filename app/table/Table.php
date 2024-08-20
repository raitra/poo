<?php
    namespace App\Table;

    use App\Connexion;

    class Table
    {
        protected static $table;

        private static function getTable()
        {
            if(self::$table === null){
                $class_name = explode('//', get_called_class()); 
                self::$table = strtolower(end($class_name). 's');
                var_dump(self::$table);
            }
            return self::$table;
        }

        public static function getAll()
        {
            return Connexion::getDatabase()->query(
                'SELECT * FROM '.self::$table.' '
            );
        }
    }
?>