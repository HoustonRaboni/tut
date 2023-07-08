<?php

$fruits = ['apple', 'banana', 'orange'];
//search for a value
if(in_array('banana', $fruits)){
    echo 'found';
}

// search  for a value and get its key
$key = array_search('orange', $fruits);
echo $key; //output: 2

//check if a key exists
if (array_key_exists(1, $fruits)) {
    echo 'key exists';
}

?>