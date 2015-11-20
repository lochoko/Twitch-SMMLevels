<?php

header("Access-Control-Allow-Origin: *");

$dbname = ''; // Enter the Database Name here
$username = ''; // Enter the username to log into MySQL here
$password = ''; // Enter the password to log into MySQL here

$db = new PDO('mysql:host=localhost;dbname='.$dbname.';charset=utf8', $username, $password);
