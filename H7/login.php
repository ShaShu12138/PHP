<?php
session_start();

$user = trim($_POST['username']);
$pass = trim($_POST['password']);

if(isset($_POST['login'])){
try {
    $dbh = new PDO("mysql:host=localhost;dbname=phpschool;port=3306", $user, $pass);
    echo "Welkom, ".$user;
    $dbh = null;
} 
catch (PDOException $e) {
    header('refresh:3; url=index.html');
    echo 'Naam en wachtwoord niet kloppen';
    die();
}
}

if(isset($_POST['logout'])){
    header('refresh:0;url=index.html');
    die();
}
?>