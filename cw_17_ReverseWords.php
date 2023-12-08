<?php
function reverseWords($str) {
    $words = explode(" ", $str);
    $reverseWords = array_map( 'strrev', $words );
    $result = implode(" ", $reverseWords);
    echo $result;
  }

$words = "Witaj w moim świecie ";
reverseWords($words);

function reverseWords1($text): string {
    return implode(' ', array_map('strrev', explode(' ', $text)));
  }
  /* dziala to od sroddka zaczyna explode nasteonie map i na koncu implode */