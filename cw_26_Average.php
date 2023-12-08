<!-- 

Write a function which calculates the average of the numbers in a given list.

Note: Empty arrays should return 0.
 -->

<?php
function find_average($array) : float {
    $sumArr = array_sum( $array );
    $countArr = count( $array ) ;
    return ( $sumArr != 0 ) ?  $sumArr / $countArr :  0;
  }
$arr = [ 1, 2, 4 ];
echo find_average( $arr );