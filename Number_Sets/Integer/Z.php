<?php

// Initialize an empty array to store numbers
$numbers = [];

// Define the number of elements to add to the array
$limit = -10;

// Loop from 0 to $limit - 1 (in this case, 0 to 9)
for ($i = 0; $i < $limit; $i++) {
    // Append the current value of $i to the $numbers array
    $numbers[] = $i;
}

// Print the array in a human-readable format
print_r($numbers);

?>