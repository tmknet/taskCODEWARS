<?php
function smallestInteger ($arr) {
    $min = min( array_map( function( $value ){
        return $value;
    } , $arr) );
    return $min;
};

$arr = array(
    0=>10,
    1=>33,
);
echo smallestInteger( $arr );