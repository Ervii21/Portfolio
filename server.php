
<?php
// Define database connection variables
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'erviicms';

// Create connection
$connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>