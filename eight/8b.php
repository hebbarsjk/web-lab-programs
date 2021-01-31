<?php

$a = array(array(1,2,3),array(4,5,6),array(7,8,9));
$b = array(array(7,8,9),array(4,5,6),array(1,2,3));
//print_r($a);
$m = $n = $p = $q = 3;

echo "<h4>First Matrix : </h4>";
for($i=0;$i < $m;$i++)
{
    for($j=0;$j < $n; $j++)
        echo $a[$i][$j]." ";
    echo "<br>";   
}

echo "<h4>Second Matrix : </h4>";
for($i=0;$i < $p;$i++)
{
    for($j=0;$j < $q; $j++)
        echo $b[$i][$j]." ";
    echo "<br>";   
}

echo "<h4>Transpose Of First Matrix : </h4>";
for($i=0;$i < $m;$i++)
{
    for($j=0;$j < $n; $j++)
        echo $a[$j][$i]." ";
    echo "<br>";   
}


if($m == $p && $n == $q)
{
    echo "<h4>Addition Of Two Matrix : </h4>";
    for($i=0;$i < $m;$i++)
    {
        for($j=0;$j < $n; $j++)
            echo $a[$i][$j]+$b[$i][$j]." ";
        echo "<br>";   
    }
}

if($n == $p)
{
    echo "<h4>Multiplication Of Two Matrix : </h4>";
    $result = [];
    for($i=0;$i < $m;$i++)
    {
        for($j=0;$j < $n; $j++)
        {
            $result[$i][$j] = 0;
            for($k=0;$k < $p;$k++)
            {
                $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
            }
        }
              
    }

    for($i=0;$i < $m;$i++)
    {
        for($j=0;$j < $n; $j++)
        {
            echo $result[$i][$j]." ";
        }
        echo "<br>";
    }

}