<?php
use App\Connexion;
use App\Table\Article;
use App\Table\Categorie;
    
    $data = Categorie::getAll();
    $article = Article::getAll();    
?>

<h1>Classe des categories.</h1>
<ol class="list-group list-group-numbered">
    <?php foreach ($data as $item): ?>        
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold"><?php echo $item->descritpion ?></div>                
                <?php foreach ($article as $ar):?>                    
                    <p>                        
                        <?php if($ar->categorie_id === $item->id){
                            echo $ar->title; 
                        } 
                        ?> 
                    </p>
                <?php endforeach ?>     
            </div>
            <span class="badge text-bg-primary rounded-pill"><?php echo $item->titre ?></span>
        </li>
    <?php endforeach; ?>

</ol>