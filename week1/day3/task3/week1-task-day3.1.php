<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="calculator">
    <h2>Basic Calculator</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <div class="buttons">
            <button type="submit" name="operation" value="add" class="add">+</button>
            <button type="submit" name="operation" value="subtract" class="subtract">-</button>
            <button type="submit" name="operation" value="multiply" class="multiply">×</button>
            <button type="submit" name="operation" value="divide" class="divide">÷</button>
        </div>
    </form>

    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = '';

            if ($operation == 'add') {
                $result = $num1 + $num2;
            } elseif ($operation == 'subtract') {
                $result = $num1 - $num2;
            } elseif ($operation == 'multiply') {
                $result = $num1 * $num2;
            } elseif ($operation == 'divide') {
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Error: Division by zero';
                }
            }

            echo "Result: $result";
        }
        ?>
    </div>
</div>

</body>
</html>
