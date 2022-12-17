<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBAL-Validation</title>
</head>
<body>
    <?php
        $fname = $sname = "";
        $formArErr = array();
        if( $_SERVER["REQUEST_METHOD"] == "POST" ){
            $fname = $_POST['fname'];
            $sname = $_POST['sname'];
            if(empty($fname)){
                $formArErr[] = "F-Name is required.";
            }
            if(empty($sname)){
                $formArErr[] = "S-Name is required.";
            }

            }
    ?>
    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method = "POST">
        <input type="text" name="fname" id="" value=<?php echo $fname ?>>
        <br>
        <input type="text" name="sname" id="" value=<?php echo $sname ?>>
        <br>
        <input type="submit" value="Send">
        <br>
    </form>

    <?php
    if(!empty($fname) && !empty($sname)){
        echo "F-Name is: $fname <br>";
        echo "S-Name is: $sname <br>";
    }elseif(count($formArErr) !=0){
        foreach($formArErr as $Err){
            echo $Err . "<br>";
        }
    }
    ?>
</body>
</html>