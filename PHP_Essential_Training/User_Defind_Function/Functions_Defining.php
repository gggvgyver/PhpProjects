<?php
function say_hello() {
    echo "안녕하세요? <br />";
}

function say_hello_to($person) {
    echo "안녕하세요? $person <br />";
}

say_hello();
say_hello_to("별이");

//return값은 함수하나당 1개
//따라서 2개 이상을 전달 할떄는 배열로
//리스트를 이용해서 깔끔하게

function calculator($value_one, $value_two) {
    $add = $value_one + $value_two;
    $substract = $value_one - $value_two;
    $multiply = $value_one * $value_two;
    $divide = $value_one / $value_two;

    return array($add, $substract, $multiply, $divide);
}

$result = calculator(1, 2);
echo "더하기: $result[0] <br />";
echo "빼기: $result[1] <br />";
echo "곱하기: $result[2] <br />";
echo "나누기: $result[3] <br />";

echo "-----------------------------<br />";

list($add, $substract, $multiply, $divide) = calculator(1, 2);
echo "더하기: $add <br />";
echo "빼기: $substract <br />";
echo "곱하기: $multiply <br />";
echo "나누기: $divide <br />";



