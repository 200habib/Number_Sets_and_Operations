<?php

$A = [1, 2, 3, 4, 5];
$B = [3, 4, 5, 6, 7];

$C = [];

for ($i = 0; $i < count($A); $i++) {
    if ($A[$i] != $B[$i]) {
        $C[] = $A[$i];
    }
}
// Remove duplicates from the combined array $C
$C = array_unique($C);

print_r($C);