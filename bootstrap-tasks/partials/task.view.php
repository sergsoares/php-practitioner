<!-- <?php foreach($tasks as $task): ?>        
    <h3><?= $task['title'] ?> </h3>
    <p> <?= $task['description'] ?></p>
    <strong>Owner:</strong> <?= $task['assigned'] ?>
    <strong>Status:</strong> <?= $task['completed'] ?>
<?php endforeach ?> -->

<?php foreach($tasks as $task): ?>
    <div class="col-md-4">
      <h2> <?= $task['title'] ?> </h2>
      <p> <?php echo $task['description'] ?></p>
      <p><strong> <?= $task['completed'] ?></strong></p>
      <p><a class="btn btn-secondary" href="#" role="button"> <?php echo $task['assigned'] ?>&raquo;</a></p>
    </div>
   <?php endforeach ?>  