<?php

include 'config.php';

$chan = $_GET['chan'];

foreach($db->query('SELECT * FROM makerlevels WHERE (STATUS = "n" or STATUS = "s") AND CHAN = "'.$chan.'" ORDER BY DATETIME LIMIT 1') as $row) {
   echo '<div id="ID" style="visibility: hidden;">'.$row['ID'].'</div><div id="TID">'.$row['TID'].'</div> <br><br> <div id="GID">'.$row['GAMEID']."</div><br>"; //etc...
}

?>