<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome</h1>
    <?php 
   $arr1 =[   "name"=>"nader",
   "age"=>"22",
   "country"=>"jordan"
   
   
];
print_r( $arr1);
$books=[
["book1","booktitle1","bookauthor1","bookprice1" ],
["book2","booktitle2","bookauthor2","bookprice2" ],
["book3","booktitle3","bookauthor3","bookprice3" ]




];
print_r($books);





$fullname="Nader Nael Rabah Odeh";
echo strlen($fullname);
echo "<br>";
echo strpos($fullname,"Odeh");

echo "<br>";

echo substr($fullname,0,5);
echo "<br>";        
echo strtoupper($fullname);

    ?>
</body>
</html>