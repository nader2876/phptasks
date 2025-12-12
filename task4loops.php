<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
        }

        td {
            border: 1px solid black;
            padding: 3px;
        }
    </style>
</head>
<body>
    <?php 
    
    
    $result="";
    for($i=1;$i<=10;$i++)

    {
$result .= "$i-";


    }
    echo trim($result,'-');
    echo "<br>";
    $total=0;
for($i=0;$i<=30;$i++)
{

$total+=$i;

}
echo $total;
echo "<br>";

$number=[1,2,3,4,5];
for ($i = 0 ;$i<5;$i++)
{
    for($j=0;$j<5;$j++)
    {
        if ($j < 4 -  $i)
        {
            echo $number[0] ." ";
        }
        else{

            echo $number[$i] . " ";
        }

    }
    echo "<br>";
}
echo "<br>";
for($row=1;$row<6;$row++){
for($i=1;$i<6;$i++)
{
if($row==$i)
{
    echo $row."";
}
else {
    echo "0"."";
}


}
echo "<br>";
}

$var=4;
for($i=$var;$i>1;$i--)
{
$var=$var*($i-1);

}
echo "<br> ";
echo $var;
echo "<br> ";

$numbers=[];
for($i=0;$i<10;$i++)
{

if($i==0)
{
    array_push($numbers,0);
}
else if($i==1)
{
        array_push($numbers,1);

}
else
{
    $newnum= $numbers[$i-1]+$numbers[$i-2];
        array_push($numbers,$newnum);

}
echo $numbers[$i];

}
echo "<br>";
$string="Orange Coding Academy ";

$count=0;
for($i=0;$i<strlen($string);$i++)
{

if($string[$i]=='c' || $string[$i]=='C')
{

    $count++;

}}
echo $count;
echo "<br>";
echo"<table>";
for($i=1;$i<=6;$i++)
{

echo "<tr>";

    for($j=1;$j<=6;$j++)
    {
$mult=$i*$j;
echo"<td> $i * $j= $mult </td>";

    }
    echo "</tr>";
}

echo"</table>";

echo "<br>";

for($i=1;$i<=50;$i++)
{

if($i%3==0 && $i%5==0)
{
    echo "FizzBuzz <br>";

}
else if($i%3==0)
{
    echo "fizz <br>";
}
else if($i%5==0)
{
    echo "Buzz <br>";
}
else {
    echo "$i <br>";
}

}

//////
echo "<br>";
echo "<br>";
echo "<br>";
$num=1;
for($i=1;$i<=5;$i++)
{
for($j=1;$j<=$i;$j++)
{
    echo $num;
    $num++;
}
echo "<br>";

}


$arr1=["E","D","C","B","A"];
for($i=4;$i>=0;$i--){
   switch($i)
    {
case 1:
    echo"&nbsp;";
    break;
    case 2:
    echo"&nbsp; &nbsp;";
    break;
    case 3:
    echo"&nbsp; &nbsp; &nbsp;";
    break;
    case 4:
    echo"&nbsp; &nbsp; &nbsp; &nbsp;";
    break;

    }

for($j=4;$j>=$i;$j--)
{

 

  
echo $arr1[$j]."&nbsp;" ; }
   

echo "<br>";
 }
 

for($i=0;$i<=4;$i++){
   switch($i)
    {
case 0:
    echo"&nbsp;";
    break;
    case 1:
    echo"&nbsp; &nbsp;";
    break;
    case 2:
    echo"&nbsp; &nbsp; &nbsp;";
    break;
    case 3:
    echo"&nbsp; &nbsp; &nbsp; &nbsp;";
    break;

    }

for($j=3;$j>=$i;$j--)
{

 

  
echo $arr1[$j]."&nbsp;" ; }
   

echo "<br>";
 }

 



    ?>
</body>
</html>