<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'mysql';

$con = mysqli_connect($db_host, $db_user, $db_password, $db_db);
if(mysqli_connect_errno())
{
    echo "Failed to connect to SQL database".mysqli_connect_error();
}
?>

