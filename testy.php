<?php
$test = <<<ENDTESTY
| P     | Q     | P && Q |
|-------|-------|--------|
| false | false | false  |
| false | true  | false  |
| true  | false | false  |
| true  | true  | true   |
ENDTESTY;

echo $test;
$x = [2];

if ( $x == true ) {

    echo "true";
} else {
    echo "false";
}

print $x;
echo $test;
echo "<br><br>";
$tekst = substr("123456", 1 ,3);
$cut[]= $tekst;
echo $tekst;
echo "<br><br>";
printf($cut[0]);

$str = "tojestprzykladdlasplita";

foreach (str_split($str) as $letter) {
    echo $letter . "\n";
}
echo "<br><br>";
print_r( str_split($str,3));
echo "<br><br>";
for( $i=0;$i<strlen($str);$i++ ){

    $fun =( $i % 2 == 0 )? strtoupper( $str[ $i ]) : strtolower( $str[ $i ]);
    echo $fun;
}
echo "<br><br>";
echo "<br><br>";
$bin = bin2hex("Na początku Bóg stworzył niebo i ziemię.  Ziemia zaś była bezładem i pustkowiem: ciemność była nad powierzchnią bezmiaru wód, a Duch Boży unosił się nad wodami.
 Wtedy Bóg rzekł: «Niechaj się stanie światłość!» I stała się światłość.  Bóg widząc, że światłość jest dobra, oddzielił ją od ciemności.  I nazwał Bóg światłość dniem, a ciemność nazwał nocą.");
$hex = hex2bin($bin);
echo $bin . " ". $hex;
