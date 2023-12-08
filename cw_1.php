<?php

function remainder( $a, $b ){
return min( $a, $b) !== 0 ? max( $a, $b ) % min( $a , $b ) : "Error: Division by zero";
    
}
echo remainder(72,13);