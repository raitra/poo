<?php
    require '../app/Autoload.php';
    use App\Autoloader;

    Autoloader::register();
    
    if(isset($_GET['p'])){
        $page = $_GET['p'];
    }else{
        $page = 'home';
    }


    ob_start();
    if($page === 'home'){
        require '../pages/home.php';
    }

    $content = ob_get_clean();
    require '../pages/template.php';


?>