<?php 

define('BASE_PATH', dirname(dirname(__FILE__)));
define('APP_FOLDER','simpleadmin');
define('BASE_URL', $_SERVER['SERVER_NAME']."");


require_once BASE_PATH.'/lib/MysqliDb.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simpleadmin";
// create connection object

$db =new MysqliDb($servername,$username,$password,$dbname);