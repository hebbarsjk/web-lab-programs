<?php

$host ="localhost";
$user = "root";
$pass = "";
$db = "weblab";

$con = mysqli_connect($host,$user,$pass,$db);

if($con->connect_error)
    die("Connection error");

$sql = "select * from student";

$result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
    <h4>Before Sorting</h4>
    <tr>
    <th>USN</th>
    <th>Name</th>
    <th>Branch</th>
    </tr>
   <?php

   $a = [];
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "<tr>
                <td>".$row['usn']."</td>
                <td>".$row['name']."</td>
                <td>".$row['branch']."</td>
            </tr>";
            $a[] = $row['usn'];
        }
        //print_r($a);
    }
    else
    {
        echo "<tr>No Data</tr>";
    }

    ?>

    </table>

    <table border="2">
    <h4>After Sorting</h4>
    <tr>
    <th>USN</th>
    <th>Name</th>
    <th>Branch</th>
    </tr>
    <?php
    for($i=0;$i < count($a) - 1; $i++)
    {
        for($j=0;$j < count($a) - $i - 1;$j++)
        {
            if($a[$j] > $a[$j + 1])
            {
                $temp = $a[$j];
                $a[$j] = $a[$j+1];
                $a[$j+1] = $temp;
            }
        }
    }



   
        for($i=0;$i < count($a); $i++)
        {
            $result = $con->query($sql);
            while($row = $result->fetch_assoc())
            {
                if($a[$i] == $row['usn'])
                {
                   echo "<tr>
                <td>".$row['usn']."</td>
                <td>".$row['name']."</td>
                <td>".$row['branch']."</td>
            </tr>"; 
                }
            }
        }

    ?>

    </table>
</body>
</html>