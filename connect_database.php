<?php
echo '<div>connecting to database</div>';
$database_connector = new mysqli();
$database_server_hostname = 'localhost';
$database_connector->connect($database_server_hostname);//database server is 'localhost' (XAMPP default database)
return '<div>This string will be returned to function require_once()</div>';
