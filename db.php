<?php
$servername = "quiz789.database.windows.net";
$username = "admin123"; 
$password = "admin@123"; 
$dbname = "quiz456"; 

$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    echo "Connection Successful";
}
?>
