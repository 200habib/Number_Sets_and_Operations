<?php

// Define multiple sets (arrays) with some integer values
$A = [1, 2, 3];
$B = [4, 5, 6];
$C = [7, 8, 9];
$D = [1, 3, 5]; // Example of a set with elements already present in other sets

// Combine all sets into a single array
$allSets = [$A, $B, $C, $D]; // Add more sets here if needed

// Initialize an empty array to store all combined elements
$combined = [];

// Iterate through each set and add its elements to the combined array
foreach ($allSets as $set) {
    $combined = array_merge($combined, $set);
}

// Remove duplicates from the combined array
$combined = array_unique($combined);

// Calculate the sum of the elements in the combined array
$sum = array_sum($combined);

// Print the combined array in a human-readable format
echo "Combined array (without duplicates):\n";
print_r($combined);

// Print the sum of the elements
echo "The sum of the elements in the combined array is: " . $sum . "\n";

?>