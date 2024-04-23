<?php
/* Database credentials. */
define('DB_SERVER', 'mysql.serv00/ct8pl or any');
define('DB_USERNAME', 'yourusername');
define('DB_PASSWORD', 'yourpassword');
define('DB_NAME', 'yourdbname');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>