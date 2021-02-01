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
    $b = [];
    $c = [];
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
                $b[] = $row['name'];
                $c[] = $row['branch'];
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
            $minIndex = $i;
            for($j=$i+1; $j < count($a); $j++)
            {
                if($a[$j] < $a[$minIndex])
                    $minIndex = $j;
            }
            swap($a,$i,$minIndex);
            swap($b,$i,$minIndex);
            swap($c,$i,$minIndex);
        }

        function swap(&$a,$i,$j)
        {
            $temp = $a[$i];
            $a[$i] = $a[$j];
            $a[$j] = $temp;
        }
    
        for($i=0;$i < count($a); $i++)
        {
                echo "<tr><td>".$a[$i]."</td><td>".$b[$i]."</td><td>".$c[$i]."</td></tr>";    
        }

        ?>
    </table>
</body>
</html>