<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/19/2017
 * Time: 6:47 PM
 */
$connection = require_once 'connect_database.php';
echo '<pre>';
// https://www.w3schools.com/php/php_mysql_create.asp
/** @var mysqli $connection */
print_r($connection);
// Create database
$database_name = 'mydb';
$sql = "CREATE DATABASE $database_name";
$mysqli_result = $connection->query($sql);
if ($mysqli_result === TRUE) {
    echo "<div>Database created successfully</div>";
} else {
    $error_message = $connection->error;
    echo "<div>Error creating database: <span style='color:red'>$error_message</span></div>";
}
