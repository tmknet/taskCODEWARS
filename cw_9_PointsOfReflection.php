<?php
function symmetric_point($p, $q) {
    $Px = $p[0];
    $Py = $p[1];
    $Qx = $q[0];
    $Qy = $q[1];

    $px1 = 2 * $Qx - $Px;
    $py1 = 2 * $Qy - $Py;

    return [$px1, $py1];
}
function symmetric_point2($p, $q) {
    return [2 * $q[0] - $p[0], 2 * $q[1] - $p[1]];
}