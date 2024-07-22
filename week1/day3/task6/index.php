<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page Requested Time</title>
</head>
<body>
    <h1>Page Requested Time</h1>
    <p>
        <?php
        $current_time = date("Y-m-d H:i:s");
        
        echo "The page was requested on: " . $current_time;
        ?>
    </p>
</body>
</html>
