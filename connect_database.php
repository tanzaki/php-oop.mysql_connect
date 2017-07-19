<?php
echo '<div>connecting to database</div>';
$database_connector = new mysqli();
$db_host = 'localhost';
$database_connector->connect($db_host);//database server is 'localhost' (XAMPP default database)
return '<div>This string will be returned to function require_once()</div>';
