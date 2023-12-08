<?php
function lovefunc($flower1, $flower2) {
    return ($flower1 % 2 === 0) !== ($flower2 % 2 === 0);
}
function lovefunc1($flower1, $flower2) {
    return (bool) (($flower1 + $flower2) % 2);
}
