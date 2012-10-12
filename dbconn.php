<?php 
$dbconn = new mysqli("OKCSQL01","salesportal","S@!3SP0rT@l");
if ($dbconn->connect_errno) {
	die("Failed to connect to MySQL: (" . $dbconn->connect_errno . ") ");
}
?>