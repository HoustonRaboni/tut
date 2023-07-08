<?php

print("print is a pseudo-function<br>");
print "print doesn't require parentheses<br>";
print strrev(".dlrow olleh"); // Reverse string
echo str_repeat("Hip ", 2);// Repeat string
echo strtoupper("hooray!<br>"); //String to uppercase

echo fix_names("WILLIAM", "henry", "gatES");

function fix_names ($n1,$n2,$n3){
    $n1 =ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
    return $n1." " . $n2 ." " . $n3;
}

function myFun (){
    return "my fuction";
}

echo function_exists("array_combine");
print function_exists("phpinfo")."<br>";
print phpversion();
$sound = myFun();
echo $sound;

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function</title>
</head>
<body>

</body>
</html>