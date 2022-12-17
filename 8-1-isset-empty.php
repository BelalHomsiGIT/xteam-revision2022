<?php

/* isset(variable, ....);
    variable:	Required. Specifies the variable to check
    ...:    	Optional. Another variable to check

- The isset() function checks whether a variable is set,
  which means that it has to be declared and is not NULL.

- This function returns true if the variable exists and is not NULL,
  otherwise it returns false.

- Note: If multiple variables are supplied, then this function will return true 
        only if all of the variables are set.

- Tip: A variable can be unset with the unset() function.

** Return Value: TRUE if variable exists and is not NULL, FALSE otherwise.
*/

$test = ''; // it's not null, it's empty string variable.
if(isset($test)){
    echo "test is set" . "<br>";
    echo 'var_dump($test) ==> ';
    var_dump($test);
    echo "<br>";
}else{
    echo "test is not set" . "<br>";
    echo 'var_dump($test) ==> ';
    var_dump($test);
    echo "<br>";
}

echo "<br>";

$any = null; // it's not set, it's NULL
if(isset($any)){
    echo "any Var is set" . "<br>";
    echo 'var_dump($any) ==> ';
    var_dump($any);
}else{
    echo "any Var is not set" . "<br>";
    echo 'var_dump($any) ==> ';
    var_dump($any);
}

echo "<br>";
echo "<br>";
/* empty(variable) - variable:	Required. Specifies the variable to check.
    
- The empty() function checks whether a variable is empty or not.

- This function returns 'false' if the variable 'exists and is not empty',
  otherwise it returns true.

* The following values evaluates to empty:
        0
        0.0
        "0"
        ""
        NULL
        FALSE
        array()
*/
$var = "";
if(empty($var)){
    echo "var is empty. <br>";
    echo 'var_dump($var) ==> ';
    var_dump($var);
    echo "<br>";
}else{
    echo "var = $var is not empty. <br>";
    echo 'var_dump($var) ==>';
    var_dump($var);
    echo "<br>";
}

echo "<br>";
$var = 50;
if(empty($var)){
    echo "var is empty. <br>";
    echo 'var_dump($var) ==> ';
    var_dump($var);
    echo "<br>";
}else{
    echo "var = $var is not empty. <br>";
    echo 'var_dump($var) ==>';
    var_dump($var);
    echo "<br>";
}