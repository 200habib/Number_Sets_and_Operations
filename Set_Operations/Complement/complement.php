<?php

$U = [1, 2, 3, 4];
$A = [1, 2];

function complement($U, $A) {

    $C = [];

    foreach ($U as $element) {

        $found = false;

        foreach ($A as $a) {
            echo $element . " " . $a . "\n";
            if ($element == $a) {

                $found = true;

                break;

            }

        }
        if (!$found) {

            $C[] = $element;

        }
    }
    return $C;
}

$complement = complement($U, $A);

// print_r($complement);