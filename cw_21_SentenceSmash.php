<?php

function smash( $words ) :string {
    $sentence = implode( " ", $words );
    return $sentence;   
  };

  $arr = [ 'Witaj', 'w', 'moim', 'Świecie' ];
  smash($arr);

  function smash1(array $words): string {
    return trim(implode(" ",$words));
  }
  function smash2(array $words): string {
    return join(' ', $words);
 }