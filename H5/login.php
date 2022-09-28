<?php

$user = trim($_POST['username']);
$pass = trim($_POST['password']);

try {
    $dbh = new PDO("mysql:host=localhost;dbname=phpschool;port=3306", $user, $pass);
    print"Welkom";
    $dbh = null;
} 
catch (PDOException $e) {
    print "Sorry, geen toegang!" ;
    die();
}
?>