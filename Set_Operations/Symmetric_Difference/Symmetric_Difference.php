<?php

function symmetricDifference($setA, $setB) {
    $differenceA = array_diff($setA, $setB);
    $differenceB = array_diff($setB, $setA);


    return array_merge($differenceA, $differenceB);
}

$setA = [1, 2, 4];
$setB = [2, 3, 4, 5];

echo "Symmetric Difference: " . implode(", ", symmetricDifference($setA, $setB));