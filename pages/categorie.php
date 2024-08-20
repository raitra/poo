<?php

use App\Connexion;
use App\Table\Categorie;
    $data = Categorie::getAll();
    var_dump($data);
?>

<h1>Classe des categories.</h1>
<ol class="list-group list-group-numbered">
    <?php foreach ($data as $item): ?>        
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold"><?php echo $item->titre ?></div>
                <?php echo $item->descritpion; ?>
            </div>
            <!-- <span class="badge text-bg-primary rounded-pill"></span> -->
        </li>
    <?php endforeach; ?>

</ol>