<?php

    $post= $db->prepare('SELECT * FROM articles WHERE id = ? ', [$_GET['id']], 'App\Table\Article');  
?>

<h2 class="text-uppercase">Mich</h2>

