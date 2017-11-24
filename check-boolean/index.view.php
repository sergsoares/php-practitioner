<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        
        <h2> <?= $task['title'] ?> </h2>
        <ol>
            <li> <?= $task['due'] ?></li>
            <li><?= $task['assigned'] ?></li>
            <li><?= $task['completed'] ? '&#10003;' : 'Incompleted' ?></li>
        </ol>
    </body>
</html>