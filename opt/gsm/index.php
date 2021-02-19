<?php
if(isset($_GET["ID1"])) $IID1="23101";
if(isset($_GET["ID2"])) $IID2="23102";
if(isset($_GET["ID3"])) $IID3="23103";
if(isset($_GET["ID6"])) $IID6="23106";
if ((empty($_GET["ID1"])) && (empty($_GET["ID2"])) && (empty($_GET["ID3"])) && (empty($_GET["ID6"]))) { $IID1="23101";  $IID2="23102";  $IID3="23103";  $IID6="23106"; }

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

header('Location: bts.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title> OpenStreetMaps - Leaflet </title>
 <meta http-equiv="Expires" CONTENT="Sun, 12 May 2003 00:36:05 GMT">
 <meta http-equiv="Pragma" CONTENT="no-cache">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta http-equiv="Cache-control" content="no-cache">
 <meta http-equiv="Content-Language" content="sk">
 <meta name="google-site-verification" content="GHY_X_yeijpdBowWr_AKSMWAT8WQ-ILU-Z441AsYG9A">
 <meta name="GOOGLEBOT" CONTENT="noodp">
 <meta name="pagerank" content="10">
 <meta name="msnbot" content="robots-terms">
 <meta name="msvalidate.01" content="B786069E75B8F08919826E2B980B971A">
 <meta name="revisit-after" content="2 days">
 <meta name="robots" CONTENT="index, follow">
 <meta name="alexa" content="100">
 <meta name="distribution" content="Global">
 <meta name="keywords" lang="en" content="osm, openstreetmaps, maps, leaflet">
 <meta name="description" content="OpenStreetMaps with Leaflet in Docker">
 <meta name="Author" content="ZTK-Comp WEBHOSTING">
 <meta name="copyright" content="(c) 2019 ZTK-Comp">
 <meta charset="utf-8" />
 <link rel="stylesheet" href="leaflet.css" />
 <script src="leaflet.js"></script>
</head>
<body bgcolor="black" color="white">

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
<table align="center" border="0">
 <tr>
  <td align="center"> 
   <a href="?ID1=1"><font size="2" face="Verdana" color="<?php echo $_23101;?>">231 01 - Orange (<?php echo $number_23101;?>) <?php echo Date("d.m.Y H:i:s", filemtime($file_23101));?></font></a>
  </td>
  <td align="center">
   <a href="?ID2=1"><font size="2" face="Verdana" color="<?php echo $_23102;?>">231 02 - T-Mobile (<?php echo $number_23102;?>) <?php echo Date("d.m.Y H:i:s", filemtime($file_23102));?></font></a>
  </td>
 </tr>
 <tr>
  <td align="center">
   <a href="?ID3=1"><font size="2" face="Verdana" color="<?php echo $_23103;?>">231 03 - 4KA (<?php echo $number_23103;?>) <?php echo Date("d.m.Y H:i:s", filemtime($file_23103));?></font></a>
  </td>
  <td align="center">
   <a href="?ID6=1"><font size="2" face="Verdana" color="<?php echo $_23106;?>">231 06 - O2SK (<?php echo $number_23106;?>) <?php echo Date("d.m.Y H:i:s", filemtime($file_23106));?></font></a>
  </td>
 </tr>
 <tr>
  <td align="center" colspan="2">
   <a href="?"><font size="2" face="Verdana" color="White">Show all operators</font></a>
  </td>
 </tr>
</table>


<iframe src="bts.php" width="100%" height="170" scrolling="no" style="border:none;">
</iframe>


<table id="map" width="100"><td id="maph" height="100">
</td></table>

<script>
document.getElementById("map").width = window.innerWidth-"40";
document.getElementById("maph").height = window.innerHeight-"260"; //  Vacsie cislo, mensia mapa
</script>

    <script>
        map = L.map('map').setView([48.7000, 20.1000], 8);
        L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
//        'http://maps.ztk-comp.sk/{z}/{x}/{y}.png', {
        maxZoom: 18,
        }).addTo(map);

<?php 
if ( $IID1 == "23101" ) {
include('23101.clf.txt'); 
?>
        latLong.forEach(function(coord) {
                var circle = L.circle(coord, {
                color: '<?php echo $_23101;?>',
                fillColor: '<?php echo $_23101;?>',
                fillOpacity: 25,
                radius: 25
                }).addTo(map);
        });
<?php
}
if ( $IID2 == "23102" ) {
include('23102.clf.txt'); ?>
        latLong.forEach(function(coord) {
                var circle = L.circle(coord, {
                color: '<?php echo $_23102;?>',
               fillColor: '<?php echo $_23102;?>',
                fillOpacity: 25,
                radius: 25
                }).addTo(map);
        });

<?php 
}
if ( $IID3 == "23103" ) {
include('23103.clf.txt'); ?>
        latLong.forEach(function(coord) {
                var circle = L.circle(coord, {
                color: '<?php echo $_23103;?>',
                fillColor: '<?php echo $_23103;?>',
                fillOpacity: 25,
                radius: 25
                }).addTo(map);
        });

<?php 
}
if ( $IID6 == "23106" ) {
include('23106.clf.txt'); ?>
        latLong.forEach(function(coord) {
                var circle = L.circle(coord, {
                color: '<?php echo $_23106;?>',
                fillColor: '<?php echo $_23106;?>',
                fillOpacity: 25,
                radius: 25
                }).addTo(map);
        });
<?php
}
?>
</script>
</body>
</html>

