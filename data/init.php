<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_database = 'xz';
$db_port = 3306;
$db_charset = 'UTF8';

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_database, $db_port);

header('Access-Control-Allow-Origin:http://localhost:8100');
header('Access-Control-Allow-Credentials:true');

mysqli_query($conn, "SET NAMES $db_charset");