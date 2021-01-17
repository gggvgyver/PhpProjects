<?php
//equal: ==
//identical: ===
//not equal: !=
//not identical: !==

$a = 4;
$b = 3;
$c = 1;
$d = 20;

if (($a > $b) && ($c > $d)) {
    echo "A가 B보다 크다";
    echo "<br />";
    echo "C가 D보다 크다";
} elseif (($a > $b) || ($c > $d)) {
    echo "한쪽은 틀렸다";
    echo "<br />";
} else {
    echo "틀렸다";
    echo "<br />";
}

