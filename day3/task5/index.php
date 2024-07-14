<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project and Script Name</title>
</head>

<body>
    <?php
    $scriptName = basename($_SERVER['SCRIPT_NAME']);

    $projectPath = dirname($_SERVER['SCRIPT_NAME']);
    $projectName = basename($projectPath);

    echo "<h1>Project Name: $projectName</h1>";
    echo "<h2>Script Name: $scriptName</h2>";
    ?>
</body>

</html>