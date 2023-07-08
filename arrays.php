<?php 

//indexed array
$fruits = ['apple', 'bananas', 'orange'];
echo $fruits[2].'<br>';
print_r($fruits);echo '<br>';// human readable func

//associaive array
$person = [
    'name'=> 'john', 
    'age'=> 40, 
    'city'=> "new York"
];
echo $person['city'].'<br>';
print_r($person);echo '<br>';// human readable func

//Multidimensional array
$martix = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
echo $martix[2][1];echo '<br>';
print_r($martix);echo '<br>';
$martix[3][] = 2;
print_r($martix);echo '<br>';;

//LOOPING THRU ARRAY
foreach ($fruits as $fruit){
    echo $fruit . '<br>';
}
$colors=['apple'=>'red', 'banana'=>'yellow', 'orange'=>'orange'];
foreach ($colors as $fruit =>$color){
    echo $fruit .' is '. $color . '<br>';
}

$students = [
    ['john',25, 'newyork'],
    ['alice', 28, 'london'],
    ['Bob',22,'paris']
];

foreach ($students as $student){
    foreach($student as $value){
        echo $value . ', ';
    }
    echo '<br>';
}

//appending elements
$fruits[4] = 'KIWI';
print_r($fruits);echo '<br>';

//DELETING ELEMENT/an array
unset($fruits[4]);
print_r($fruits);echo '<BR>';

/** SOME PHP ARRAY FUNCTIONS
 * count(): Returns the number of elements in an array.
- array_push(): Adds one or more elements to the end of an array.
- array_pop(): Removes and returns the last element of an array.
- array_shift(): Removes and returns the first element of an array.
- array_unshift(): Adds one or more elements to the beginning of an array.
- in_array(): Checks if a value exists in an array.
- array_search(): Searches for a value in an array and returns its corresponding key.
- sort(): Sorts an array in ascending order.
- rsort(): Sorts an array in descending order.
- array_slice(): Extracts a portion of an array.
- array_merge(): Merges one or more arrays into a single array.
- array_filter(): Filters elements of an array based on a callback function.
 * 
 */

 echo count($fruits).'<BR>';
 echo count($martix).'<BR>';
 echo count($person).'<BR>';
 $COMBINE = array_merge($fruits, $colors);
 print_r ($COMBINE);

 echo (is_array($FRED)) ? "IS ARRAY": "IS NOT";echo "<br>";
 ECHO shuffle($fruits);echo "<br>";
 print_r($fruits);echo "<br>";

 $temp = explode('***', "A***sentence***with***asterisks");
 print_r($temp);echo "<br>";

  $fname = "Doctor";
 $sname = "Who";
 $planet = "Gallifrey";
 $system = "Gridlock";
 $constellation = "Kasterborous";

 $contact = compact('fname', 'sname', 'planet', 'system','constellation');
 print_r($contact);
?>