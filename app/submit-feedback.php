<?php

$hour=$_GET["hour"];
$min=$_GET["min"];
$year=$_GET["year"];
$day=$_GET["day"];
$month=$_GET["month"];
$cat=$_GET["cat"];
$mes=$_GET["mes"];

$file = '/home/apache/feedback-results.csv';

$line="\"{$month}/{$day}/{$year} {$hour}:{$min}\", \"{$cat}\", \"{$mes}\"\n";

file_put_contents( $file, $line, FILE_APPEND | LOCK_EX );

echo "200 OK\n\n";

?>
