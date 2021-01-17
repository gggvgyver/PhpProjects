<?php
// 로컬변수와 글로벌 변수

$bar = "글로벌";

function foo() {
    global $bar;
    if (isset($bar)) {
        echo "foo: ". $bar . "<br />";
    }
    $bar = "로걸";
}

function bar() {
    $bar_local = "inside";
}

echo "global: ". $bar . "<br />";

foo();
echo "local: ". $bar . "<br />";

bar();
echo "local: ". $bar_local . "<br />";
