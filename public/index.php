<?php
    require '../app/Autoload.php';
    use App\Autoloader;
use App\Connexion;
use App\Database;

    Autoloader::register();
    
    $page = isset($_GET['p']) ? $_GET['p'] : 'home';    
    $db = Connexion::getDatabase();


    ob_start();
    if($page === 'home'){
        require '../pages/home.php';
    }elseif($page === 'article'){
        require '../pages/single.php';
    }elseif($page === 'categorie'){
        require '../pages/categorie.php';
    }else{
        echo 'Page d\' erreur';
    }

    $content = ob_get_clean();
    require '../pages/template.php';


?>