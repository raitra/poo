<?php
    require '../app/Autoload.php';
    use App\Autoloader;
use App\Connexion;
use App\Database;

    Autoloader::register();
    
    if(isset($_GET['p'])){
        $page = $_GET['p'];
    }else{
        $page = 'home';
    }

    $db = Connexion::getDatabase();

    ob_start();
    if($page === 'home'){
        require '../pages/home.php';
    }

    if($page === 'article'){
        require '../pages/single.php';
    }

    if($page === 'categorie'){
        require '../pages/categorie.php';
    }

    $content = ob_get_clean();
    require '../pages/template.php';


?>