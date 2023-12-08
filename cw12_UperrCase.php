<?php
function is_uppercase($str) {
   $result = ($str === strtoupper($str)) ;
   return $result; 
  }
echo is_uppercase("test");