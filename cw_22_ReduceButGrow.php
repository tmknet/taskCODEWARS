<?php
function grow( $a ) {
    reset( $a );
    $result = 1;
    while( $element = current( $a )  ){
        $result *= $element ;
        next( $a );   
    };
    return 0;
  };

$arr= [2, 2, 2, 2, 2, 2];
echo grow($arr);

function grow1($a) {
    return array_reduce($a, function($carry, $item) {
        return $carry * $item;
    }, 1);
}

// Przykład użycia
$arr = [2, 2, 2, 2, 2, 2];
echo grow1($arr);