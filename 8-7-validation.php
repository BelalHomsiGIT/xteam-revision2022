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
        <input type="text" name="fname-one" id="">
        <input type="text" name="sname-one" id="">
        <input type="submit" name="send-one" value="Send">
        <br>
        <br>
        <input type="text" name="fname-tow" id="">
        <input type="text" name="sname-tow" id="">
        <input type="submit" name="send-tow" value="Send">
    </form>
    <?php

    if( $_SERVER["REQUEST_METHOD"] == "POST" ){
        if( isset($_POST['send-one']) ){
            $f1 = $_POST['fname-one'];
            $s1 = $_POST['sname-one'];

            if( empty($f1) || empty($s1) ){
                echo "Enter All Data. <br> ";
            }else{
                echo "F-Name is: $f1 <br>";
                echo "S-Name is: $s1 <br>";
            }

        }elseif( isset($_POST['send-tow']) ){
            $f2 = $_POST['fname-tow'];
            $s2 = $_POST['sname-tow'];
            
            if( empty($f2) || empty($s2) ){
                    echo "Enter All Data. <br> ";
            }else{
                echo "F-Name is: $f2 <br>";
                echo "S-Name is: $s2 <br>";
            }
        }
    }
    ?>
</body>
</html>