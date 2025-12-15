<?php  
session_start();
setcookie(
    "user_name",                
    "Nader",                     
    time() + 3600,               
    "/",                         
    "",                          
    false,                       
    true                         
);
echo $_COOKIE['user_name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php 



$project = basename(dirname(__FILE__));
$script  = basename(__FILE__);

echo "Project: $project<br>";
echo "Script: $script";
echo date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']);


$file = "visits.txt";

$count = file_exists($file) ? (int)file_get_contents($file) : 0;
$count++;

file_put_contents($file, $count);

$file = "unique_visitors.txt";

// Initialize file if missing
if (!file_exists($file)) {
    file_put_contents($file, 0);
}

if (!isset($_SESSION['counted'])) {
    $count = (int) file_get_contents($file);
    $count++;
}
    file_put_contents($file, $count);
    $_SESSION['counted'] = true;



////////////////////////////


?>


</body>
</html>