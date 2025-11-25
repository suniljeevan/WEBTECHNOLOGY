<?php

// Function to add two numbers
function addNumbers($a, $b) {
    return $a + $b;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Call function
    $sum = addNumbers($num1, $num2);

    echo "<h2>Result:</h2>";
    echo "<p>The sum of $num1 and $num2 is: <strong>$sum</strong></p>";
}
?>
