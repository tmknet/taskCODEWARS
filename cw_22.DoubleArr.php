<?php
function maps($x)
{
    $dublle = array_map(function ($item) {
        return $item * 2;
    }, $x);
    return $dublle;
}

$numbers = [1, 2, 3, 4];
print_r(maps($numbers));