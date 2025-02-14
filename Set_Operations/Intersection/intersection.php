<?php

$A = [1, 2, 3, 4, 5];
$B = [3, 4, 5, 6, 7];

$C = [];

for ($i = 0; $i < count($A); $i++) {
    for ($j = 0; $j < count($B); $j++) {
        if ($A[$i] == $B[$j]) {
            $C[] = $A[$i];
        }
    }
}

print_r($C);