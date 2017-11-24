<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="1" >

    <title>Studies in PHP</title>
</head>
<body>
    <h1>Welcome 
        <?php 
            
            $name = htmlspecialchars($_GET['name']);
            echo $name;

        ?> 
        to PHP/HTML file testing.</h1>

        <p> I am a new php programmer and for it i need know more about the language.</p>

        <?php 
            echo $_GET['name'];
        ?>
</body>
</html>