<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div align="center">
        <table border="2">
            <tr>
                <td>First Number : </td>
                <td><input type="number" name="num1" value="0" placeholder="First Number"></td>
                <td rowspan="2"><button type="submit" name="submit">Calculate</button></td>
            </tr>
            <tr>
                <td>Second Number : </td>
                <td><input type="number" name="num2" value="0" placeholder="Second Number"></td>
            </tr>
            <?php
                if(isset($_POST['submit']))
                {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $sum = $num1 + $num2;
                    $sub = $num1 - $num2;
                    $mul = $num1 * $num2;
                    $div = $num1 / $num2;
                    print "<tr>
                        <td> Addition : </td>
                        <td> $sum</td>
                        </tr>
                        <tr>
                        <td> Subtraction : </td>
                        <td> $sub</td>
                        </tr>
                        <tr>
                        <td> Multiplication : </td>
                        <td> $mul</td>
                        </tr>
                        <tr>
                        <td> Division : </td>
                        <td> $div</td>
                        </tr>";
                }
            ?>
        </table>
        </div>
    </form>
</body>
</html>