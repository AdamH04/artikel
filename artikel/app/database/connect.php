<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_connect = 'artikel';

$conn =  new MySQLi($host,$user,$password,$db_connect);

if($conn->connect_error){
    die('database connection error:'. $conn->connect_error);
}
?>

