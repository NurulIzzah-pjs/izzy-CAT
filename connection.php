<?php
$servername = "localhost";
$username = "CatDBuser";
$password = "CatDBpassword";
$db_name = "psj";
$conn = new mysqli($servername, $username, $password, $db_name, 3306);
if ($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo "";
?>