<?php
function summation($n) {
   $count = $n;
   for( $i=0; $i<$n;$i++ ){
    $count += $i;
      }
      echo $count;
  }

echo summation(3);

function summation1($n1) {
    return ($n1 * ($n1 + 1)) / 2;
}

echo summation1(3);

$summation = fn($n) => ($n * ($n + 1)) / 2;

echo $summation(3);
/*  */