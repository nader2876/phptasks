<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 

tr,td,table {
    border-collapse: collapse;
    border: 1px solid black;
}

    </style>
</head>

<body>
    


<?php 
$array=[
    ["Salary of Mr. A is ","1000$"],
    ["Salary of Mr. B is ","1200$"],
    ["Salary of Mr. C is ","1400$"]
];

echo "
<table >
    <tr >
        <td style='color:blue'>{$array[0][0]} </td>
        <td >{$array[0][1]}</td>
    </tr>
     <tr >
        <td style='color:blue'>{$array[1][0]}</td>
        <td >{$array[1][1]}</td>
    </tr>
     <tr style='border: 1px solid black'>
        <td style=' color:blue'>{$array[2][0]}</td>
        <td >{$array[2][1]}</td>
    </tr>
</table>
";
?>
    
</body>
</html>