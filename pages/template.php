<?php

use App\Connexion;
use App\Table\Article;
use App\Table\Categorie;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog</title>
    <link rel="stylesheet" href="../src/main.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container flex-fill">

        <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php Article::getUrl(); ?>">Article</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../pages/categorie.php">Categorie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Other</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
        </ul> 
    
        <?php echo $content; ?>
    </div>
    
    <footer class="bg-body-tertiary text-center text-lg-start py-3">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2020 Copyright:
            <a class="text-body" href="https://mdbootstrap.com/">Raitra.com</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>