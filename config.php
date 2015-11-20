<?php

header("Access-Control-Allow-Origin: *");

$db = new PDO('mysql:host=localhost;dbname=<DB Name>;charset=utf8', '<USERNAME>', '<PASSWORD>');
