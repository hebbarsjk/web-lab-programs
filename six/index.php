<?php

$filename = "counter.txt";
$file = fopen($filename,"r");
$count =fscanf($file,"%d");
fclose($file);
// print_r($count);
print " Total No of visitors : $count[0]";

$count[0]++;
$file = fopen($filename,"w");
fprintf($file,$count[0]);
