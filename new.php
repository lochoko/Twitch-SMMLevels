<?php

include 'config.php';

$tid = $_GET['tid'];
$gid = $_GET['gid'];
$chan = $_GET['chan'];

// $stmt = $db->query('UPDATE makerlevels SET STATUS = "P" WHERE ID = '.$gid);


$gid = preg_replace('/\s+/', '', $gid);
$gid = strtoupper($gid);

if (strlen($gid) > 19) {

echo $tid.", your Game ID has too many characters. Please try again.";

} elseif (strlen($gid) < 19) {

echo $tid.", your Game ID is missing characters. Please ensure it is correct and looks like this: 1111-2222-3333-4444.";

} elseif (preg_match("/[[:alnum:]]{4}-[[:alnum:]]{4}-[[:alnum:]]{4}-[[:alnum:]]{4}/", $gid) == 0 ) {

echo $tid.", there is something wrong with your Game ID. Please ensure it is correct and looks like this: 1111-ABCD-3333-EFGH.";

} else {
$stmt = $db->prepare("INSERT INTO makerlevels(TID, GAMEID, STATUS, DATETIME, CHAN) VALUES(:field1,:field2,:field3,:field4,:field5)");
$stmt->execute(array(':field1' => $tid, ':field2' => $gid, ':field3' => "N", ':field4' => date('Y-m-d H:i:s'), ':field5' => $chan ));
$affected_rows = $stmt->rowCount();

// $stmt = $db->query('INSERT INTO makerlevels(DATETIME, TID, GAMEID, STATUS) VALUES("'.$tid.'", "'.$gid.'", "N")');
echo $tid.", your level has been added.";

};
?>