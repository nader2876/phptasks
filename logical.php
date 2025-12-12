<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $year = 2013;
    if ($year % 4 === 0) {
        echo "This year is a leap year";
    } else {
        echo "This year is not a leap year";

    }
    echo "<br>";
    $temp = 27;
    if ($temp > 20) {
        echo "it is summertime!";
    } else {
        echo "it is wintertime!";
    }
    ;
    echo "<br>";
    $int1 = 2;
    $int2 = 2;
    if ($int1 === $int2) {
        $intSumTri = (($int1 + $int2) * 3);
        echo $intSumTri;
    } else {
        $intSum = $int1 + $int2;
        echo $intSum;
    }
    echo "<br>";
    $firstInt = 10;
    $secondInt = 10;
    $sumInt = $firstInt + $secondInt;
    if ($sumInt === 30) {
        echo $sumInt;
    } else {
        echo "false";
    }
    echo "<br>";
    $number = 50;
    if ($number >= 20 && $number <= 50) {
        echo "true";
    } else {
        echo "false";
    }
    echo "<br>";
    $maxNum = array(1, 5, 9);
    echo max($maxNum);
    $units = 50;

    $bill = match (true) {
        $units <= 50 => 2.50,
        $units <= 150 => 5.00,
        $units <= 250 => 6.20,
        $units > 250 => 7.50,
    };
    $elecBill = $units * $bill;
    echo "<br>";
    echo $elecBill;
    echo "<br>";
    $result = "";

    class calculator
    {
        var $num1;
        var $num2;

        function checkopration($oprator)
        {
            switch ($oprator) {
                case '+':
                    return $this->num1 + $this->num2;

                case '-':
                    return $this->num1 - $this->num2;

                case '*':
                    return $this->num1 * $this->num2;

                case '/':
                    return $this->num1 / $this->num2;

                default:
                    return "Sorry No command found";
            }
        }

        function getresult($num1, $num2, $c)
        {
            $this->num1 = $num1;
            $this->num2 = $num2;
            return $this->checkopration($c);
        }
    }

    $cal = new calculator();

    if (isset($_POST['submit'])) {
        $result = $cal->getresult($_POST['n1'], $_POST['n2'], $_POST['op']);
    }
    $voteAge = 15;
    if ($voteAge <= 15) {
        echo 'is not eligible to vote';
    } else {
        echo 'is eligible to vote ';
    }
    echo "<br>";
    $numComp = -60;
    if ($numComp > 0) {
        echo "positive";
    } else if ($numComp < 0) {
        echo "negative";
    } else if ($numComp === 0) {
        echo "0";
    }
    echo "<br>";
    $grades = array(60, 86, 95, 63, 55, 74, 79, 62, 50);
    $sum = array_sum($grades);
    $count = count($grades);
    $averageGrades = $sum / $count;
    $grade = match (true) {
        $averageGrades < 60 => "F",
        $averageGrades < 70 => "D",
        $averageGrades < 80 => "C",
        $averageGrades < 90 => "B",
        $averageGrades < 100 => "A",

    };
    echo $grade;






    ?>
    <form method="post">
        <table align="center">
            <tr>
                <td>Enter 1st Number</td>
                <td><input type="text" name="n1"></td>
            </tr>

            <tr>
                <td>Enter 2nd Number</td>
                <td><input type="text" name="n2"></td>
            </tr>

            <tr>
                <td>Select Oprator</td>
                <td><select name="op">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="                =                "></td>
            </tr>
            <tr>
                <td><strong><?php echo $result; ?><strong></td>
            </tr>

        </table>
    </form>
</body>

</html>
