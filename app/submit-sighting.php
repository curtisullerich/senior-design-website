<?php

$ID=$_GET["ID"];
$speciesCommon=$_GET["specCom"];
$speciesScience=$_GET["specSci"];
$subFamCom=$_GET["subFamCom"];
$subFamSci=$_GET["subFamSci"];
$famCom=$_GET["famCom"];
$famSci=$_GET["famSci"];
$loc=$_GET["location"];
$num=$_GET["number"];
$temp=$_GET["temperature"];
$winSpeed=$_GET["windSpeed"];
$winDir=$_GET["winDir"];
$cloudCover=$_GET["cloud"];
$time=$_GET["time"];
$behavior=$_GET["behavior"];
$gender=$_GET["gender"];
$condition=$_GET["cond"];
$comment=$_GET["com"];
$transect=$_GET["tran"];

$file = "/home/apache/sighting_data.csv";

$line="\"{$ID}\",\"{$speciesCommon}\",\"{$speciesScience}\",\"{$subFamCom}\",\"{$subFamSci}\",\"{$famCom}\",\"{$famSci}\",\"{$loc}\",\"{$num}\",\"{$temp}\",\"{$winSpeed}\",\"{$winDir}\",\"{$cloudCover}\",\"{$time}\",\"{$behavior}\",\"{$gender}\",\"{$condition}\",\"{$comment}\",\"{$transect}\"\n";

file_put_contents( $file, $line, FILE_APPEND | LOCK_EX );

echo "200 OK\n\n";

?>
