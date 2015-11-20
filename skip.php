<?php

include 'config.php';

$sid = $_GET['sid'];
$dtime = date('Y-m-d H:i:s');


$stmt = $db->query('UPDATE makerlevels SET DATETIME = "'.$dtime.'", STATUS = "S" WHERE ID = '.$sid);

$affected_rows = $stmt->rowCount();

if ($affected_rows == 1) {
echo "Level Skipped."; 
} else {

echo "There was an error. Try again.  ".$affected_rows." ".$dtime." ".$sid;
};

?>