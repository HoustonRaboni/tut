<?php 
    $name = "john";
    $age = 25;
    $fruits = ['apple', 'banana', 'orange'];

    $message = "My name is  $name and i am $age years old.";
    echo $message;

    // using concatenation operator
    $name = 'alice'; $greeting = 'hello';
    $message = $greeting . ', ' .$name . '!';
    echo $message;

    // using curly braces
    $name = 'Bob'; $age = 22;
    $message = " my name is {$name} and i will be {$age+1} next year.";
    echo $message;

    $message = "i like {$fruits[1]} and not {$fruits[2]}";
    echo $message;

?>