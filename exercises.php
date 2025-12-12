<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 
$num=5;
if($num>0)
{echo "thenumberispositive";}
else if ($num==0)
{echo"the number equalls 0";}
else
{echo "the number is negative";}
$fruit="banana";
switch($fruit)
{
case "banana":

{echo "the fruit is banana";}

break;
case "apple":
    {echo "the fruit is apple";}
break;}
$evenarr=[];
$ar1=array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
for($i=0;$i<count($ar1);$i++)
{
if($ar1[$i]%2==0)
{
array_push($evenarr, $ar1[$i]);

}



}
print_r($evenarr);

$movies=["shutter island","joker","seven","oldiboi","6 days"];
foreach($movies as $movie)
{

echo "$movie <br>";

}
$i=0;
while($i<11)
{
if($i!=5)
{
echo "$i";
}
$i++;

}
?>
</body>
</html>