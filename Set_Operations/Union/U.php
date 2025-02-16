<?php

// Define two arrays, $A and $B, with some integer values
$A = [1, 2, 3];
$B = [4, 5, 6];

// Initialize an empty array $C to store the combined elements
$C = [];

// Loop through each element in array $A
for ($i = 0; $i < count($A); $i++) {
    // Append the current element of $A to array $C
    $C[] = $A[$i];
}

// Loop through each element in array $B
for ($i = 0; $i < count($B); $i++) {
    // Append the current element of $B to array $C
    $C[] = $B[$i];
}

// Remove duplicates from the combined array $C
$C = array_unique($C);

// Print the combined array $C in a human-readable format
print_r($C);

?>