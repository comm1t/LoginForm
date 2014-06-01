<html>
<head><title>My Title</title></head>
<body>
<?php
echo "<h1>Print text</h1>";
?>
<h1>Check Database</h1>
<?php
/* ... comments */
// ... comments
#  ... and comments 

if (!mysql_connect('localhost','root','1')) die('error');
echo "Connected Success!";
?>

<h1>Check Ip</h1>
<?
echo "User come from: ".getenv("HTTP_REFERER")."<BR>";
echo "User IP: ".getenv("REMOTE_ADDR")."<BR>";
$browser=getenv("HTTP_USER_AGENT");
if(strpos($browser,"Opera")!==false) echo "Browser: Opera<BR>";
else echo "Any... Browser ( $browser )<BR>";
?>


</body>
<?php
echo "</html>";
?>
