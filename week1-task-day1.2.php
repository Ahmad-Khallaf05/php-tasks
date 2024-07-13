<?php

// task1 ------------------------------------------------------------------
echo "<h1>task1</h1>";
$jordanianCities = array(
    "Amman",
    "Zarqa",
    "Irbid",
    "Aqaba",
    "Madaba",
    "Salt",
    "Ma'an",
    "Jerash",
    "Karak",
    "Tafilah"
);

foreach ($jordanianCities as $value) {

    echo "<br>" . $value . "<br>";
}

//Print all elements of the array in reverse order.
echo "<br><h1>Print all elements of the array in reverse order.</h1><br>";

$revers = array_reverse($jordanianCities);

foreach ($revers as $value) {

    echo "<br>" . $value . "<br>";
}

//Find and print the index of a specific city in the array.

echo "<br><h1>Find and print the index of a specific city in the array.</h1><br>";

echo "<br>" . array_search("Amman", $jordanianCities) . "<br>";

//Remove a Amman from the array by its value.
echo "<br><h1>Remove a city from the array by its value</h1><br>";


$id = array_search('Amman', $jordanianCities);

if ($id !== false) {
    unset($jordanianCities[$id]);
}

foreach ($jordanianCities as $value) {
    echo "<br>" . $value . "<br>";
}

//Slice the array to get a sub-array of the first three cities.
echo "<br><h1>Slice the array to get a sub-array of the first three cities.</h1><br>";
$firstThreeCities = array_slice($jordanianCities, 0, 3);

foreach ($firstThreeCities as $value) {
    echo "<br>" . $value . "<br>";
}

echo "<hr>";
// task 2 --------------------------------------------------
echo "<h1>task2</h1>";

$products = array(
    "Apple" => 1.20,
    "Banana" => 0.50,
    "Orange" => 0.80,
    "Strawberry" => 2.00,
    "Grapes" => 2.50
);

foreach ($products as $key => $value) {
    echo "<br>" . $key . " => " . $value . "<br>";
}

//Print the array sorted by product names.
echo "<br><h2>Print the array sorted by product names.</h2><br>";
ksort($products);

foreach ($products as $key => $value) {
    echo "<br>" . $key . " => " . $value . "<br>";
}
echo "<br><h2>Print the array sorted by prices.</h2><br>";

asort($products);

foreach ($products as $key => $value) {
    echo "<br>" . $key . " => " . $value . "<br>";
}

//Calculate and print the average price of all products.
echo "<br><h2>Calculate and print the average price of all products.<h2/><br>";

$sum = 0;

$num = sizeof($products);

foreach ($products as $value) {
    $sum += $value;
}

echo "the average is :" . $sum / $num;

//Find and print the most expensive product.
echo "<h2><h1>Find and print the most expensive product.</h2>";

$mostExpensive = 0;
$name = "";

foreach ($products as $key => $value) {
    if ($value > $mostExpensive) {
        $mostExpensive = $value;
        $name = $key;
    }
    ;
}
echo "<br>the most expensive product is " . $name . " => " . $mostExpensive . "<br>";

echo "<br><hr>";
// task 3 --------------------------------------------------
echo "<h1>task3</h1>";

$books = [
    ["aTo Kill a Mockingbird", "Harper Lee", 1960],
    ["1984", "George Orwell", 1949],
    ["bThe Great Gatsby", "F. Scott Fitzgerald", 1925],
    ["dThe Fault in Our Stars", "John Green", 2012],
    ["cMoby-Dick", "Herman Melville", 1851]
];

foreach ($books as $value) {
    echo $value[0] . " _ ";
    echo $value[1] . " _ ";
    echo $value[2] . "<br>";
}

//•  Print the details of all books published after 2010.
echo "<h2>Print the details of all books published after 2010.</h2>";

foreach ($books as $value) {
    if ($value[2] >= 2010) {
        echo "Title: " . $value[0] . "<br>";
        echo "Author: " . $value[1] . "<br>";
        echo "Year: " . $value[2] . "<br>";
    }
}

// Add a new book to the array and print the updated array.
echo "<br><h2> Add a new book to the array and print the updated array.</h2><br>";

$newBook = ["fThe Road", "Cormac McCarthy", 2006];
array_push($books, $newBook);


foreach ($books as $value) {
    echo $value[0] . " _ ";
    echo $value[1] . " _ ";
    echo $value[2] . "<br>";
}

// Update the author of a specific book and print the updated array.

echo "<h2><br>Update the author of a specific book and print the updated array.</h2><br>";

$books[1] = ["ethe new name", "George Orwell", 1949];


foreach ($books as $value) {
    echo $value[0] . " _ ";
    echo $value[1] . " _ ";
    echo $value[2] . "<br>";
}


//Sort the books by title and print the sorted array.
echo "<br><h2>Sort the books by title and print the sorted array.</h2><br>";

asort($books);

foreach ($books as $value) {
    echo $value[0] . " _ ";
    echo $value[1] . " _ ";
    echo $value[2] . "<br>";
}

?>