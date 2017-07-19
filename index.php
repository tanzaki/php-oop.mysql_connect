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
$sql_create_table_tasks = 'CREATE TABLE `tasks` ( `id` INT NOT NULL AUTO_INCREMENT , `title` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';
echo '<div style="color:Blue">INFO: this SQL string was auto-generated from <a href="//localhost/phpmyadmin" target="_blank">phpMyAdmin</a></div>';
$mysqli_result = $connection->query($sql_create_table_tasks);
if ($mysqli_result) {
    echo "<div style='color:Green'>Table 'tasks' created successfully</div>";
} else {
    echo "<div style='color:Red'>Error creating table: $connection->error</div>";
}
