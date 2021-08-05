<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
    </head>
</html>
<body>
    <!-- Basic HTML -->
    <h1>This IS a PHP Site</h1>
    <br>
    <?php
    // printing to html using echo 
    echo 'Hello Php';
    // can use html code in echo
    echo '<br>';
    echo 'Hello Kasem';
    echo '<br>';
    ?>

    <?php
    // php variable in $ signe
    $name = 'Shawon Talukder';
    $age = 24;
    // echo variable
    echo $name;
    echo '<h3>My Name Is:'.$name.' </h3>';
    echo '<br>';
    echo '<h3>My Age Is:'.$age.' </h3>';
    ?>

</body>