<?php
$arr = [4, 3, 9, 7, 2, 1];

function squareOrSquareRoot($array) {
    $result = [];

 for ($i = 0; $i < count($array); $i++) {
        $value = (fmod(sqrt($array[$i]), 1) == 0) ? sqrt($array[$i]) : $array[$i] * $array[$i];
        $result[] = intval(round($value));
    }

    return $result;
}

print_r(squareOrSquareRoot($arr));