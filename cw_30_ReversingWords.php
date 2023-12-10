<?php
function reverse($s) {
    $arrWords = explode(" ", $s);
    $rev =array_reverse($arrWords);
    $imp = implode(" ",$rev);
    return $imp ;
    return implode( " ", array_reverse( explode(" ", $s ) ) );
    /* 
    one line
    return implode(" ", array_reverse( explode( " ", $s ) ) );
    */
  }


$s = "test tomek";
echo reverse($s);
