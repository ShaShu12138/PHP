<?php
$servername = "localhost";
$username = "schooluser";
$password = "12345qwert!";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=phpschool;port=3306", $username, $password);
    echo "连接成功"; 
    foreach($conn->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $conn = null;
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>