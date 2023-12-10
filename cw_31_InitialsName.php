<?php
function abbrevName($name)
{
    $words = explode(' ', $name);

    foreach ($words as $word) {
        $short = substr($word, 0, 1);
        $initials[] = $short;
    };
    $result = implode('.', $initials);
    return trim(strtoupper( $result ));
}

echo abbrevName("Ignacy Kraśiński");

function abbrevName2($name)
{
  return implode('.', array_map(
    fn ($curr) => strtoupper($curr[0]),
    explode(' ', $name),
  ));
}

function abbrevName3( string $name ) : string {
    return implode( ".", array_map(function( $n ) { if ( ! empty( $n )) return $n[0]; }, explode(" ", strtoupper( $name ) ) ) );
}