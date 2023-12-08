<!-- 

Very simple, given an integer or a floating-point number, find its opposite.
 -->
<?php
function opposite($n) {
    return ($n<0) ? abs($n):-$n;
  }

  echo opposite(14);

  function opposite1($n) {
    return -$n;
}

echo opposite1(-14);