<?php

$AllStates = "Mississippi Alabama Texas Massachusetts Kansas";

$states = explode(" ",$AllStates);

echo "<h4>Original Array</h4>";
foreach($states as $i => $state)
    print " STATES[$i] = $state <br>";

$statesList = [];

foreach($states as $state)
{
    if(preg_match('/xas$/',$state))
        $statesList[0] = $state;

    if(preg_match('/^k.*s$/i',$state))
        $statesList[1] = $state;

    if(preg_match('/^M.*s$/',$state))
        $statesList[2] = $state;

    if(preg_match('/a$/',$state))
        $statesList[3] = $state;
}

echo "<h4>Resultant Array</h4>";
foreach($statesList as $i => $state)
    print " STATES[$i] = $state <br>";