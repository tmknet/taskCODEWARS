/*
substr($tekst, 1, -1);
 
It's pretty straightforward. 
Your goal is to create a function that removes the 
first and last characters of a string. You're given one parameter,
the original string. You don't have 
to worry with strings with less than two characters.
*/
<?php
function remove_char( string $s ): string {
  
    $stringLenght = strlen( $s );
    $newString = "";
    
    if( $stringLenght > 1 ):
    
        for( $i = 1; $i < $stringLenght -1; $i++ )
        {
          $newString .= $s[ $i ];
        };
  
        return $newString;
    
    endif;
  };
  
  function remove_char2(string $s): string {
    $arr = str_split($s);
    array_shift($arr);
    array_pop($arr);
    $s = implode($arr);
    return $s;
  }