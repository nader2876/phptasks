<?php
    if (isset($_GET['url'])) {
        $url = $_GET['url'];
        if (filter_var($url, FILTER_VALIDATE_URL)) {
           
            header("Location: $url");
            exit();
        } else {
            echo "<p style='color:red;'>Invalid URL format. Please include http:// or https://</p>";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="GET" action="">
        <input type="text" name="url" placeholder="Enter URL">
        <button type="submit">GO</button>
    </form>
    
</body>

</html>