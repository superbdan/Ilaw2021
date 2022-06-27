<?php
//database_connection.php

$connect = new PDO('mysql:host=localhost;dbname=database', 'root', '');
define('CURRENCY', '₱');
session_start();

?>