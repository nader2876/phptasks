<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    	$colors = array('green', 'red', 'white') ;
    echo " The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[1] carpet, the $colors[0] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon     
               ";
               echo"<ul>
<li>$colors[0]</li>
<li> $colors[1] </li>
<li> $colors[2] </li>
    </ul>";



	$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
foreach ($cities as $key => $capital)
{

echo "$capital is the capital of  $key <br>  ";

}

	$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo "$color[4]";













$arr6= array(1,2,3,4,5);
echo " $arr6[0] $arr6[1] $arr6[2]  $arr6[3] $arr6[4]   ";
array_splice($arr6, 3, 0, "$");
echo "   $arr6[0] $arr6[1] $arr6[2]  $arr6[3] $arr6[4] $arr6[5]    ";

// Q6
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
foreach($fruits as $key => $fruit)
{
    echo "$key = $fruit <br>";
}
//Q7
$temps=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$total=0;
$counter=0;
foreach($temps as $value)
{
$total+=$value;
$counter++;
}
$avg=$total/$counter;
echo "the average is: {$avg} <br>";
sort($temps);
echo  "the lowest seven= $temps[0],$temps[1],$temps[2],$temps[3],$temps[4] <br>";
rsort($temps);
echo  "the heighest seven= $temps[0],$temps[1],$temps[2],$temps[3],$temps[4]<br>";

//Q8


$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$array=array_merge($array1,$array2);
foreach( $array as $key => $value){

    echo "$key => $value <br>";
}
//Q9

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$array=array_merge($array1,$array2);
foreach( $array as $key => $value){

    echo "$key => $value <br>";
}
//Q9
$colors = array("red","blue", "white","yellow");
foreach($colors as $color)
{
    echo strtoupper($color);
    echo "<br>";
    
}
//Q10
foreach($colors as $color)
{
    echo strtolower($color);
    echo "<br>";
    
}
//11
for($i=200;$i<=250;$i++)
{

if($i%4==0)
{
    echo "$i,";
}}
//Q12
 $words = array("abcd","abc","de","hjjj","g","wer");

$longest = 0;
$shortest = PHP_INT_MAX;

foreach ($words as $word) {
    $len = strlen($word);

    if ($len > $longest) {
        $longest = $len;
    }

    if ($len < $shortest) {
        $shortest = $len;
    }
}

echo "the longest: $longest <br> the shortest: $shortest";
//Q13

$min = 1;  
$max = 100; 
$count = 10;


$numbers = range($min, $max);


shuffle($numbers);


$randomNumbers = array_slice($numbers, 0, $count);

print_r($randomNumbers);
//Q14
$numbers = [0, 5, 3, 0, 7, 1, 0, 2];


$lowest = 10000;
foreach($numbers as $number)
{
if($number!=0 && $number<$lowest)
{

    $lowest=$number;
}

}
echo " $lowest";


    ?>
    
</body>
</html>