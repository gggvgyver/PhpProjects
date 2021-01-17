<?php
$a = 4;
$b = 3;
$new_user = true;
$number = 20;
$denominator = -6;

if ($a > $b) {
    echo "옳다";
    echo "<br />";
}

if ($new_user) {
    echo "환영";
    echo "<br />";
}

if ($denominator > 0) {
    $result = $number / $denominator;
    echo "결과: $result";
    echo "<br />";
} elseif ($denominator == 0) {
    echo "0으로 나눌수 없다";
} else {
    $result = $number / $denominator;
    echo "결과: $result";
    echo "<br />";
}