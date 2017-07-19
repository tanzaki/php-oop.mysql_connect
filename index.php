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
// Create database
$database_name = 'mydb';
$sql = "CREATE DATABASE $database_name";
$connection->query($sql);
