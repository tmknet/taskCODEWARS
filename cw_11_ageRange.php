<?php
function datingRange($age) {
    switch(true) {
        case ($age <= 14):
            $min = floor($age - 0.10 * $age);
            $max = floor($age + 0.10 * $age);
            return "$min-$max";
        case ($age > 14):
            $min = floor($age / 2 + 7);
            $max = floor(($age - 7) * 2);
            return "$min-$max";
    }
}

echo datingRange(23);


function datingRange1(int $age): string
{
    list($min, $max) = $age <= 14
        ? [floor($age - 0.10 * $age), floor($age + 0.10 * $age)]
        : [floor($age / 2 + 7), floor(($age - 7) * 2)];

    return "$min-$max";
}
 