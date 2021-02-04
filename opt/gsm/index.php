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
 <link rel="stylesheet" href="http://maps.ztk-comp.sk/leaflet.css" />
 <script src="http://maps.ztk-comp.sk/leaflet.js"></script>
</head>
<body bgcolor="black" color="white">

<iframe src="bts.php" width="100%" height="210" scrolling="no" style="border:none;">
</iframe>


<?php
$_23101="Orange";
$_23102="Magenta";
$_23103="Green";
$_23106="Blue";
?>
<table id="map" width="100"><td id="maph" height="100">
</td></table>

<script>
document.getElementById("map").width = window.innerWidth-"40";
document.getElementById("maph").height = window.innerHeight-"280";
</script>

    <script>
        map = L.map('map').setView([48.7000, 20.1000], 8);
        L.tileLayer(
        'http://192.168.182.133:25380/{z}/{x}/{y}.png', {
        maxZoom: 18,
        }).addTo(map);

//        var marker = L.marker([48.8000, 21.4800], { title: "My marker" }).addTo(map);

<?php # SLOVAKIA;?>
<?php include('23101.clf.txt');?>
        latLong.forEach(function(coord) {
                var circle = L.circle(coord, {
                color: '<?php echo $_23101;?>',
                fillColor: '<?php echo $_23101;?>',
                fillOpacity: 5,
                radius: 5
                }).addTo(map);
        });

<?php include('23102.clf.txt');?>
        latLong.forEach(function(coord) {
                var circle = L.circle(coord, {
                color: '<?php echo $_23102;?>',
               fillColor: '<?php echo $_23102;?>',
                fillOpacity: 1,
                radius: 1
                }).addTo(map);
        });

<?php include('23103.clf.txt');?>
        latLong.forEach(function(coord) {
                var circle = L.circle(coord, {
                color: '<?php echo $_23103;?>',
                fillColor: '<?php echo $_23103;?>',
                fillOpacity: 1,
                radius: 1
                }).addTo(map);
        });

<?php include('23106.clf.txt');?>
        latLong.forEach(function(coord) {
                var circle = L.circle(coord, {
                color: '<?php echo $_23106;?>',
                fillColor: '<?php echo $_23106;?>',
                fillOpacity: 1,
                radius: 1
                }).addTo(map);
        });


</script>
</body>
</html>
