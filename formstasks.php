<?php 

phpinfo();
  
echo "Tomorrow I'll learn PHP global variables.\n";
echo "This is a bad command: del c:\\*.*";

$ip = $_SERVER['REMOTE_ADDR'];
echo "<br>".$ip;
echo "<br>".basename($_SERVER['PHP_SELF']);



$url = "https://www.w3schools.com/php/default.asp";

$parts = parse_url($url);

echo "Scheme : " . $parts['scheme'] . "<br>";
echo "Host   : " . $parts['host'] . "<br>";
echo "Path   : " . $parts['path'] . "<br>";
$string="learning php";
$newstr=str_split($string);
$strlength=count($newstr);
for($i=0;$i<$strlength;$i++)
{
if($i==0)
{
    echo "<span style='color:red'> $newstr[$i]</span>";

}
else echo $newstr[$i];
}

$stringhtml="<ol> 
<li>m </li>
<li>n </li>
<li>o </li>
</ol>";
$dom= new DOMDocument();
$dom->loadHTML($stringhtml);
$list= $dom->getElementsByTagName("li");
foreach($list as $li)
{
    echo "<br>".$li->nodeValue."<br>";
}


$dom2= new DOMDocument();
$dom2->loadHTML("<html><body> <p>nader</p></body> </html>");
$par=$dom2 ->createElement("p","dynamic paragraph");

$dom2->getElementsByTagName("body")[0]->appendChild($par);

$removed= $dom2->getElementsByTagName("p")[0];
$removed->parentNode->removeChild($removed);

echo $dom2->saveHTML();
?>