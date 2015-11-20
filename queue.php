<?php

include 'config.php';

$qcount = $_GET['c'];

//SELECT * FROM `calendar` WHERE DATE(startTime) = '2010-04-29'

if ($qcount == "total") {

$stmt = $db->query('SELECT * FROM makerlevels WHERE STATUS = "N" or STATUS = "S"');
$count = $stmt->rowCount();

$stmt = $db->query('SELECT * FROM makerlevels WHERE STATUS = "N" or STATUS = "S" ORDER BY DATETIME LIMIT 6');
$count--;

echo '</div><div id="Status">Queue: '.$count.'<br><br>Next 5 Levels:<br>';

$rcount = 1;
$isFirst = True;

 foreach($stmt as $row) {
   if ($isFirst == True) {
   $isFirst = False;
   continue;
   }
   echo $rcount.'. '.$row['TID'].'<br>'; //etc...
   $rcount++;
 };
echo "</div>";

} else {

$rcount = 0;
$qcount++; 

 foreach($db->query('SELECT * FROM makerlevels WHERE STATUS = "N" or STATUS = "S" ORDER BY DATETIME LIMIT '.$qcount) as $row) {
    if ($rcount == 0) {
	echo 'Current: '.$row['TID'].' -- Up Next: '; //etc...
   } else {
    echo '- '.$rcount.'. '.$row['TID'].' '; //etc...
 
   };
   $rcount++;
 
 };
   
};

?>