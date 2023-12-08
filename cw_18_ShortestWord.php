<?php
function findShort($str){
    $words = explode(" ", $str);
    $minLength = PHP_INT_MAX;

    foreach( $words as $word ){
        $lenght = strlen($word);
        $minLength = min( $minLength, $lenght );
    };
    return $minLength;
};

echo findShort(" ");

function findShort1( $str ) {
    $wordsEx = explode( " ", $str );
    reset( $wordsEx );
    $minLength = PHP_INT_MAX;

    while( $word = current( $wordsEx ) ) {
        $wordLength = strlen( $word );
        $minLength = min( $minLength, $wordLength );
        next( $wordsEx );
    };
  return $minLength;
};
echo findShort1("test x");

function findShort2($str){
    return (min(array_map('strlen', str_word_count($str, 1))));
 }