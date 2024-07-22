<?php

//1.	Write a PHP script to check if the inserted number is a prime number 

echo"<h1>1.	Write a PHP script to check if the inserted number is a prime number </h1><br>";

function isPrime($number) {
    
  if ($number < 2) {
        return "$number is not a prime number<br>";
    }

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return "$number is not a prime number<br>";
        }
    }

    return "$number is a prime number<br>";
}

$input = 3;

echo isPrime($input);

echo "<hr>";


//2.	Write a PHP script to reverse a string 

echo"<h1>2.	Write a PHP script to reverse a string </h1><br>";

function reverseString($str) {
    echo strrev($str) . "<br>";
}

$input = "remove";

echo $input . "<br>" ;

echo reverseString($input); 

echo "<hr>";

//3.	 Write a PHP script to check if the all string characters are lower cases

echo"<h1>3.	 Write a PHP script to check if the all string characters are lower cases</h1><br>";

function checkAllLowerCase($str) {
  
  if ($str === strtolower($str)) {
    return "Your String ". $str . " is Ok";
  } else {
    return "Your String ". $str . " is not all lowercase";
  }
}

$input = "remove";

echo checkAllLowerCase($input);

echo "<hr>";

//4.	Write a PHP function to swap to variables?

echo"<h1>4.	Write a PHP function to swap to variables?</h1><br>";

function swap(&$x, &$y) {
    $x1 = $x;
    $x = $y;
    $y = $x1;
    echo "x = $x<br>y = $y<br>";  
}

$x = 12;
$y = 10;

swap($x, $y);


echo "<hr>";

//6.	Write a PHP function to check if a number is an Armstrong number or not ?

echo"<h1>6.	Write a PHP function to check if a number is an Armstrong number or not ?</h1><br>";




echo "<hr>";

//7.	Write a PHP function that checks whether a passed string is a palindrome or not?

echo"<h1>7.	Write a PHP function that checks whether a passed string is a palindrome or not?</h1><br>";


function isPalindrome($str) {
 
    $cleanedStr = strtolower( preg_replace("/[^a-zA-Z]/", "", $str));
    
    $reversedStr = strrev($cleanedStr);
    
    if ($cleanedStr == $reversedStr) {
        return "Yes, it is a palindrome.";
    } else {
        return "No, it is not a palindrome.";
    }
}

$input = "Eva, can I see bees in a cave?";
echo isPalindrome($input);



echo "<hr>";

//8.	Write a PHP function to remove duplicates from an array ?

echo"<h1>8.	Write a PHP function to remove duplicates from an array ?</h1><br>";

function removeDuplicates($array) {
    $uniqueArray = array_unique($array);
    print_r($uniqueArray);
}

$array1 = array(2, 4, 7, 4,8, 8, 4);

removeDuplicates($array1);


?>