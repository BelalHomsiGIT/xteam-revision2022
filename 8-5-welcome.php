<?php
    // Note: we can use $_REQUEST instead of the $_GET or $_POST.
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if( isset($_REQUEST['uname'], $_REQUEST['pass']) ){
            if(empty($_REQUEST['uname']) || empty($_REQUEST['pass']) ){
                echo "Enter the all DATA. <br>";
            }else{
                echo "Name is: " . $_REQUEST['uname'] . "<br>";
                echo "Pass is: " . $_REQUEST['pass'] . "<br>";  
            }
        }else{
            echo "No DATA !";
        }
    }else{
        echo "You cann't browse this page directly!!!";
    }
    //if we type in address bar : http://localhost/xteam-revision2022/8-5-welcome.php
    //directly, we get the : You cann't browse this page directly!!!

?>