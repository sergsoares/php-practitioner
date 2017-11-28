<?php require('partials/header.view.php'); ?> 
        <h1>TODO</h1>
        
        <ul>
            <?php foreach($tasks as $task): ?>
                <li> 
                    <?= $task->description ?>
                </li>
            <?php endforeach ?>
        </ul>

<?php require('partials/footer.view.php'); ?> 