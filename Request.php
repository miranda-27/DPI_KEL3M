<?php
$url=file_get_contents("http://localhost:8080/geoserver/Kristina/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=Kristina%3ABALI&outputFormat=application%2Fjson");
#url yang ada di dalam ("") itu link address dari halaman GeoJSON.. jangan lupa hapus bagian &maxFeatures=50
echo($url);
?>