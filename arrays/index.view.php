<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Separe your programming in responsabilities </title>
</head>
<body>
    <h1> Separe you PHP <?= $name ?> !</h1>

    <?= 'This is the part of View' ?>
    
    <h2> Subjets to Study</h2>

    <ol>
        <?php
            foreach($subjects as $subject){
                echo "<li> $subject </li>";
            }
        ?>
    </ol>

    <ul>
        <?php foreach($subjects as $subject): ?> 
            <li> <a href="http://www.google.com.br/search?q=<?= $subject ?>">
                <?= $subject ?> 
                </a> 
            </li>
        <?php endforeach ?>
    </ul>
    


</body>
</html>