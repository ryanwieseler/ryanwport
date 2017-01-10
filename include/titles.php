<?php 
/*
* Ensure that the double quotes works.
*/

$page = basename($_SERVER['SCRIPT_NAME']);
$loc = 'seattle, wa';
$r = 'ryanw.';

if ($page == 'index.php') { echo "$r | web design | $loc";}
if ($page == 'service.php') { echo "$r | service | $loc"; }
if ($page == 'portfolio.php') { echo "$r | portfolio | $loc"; }
if ($page == 'about.php') { echo "$r | about | $loc"; }
if ($page == 'contact.php') { echo "$r | contact | $loc"; } 

?>