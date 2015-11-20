<?php

include 'config.php';

$gid = $_GET['id'];
$reason = $_GET['rsn'];

if ($reason == "Next") {

$stmt = $db->query('UPDATE makerlevels SET STATUS = "P" WHERE ID = '.$gid);

echo "Loading next level.";

} else {

echo $reason;

};

?>