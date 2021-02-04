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
$_23101="Orange";
$_23102="Magenta";
$_23103="Green";
$_23106="Blue";

$file_23101 = '23101.clf.txt';
$number_23101 = (count(file($file_23101)) + 2) / 3 - 2 ;

$file_23102 = '23102.clf.txt';
$number_23102 = (count(file($file_23102)) + 2) / 3 - 2 ;

$file_23103 = '23103.clf.txt';
$number_23103 = (count(file($file_23103)) + 2) / 3 - 2 ;

$file_23106 = '23106.clf.txt';
$number_23106 = (count(file($file_23106)) + 2) / 3 - 2 ;
?>
<h5><center>
<font color="<?php echo $_23101;?>"><?php echo $_23101;?> - 231 01 - Orange (<?php echo $number_23101;?>) <?php echo Date("d.m.Y H:i:s", filemtime($file_23101));?></font>&nbsp;&nbsp;
<font color="<?php echo $_23102;?>"><?php echo $_23102;?> - 231 02 - T-Mobile (<?php echo $number_23102;?>) <?php echo Date("d.m.Y H:i:s", filemtime($file_23102));?></font><br>&nbsp;&nbsp;
<font color="<?php echo $_23103;?>"><?php echo $_23103;?> - 231 03 - 4KA (<?php echo $number_23103;?>) <?php echo Date("d.m.Y H:i:s", filemtime($file_23103));?></font>&nbsp;&nbsp;
<font color="<?php echo $_23106;?>"><?php echo $_23106;?> - 231 06 - O2SK (<?php echo $number_23106;?>) <?php echo Date("d.m.Y H:i:s", filemtime($file_23106));?></font>
</h5>
<?php

$filename="bts.log";
$file = new SplFileObject($filename);
echo '<table align="center" border="1">';
echo '<tr><td align="center"> <font color="white"><b>Current : </b></font></td><td align="center"> <font color="white">'. Date("d.m.Y H:i:s T").'</font></td></tr>';
echo '<tr><td align="center"> <font color="white"><b>Modified: </b></font></td><td align="center"> <font color="white">'. Date("d.m.Y H:i:s T", filemtime($filename)).'</font></td></tr>';
echo '<tr><td colspan="2" align="left"> <font color="white">';

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
