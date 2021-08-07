<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP IF Statement</title>
</head>
<body>
    <?php
    echo '<h2>IF Statement</h2>';

    $grade = 80;

    if($grade >= 50){
        echo '<h4 style="color: green">Passed</h4>';        
    }
    elseif($grade>= 70){
        echo '<h4 style="color: blue">Amaizing</h4>';
    }
    else{
        echo '<h4 style="color: red">Failed</h4>';
    }
    ?>
</body>
</html>