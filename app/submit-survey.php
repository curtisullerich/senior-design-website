<?php

$ID=$_GET["ID"];
$type=$_GET["type"];
$surveyName=$_GET["surveyName"];
$startTime=$_GET["startTime"];
$endTime=$_GET["endTime"];
$surveyorCount=$_GET["surveyorCount"];
$surveyorNames=$_GET["surveyorNames"];
$locationNames=$_GET["locationNames"];
$comment=$_GET["comments"];
$habitat=$_GET["habitatType"];
$hCondition=$_GET["habCondition"];
$windSpeed=$_GET["windSpeed"];
$cloudCover=$_GET["cloudCover"];
$engagement=$_GET["engagement"];
$radius=$_GET["radius"];
$breadcrumbs=$_GET["bread"];
$temperature=$_GET["temp"];

$file = "/home/apache/survey_data.csv";

$line="\"{$ID}\",\"{$type}\",\"{$surveyName}\",\"{$startTime}\",\"{$endTime}\",\"{$surveyorCount}\",\"{$surveyorNames}\",\"{$locationNames}\",\"{$comment}\",\"{$habitat}\",\"{$hCondition}\",\"{$windSpeed}\",\"{$cloudCover}\",\"{$engagement}\",\"{$radius}\",\"{$breadcrumbs}\",\"{$temperature}\"\n";

file_put_contents( $file, $line, FILE_APPEND | LOCK_EX );

echo "200 OK\n\n"

?>
