<?php 
   
   // Constants variable
   define("ROOT_LOCATION",  "/C:\xampp\htdocs\tut");
   $temp = "The date is"; // 
   global $isLoggedIn; // global var
   //returning function
   function longdate($timestamp, $temp){
    return  $temp.date("l F jS Y", $timestamp);
   }
   echo longdate(time(), $temp)."<br>";
   //print_r( $_SERVER);
   //print_r( $GLOBALS);
   echo "a: [ " . (20 > 9) . "]<br>";
   echo "b: [ " . (5== 6) . "]<br>";
   echo "c: [ " . (1 == 0) . "]<br>";
   echo "d: [ " . (1 == 1) . "]<br>";

   $a = 2; $b = 3;
   if ($a < $b) {
    # code...
    echo "$a is greater than $b<br>";
   }

   //switch case
$page = null;
switch ($page)
 {
 case "Home":
 echo "You selected Home";
 break;
 case "About":
 echo "You selected About";
 break;
 case "News":
 echo "You selected News";
 break;
 case "Login":
 echo "You selected Login";
 break;
 case "Links":
 echo "You selected Links";
 break;
 default:
 echo  "Unrecognized selection";
 break;
 }

 echo $fuel <= 1 ? 'fill tank now<br>': "There's enough fuel<br>";

 //looping
 $fuel = 10;
 while ($fuel >= 1) {
    # code...
    echo "There's enough fuel<br><br>";
    $fuel--;
 }

 $count = 1;
 while ($count <= 12) {
    # code...
    echo "$count times 12 is " .$count * 12 . "<br>";
    if ($count == 5) break;
    $count++;
 }
 $c=5; $r=6;
 echo $k = $c/$r."<br>";
 echo $y = (int)($c/$r);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    
    
</body>
</html>