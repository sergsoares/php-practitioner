<?php foreach($tasks as $task): ?>        
    <h3><?= $task['title'] ?> </h3>
    <p> <?= $task['description'] ?></p>
    <strong>Owner:</strong> <?= $task['assigned'] ?>
    <strong>Status:</strong> <?= $task['completed'] ?>
<?php endforeach ?>