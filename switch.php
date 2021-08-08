<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch</title>
</head>
<body>
    <h2>Switch Statement</h2>
    <?php
    $grade = 'F';
// In Switch Switch like IF else Statement
    switch($grade){
        case 'A':
        echo '<h4 style="color: blue">wow</h4>';
        break;
        case 'B':
        echo '<h4 style="color: red">Nice</h4>';
        break;
        default:
        echo '<h4 style="color: red">Failed</h4>';
        break; 
    }
    
    ?>
</body>
</html>