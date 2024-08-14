<?php

use App\Database;
    $db = new Database('blog');
    $data = $db->query('SELECT * FROM articles');
?>

<h1>Home page</h1>
<ol class="list-group list-group-numbered">
    <?php foreach ($data as $item): ?>        
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold"><?php echo $item->title ?></div>
                <?php echo $item->description; ?>
            </div>
            <!-- <span class="badge text-bg-primary rounded-pill">14</span> -->
        </li>
    <?php endforeach; ?>

</ol>
