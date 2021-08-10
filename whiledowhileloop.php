<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php While Loop</title>
</head>
<body>
    <h1>While Loop</h1>
    <?php
    $grade=0;
    // Infinite Loop.
    /*while($grade<10){
        echo '<p>Less than 10</p>';
    }*/
    // Pre-Condition Loop
    while($grade<10){
        echo '<p>Less than 10</p>';
        $grade++;
    }
    ?>
    <h1>Do While Loop</h1>
    
    <?php
    // Post-Condition Loop
    $grade=0;
    do{
        echo '<p>I am do while loop</p>';
        $grade++;
    }while($grade<10);
    echo 'Exit Loop';
    ?>
    
</body>
</html>