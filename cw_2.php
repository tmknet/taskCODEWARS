<?php
function allValuesBelowOrEqual($array, $limit) {
    foreach ($array as $value) {
        if ($value > $limit) {
            return false;
        }
    }
    return true;
}