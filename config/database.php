<?php
require(__DIR__.'/db-class.php');

$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "ecommerce";

$db = new db;
$connect = $db->connect($host, $user, $pass, $db_name);
?>