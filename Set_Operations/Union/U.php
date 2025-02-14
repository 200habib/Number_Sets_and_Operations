<?php

$A = [1, 2, 3];
$B = [4, 5, 6];

for ($i = 0; $i < count($A); $i++) {
    $C[] = $A[$i];
}

for ($i = 0; $i < count($B); $i++) {
    $C[] = $B[$i];
}

print_r($C);