<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBAL-Validation</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <input type="text" name="uname" id="">
        <input type="password" name="pass" id="">
        <input type="submit" value="Send">
    </form>
    <?php
        if( isset($_GET['uname'], $_GET['pass'])  &&
             !empty($_GET['uname']) && 
             !empty($_GET['pass']) ) {

               echo "Name is: " . $_GET['uname'] . "<br>";
               echo "Pass is: " . $_GET['pass'] . "<br>";   
               
        }else{
            echo "No DATA !";
        }
    
        
        
    ?>
</body>
</html>