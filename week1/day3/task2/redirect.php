<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = $_POST['url'];

     if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: $url");
        exit();
    } else {
       echo "Invalid URL. Please enter a valid URL.";
    }
} 
?>


</body>
</html>