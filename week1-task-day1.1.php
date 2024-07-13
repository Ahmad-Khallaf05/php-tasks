<?php
//task1----------------------------------------------------------

echo "<h1>task1</h1>";

$fruits = array("Apple", "Banana", "Cherry", "Date", "Elderberry");

echo "this is the array <br>";

foreach ($fruits as $fruit) {
    echo " " . $fruit . " ";
}

echo "<br>";
echo "<br>";

echo "this is the arrey after adding a value";

echo "<br>";

array_push($fruits, "Watermelon");

foreach ($fruits as $fruit) {
    echo " " . $fruit . " ";
}

echo "<br>";
echo "<br>";

echo "this is the arrey after remove the last element";

echo "<br>";

array_pop($fruits);


foreach ($fruits as $fruit) {
    echo " " . $fruit . " ";
}

echo "<br>";
echo "<br>";

echo "Check if Apple exists in the array";

echo "<br>";

$array_search = array_search("Apple", $fruits);

if ($array_search !== false) {
    echo "Apple founded<br>";
} else {
    echo "Apple note founde<br>";
}

echo "<br>";
echo "<hr>";
echo "<br>";

//task2---------------------------------------------------------
echo "<h1>task2</h1>";

$people = [
    "John" => 25,
    "Jane" => 30,
    "Alice" => 22,
    "Bob" => 28,
    "Charlie" => 35
];

echo "Original Array:<br>";
foreach ($people as $name => $age) {
    echo "$name is $age years old.<br>";
}

$people["David"] = 29;
echo "<br>Array after adding a new person:<br>";
foreach ($people as $name => $age) {
    echo "$name is $age years old.<br>";
}

unset($people["Alice"]);
echo "<br>Array after removing a person:<br>";
foreach ($people as $name => $age) {
    echo "$name is $age years old.<br>";
}

$keyToCheck = "Jane";
if (array_key_exists($keyToCheck, $people)) {
    echo "<br>$keyToCheck is in the array.<br>";
} else {
    echo "<br>$keyToCheck is not in the array.<br>";
}

echo "<hr>";
//task3---------------------------------------------------------
echo "<h1>task3</h1>";

$students = [
    [
        "name" => "John",
        "age" => 20,
        "grade" => "A"
    ],
    [
        "name" => "Jane",
        "age" => 22,
        "grade" => "B"
    ],
    [
        "name" => "Alice",
        "age" => 19,
        "grade" => "A-"
    ]
];

echo "Original Students Array:<br>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
}

$newStudent = [
    "name" => "Bob",
    "age" => 21,
    "grade" => "B+"
];
$students[] = $newStudent;
echo "<br>Array after adding a new student:<br>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
}

foreach ($students as &$student) {
    if ($student["name"] == "Jane") {
        $student["grade"] = "A+";
    }
}
unset($student);
echo "<br>Array after updating Jane's grade:<br>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
}

foreach ($students as $key => $student) {
    if ($student["name"] == "Alice") {
        unset($students[$key]);
    }
}

$students = array_values($students);
echo "<br>Array after removing Alice:<br>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
}
?>