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