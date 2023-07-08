<?php

session_start();

//rest of your PHP code

//setting a cookie
setcookie('username', 'John doe', time() + 3600); //Cookies expire in 1 hour

// accessing a cookies
echo $_COOKIE['username']; // output John Doe

//set session variables
$_SESSION['username'] = 'John Doe';
$_SESSION['role'] = 'Admin';

// get session variables
echo $_SESSION['username'];

// End the session and clear session
session_destroy();

//unset the session cookie
setcookie(session_name(), '', -3600);

?>