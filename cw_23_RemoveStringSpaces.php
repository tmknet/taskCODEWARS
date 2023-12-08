<!-- 

Write a function that removes the spaces from the string, then return the resultant string.

Examples:
 -->
<?php
function no_space( string $s ) {
    return ( string ) str_replace( " ", "", $s );
  };

no_space("dwa  jeden trzy");