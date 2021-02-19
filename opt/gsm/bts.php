<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title> General info </title>
 <meta http-equiv="Expires" CONTENT="Sun, 12 May 2003 00:36:05 GMT">
 <meta http-equiv="Pragma" CONTENT="no-cache">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta http-equiv="Cache-control" content="no-cache">
 <meta http-equiv="Content-Language" content="sk">
 <meta http-equiv="refresh" content="5"> 
 <meta name="google-site-verification" content="GHY_X_yeijpdBowWr_AKSMWAT8WQ-ILU-Z441AsYG9A">
 <meta name="GOOGLEBOT" CONTENT="noodp">
 <meta name="pagerank" content="10">
 <meta name="msnbot" content="robots-terms">
 <meta name="msvalidate.01" content="B786069E75B8F08919826E2B980B971A">
 <meta name="revisit-after" content="2 days">
 <meta name="robots" CONTENT="index, follow">
 <meta name="alexa" content="100">
 <meta name="distribution" content="Global">
 <meta name="keywords" lang="sk" content="date, time, ip, browswer, operating system">
 <meta name="description" content="Webpage for general info">
 <meta name="Author" content="ZTK-Comp WEBHOSTING">
 <meta name="copyright" content="(c) 2016 ZTK-Comp">
</head>
<body bgcolor="black" color="white">
<p align="center">

<?php

$IP=$_SERVER['REMOTE_ADDR'];
$filename_bts="bts.log";
$filename_gps="gps.gpx";
$file = new SplFileObject($filename_bts);
echo '<table align="center" border="1">';
echo '<tr><td align="center"> <font size="2" face="Verdana" color="white"><b>Current : </b></font></td><td align="center"> <font size="2" face="Verdana" color="white"><b>'. Date("d.m.Y H:i:s T").'</b> ('.$IP.')</font></td></tr>';
echo '<tr><td align="center"> <font size="1" face="Verdana" color="white"><b>Modified BTS: </b></font></td><td align="center"> <font size="1" face="Verdana"  color="white"><b>'. Date("d.m.Y H:i:s T", filemtime($filename_bts)).'</b></font></td></tr>';
echo '<tr><td align="center"> <font size="1" face="Verdana" color="white"><b>Modified GPS: </b></font></td><td align="center"> <font size="1" face="Verdana" color="white"><b>'. Date("d.m.Y H:i:s T", filemtime($filename_gps)).'</b></font></td></tr>';
echo '<tr><td colspan="2" align="left"> <font size="2" face="Verdana" color="white">';

// Loop until we reach the end of the file.
while (!$file->eof()) {
    // Echo one line from the file.
    echo $file->fgets().'<br>';
}
// Unset the file to call __destruct(), closing the file handle.
$file = null;
echo '</font></td></tr>';
echo '</table>';
?>

</body>
</html>

