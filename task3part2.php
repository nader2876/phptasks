<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Q1
    $string="nader";
   echo strtoupper($string);
    echo strtolower($string);
 echo strtoupper($string[0]);
    //Q2
    $sentencecheck="I am a full stack developer at orange coding academy";
    
    $word="developer";
if(str_contains($sentencecheck,$word))
    
   {  echo "<br> The word '$word' exists in the sentence.";
} else {
    echo "<br> The word '$word' does not exist in the sentence.";
} 
    
    //Q3

    
$numericDate = "085119";

$hour  = substr($numericDate, 0, 2);
$minute = substr($numericDate, 2, 2);
$second   = substr($numericDate, 4, 2);



echo "$hour:$minute:$second";

//Q4

$url="www.orange.com/index.php";
    
    $filename = basename($url);

echo $filename;
//Q5
$email = "info@orange.com";
$username = explode("@", $email)[0];
echo $username;
    //Q6
    $string = "info@orange.com";
echo substr($string, -3);
//Q7
$chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$length = 10;
$password = substr(str_shuffle($chars), 0, $length);
echo $password;
//Q8
$sentence = "That new trainee is so genius.";
$words = explode(" ", $sentence);
$words[0] = "the";
$newSentence = implode(" ", $words);
echo $newSentence;
//Q9
$string1 = "dragonball";
$string2 = "dragonboll";

for ($i = 0; $i < strlen($string1); $i++) {
if ($string1[$i] !== $string2[$i]) {
echo "First difference at position " . ($i) . ": ".$string1[$i]." and ".$string2[$i]."";

}
}
//Q10
$string = "Hello ";
$array = [$string];
var_dump($array);
//Q11
$char = 'a';
echo ++$char;
//Q12
$string = "The brown fox";
$insert = "quick ";
$position = 4;
$newString = substr_replace($string, $insert, $position, 0);
echo $newString;
// Q13
$number = '0000657022.24';
echo ltrim($number, '0');

// Q14
$string = 'The quick brown fox jumps over the lazy dog';
echo str_replace('fox', '', $string);

// Q15
$string = 'The quick brown fox jumps over the lazy dog---';
echo rtrim($string, '-');

// Q16
$string = '"\1+2/3*2:2-3/4*3';
echo preg_replace('/[^0-9 ]/', ' ', $string);

// Q17
$string = 'The quick brown fox jumps over the lazy dog';
$words = explode(' ', $string);
echo implode(' ', array_slice($words, 0, 5));

// Q18
$number = '2,543.12';
echo str_replace(',', '', $number);

// Q19
for ($c = 'a'; $c <= 'z'; $c++) {
echo $c . ' ';
if ($c === 'z') break;
}

    ?>
</body>
</html>