<?php
ob_start();
$host = "http://www.google.com/search";
$google = "Location:" . $host ."?q=" . $search;
header($google);
exit();
ob_flush();
?>