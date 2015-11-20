<?php

include 'config.php';

$datesearch = $_GET['date'];

//SELECT * FROM `calendar` WHERE DATE(startTime) = '2010-04-29'

echo '<div id="list">';
foreach($db->query('SELECT * FROM makerlevels WHERE DATE(DATETIME) = "'.$datesearch.'"') as $row) {
   echo '<div id="TID">'.$row['TID'].'</div><div id="GAMEID">'.$row['GAMEID']."</div>"; //etc...
   
   if ($row['STATUS'] == "N") {
   	echo '<div id="PSTATUS"> Status: Not Played.</div><br>';
   } elseif ($row['STATUS'] == "S") {
   	echo '<div id="PSTATUS"> Status: Skipped.</div><br>';
   } elseif ($row['STATUS'] == "P") {
   	echo '<div id="PSTATUS"> Status: Played.</div><br>';
   };
   
};

echo '</div>';
?>