<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBAL-Validation</title>
</head>
<body>
    <form action = "<?php echo $_SERVER["PHP_SELF"] ?>" method = "POST">
        <input type="text" name="fname" id="" required>
        <input type="text" name="sname" id="" required>
        <input type="submit" name="send" value="Send">
        <br>
    </form>
    <?php

    if( $_SERVER["REQUEST_METHOD"] == "POST" ){
            $f1 = $_POST['fname'];
            $s1 = $_POST['sname'];
            echo "F-Name is: $f1 <br>";
            echo "S-Name is: $s1 <br>";
        }
    ?>
</body>
</html>