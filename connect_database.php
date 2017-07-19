<?php
$database_connector = new mysqli();
$db_host = 'localhost';
$database_connector->connect($db_host);//database server is 'localhost' (XAMPP default database)
$mysql_username_login = 'root';
$mysql_password = '';
$database_connector->change_user($mysql_username_login, $mysql_password, null);
return $database_connector;
