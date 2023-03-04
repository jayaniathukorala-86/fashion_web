<?php
$dbhost = "";
$dbport = "3306";
$dbname = "fashion_Web";
$charset = 'utf8' ;

$username = "fcadmin";
$password = "fcadmin123";

$link = new mysqli($dbhost, $username, $password, $dbname, $dbport);
?>