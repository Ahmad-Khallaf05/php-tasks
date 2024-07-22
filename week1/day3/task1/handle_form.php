<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $method = "POST";
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $email = $_GET['email'];
    $password = $_GET['password'];
    $method = "GET";
} else {
    $email = $password = $method = "Unknown";
}

echo "<h2>Form Data</h2>";
echo "<p>Method used: $method</p>";
echo "<p>Email: $email</p>";
echo "<p>Password: $password</p>";
?>
</body>
</html>
