<?php 

function ifprime($num)
{
   $count=0;
   for($i=2;$i<=$num;$i++)
   {
if($num%$i==0)
{
    $count++;
}


   }
   if($count>1 || $num==0)
   {echo"$num is a prime number <br>";}
    else{echo"$num is not a prime number <br>";}
}
ifprime(5);
ifprime(6);

function reverseString($string)
{

$str=str_split($string);
$strLength=count($str)-1;
$newarray=[];
for($i=$strLength;$i>=0;$i--)
{
array_push($newarray,$str[$i]);

}
echo implode($newarray)."<br>";

}
reverseString("nad");

function ifLower($string)
{

$str=str_split($string);
$strLength=count($str);
$islower=true;
for($i=0;$i<$strLength;$i++)
{
    $lowerC= strtolower($str[$i]);
if($str[$i]!=$lowerC){
$islower=false;
}

}


if($islower)
{
    echo"your string is ok <br>";
}
else echo"your string is not ok , delete all the uppercase characters plz <br>";
}
ifLower("nader");
ifLower("Nader");

function swapNums($num1,$num2)
{

$temp=$num1;
$num1= $num2;
$num2=$temp;
echo "number 1 = $num1 and number 2 = $num2 <br>";

}
swapNums(5,6);
swapNums(6,7);
function ifArmstrongNum($number)
{
$arr = str_split((string)$number);
$strLength= count($arr);
$total=0;
for($i=0;$i<$strLength;$i++)
{
$total+= pow((int)$arr[$i], $strLength);;

}

if($number==$total)
{

echo "$number is an armstrong number <br>";

}
else
{    echo "$number is not an armstrong number <br>";}
}


ifArmstrongNum(153);
ifArmstrongNum(370);
ifArmstrongNum(9474);



function palindrome($string)
{


$str=str_split($string);
$strLength=count($str)-1;
$newarray=[];
for($i=$strLength;$i>=0;$i--)
{
array_push($newarray,$str[$i]);

}
$isPalindrome=true;
for($i=0;$i<$strLength;$i++)
{
if($str[$i]!=$newarray[$i])
{

$isPalindrome=false;

}


}
if($isPalindrome)
{
    echo"yes its a palindrome <br>";
}
else {
    echo "nah its not a palindrome <br>";
}

}
palindrome("nader");

palindrome("lol lol lol");
function dublicates($array)
{
$arrLength= count($array);
$newarray=[];

for($i=0;$i<$arrLength;$i++)
{ $isdublicateCounter=0;
    
for($j=0;$j<$arrLength;$j++)
{

if($array[$i]==$array[$j]&& in_array($array[$i], $newarray))  
{
    $isdublicateCounter++;
}
}

if($isdublicateCounter<=1)
{
    array_push($newarray,$array[$i]);
}
}


print_r($newarray);
}
dublicates([5,6,7,7,8,7,2,1,5]);

?>