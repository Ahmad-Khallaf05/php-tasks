<?php

//task1 

$result = '';
for ($i = 1; $i <= 10; $i++) {

    $result .= $i . '-';
}
$result = rtrim($result, '-');
echo $result;

//task2

$total = 0;

for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}

echo "Total: " . $total;

//task3

$size = 5;

for ($row = 1; $row <= $size; $row++) {
    for ($col = 1; $col <= $size; $col++) {
        echo '*   ';
    }
    echo "<br>";
}

//task4

$n = 5;

$result = 1;

for ($i = 1; $i <= $n; $i++) {
    $result *= $i;
}

echo "Factorial of $n is: $result";

//task5

$terms = 10;

$fibonacci_sequence = array(0, 1);

for ($i = 2; $i < $terms; $i++) {
    $fibonacci_sequence[$i] = $fibonacci_sequence[$i - 1] + $fibonacci_sequence[$i - 2];
}

foreach ($fibonacci_sequence as $index => $number) {
    echo $number;
    if ($index < $terms - 1) {
        echo ", ";
    }
}
echo "...<br>";

//task6

$text = "Orange Coding Academy";

$count = 0;

for ($i = 0; $i < strlen($text); $i++) {
    $characters = 'a';
    if ($text[$i] == $characters) {
        $count++;
    }
}

echo "Count of '$characters' characters: " . $count . "\n";

//task7

echo '<table cellpadding="3px" cellspacing="0px" border="1">';

for ($i = 1; $i <= 6; $i++) {
    echo '<tr>';

    for ($j = 1; $j <= 5; $j++) {
        $result = $i * $j;
        echo '<td>' . $i . ' * ' . $j . ' = ' . $result . '</td>';
    }

    echo '</tr>';
}

echo '</table>';

//task8

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}

//TASK9

function floydsTriangle($n)
{
    $num = 1;

    for ($row = 1; $row <= $n; $row++) {
        for ($col = 1; $col <= $row; $col++) {
            echo $num . " ";
            $num++;
        }
        echo "<br>";
    }
}

$n = 5;

floydsTriangle($n);


?>