<?php
//주요인
//글짜 잘못쓴것
//세미클론생략
//괄호 잘못 닫기
//인용 '' 
//대소문자


echo "Fatal Errors: 해석가능 실행불가<br />";
echo "Syntax Errors: 해석불가 실행불가<br />";
echo "Warnings: 문제발견 실행가능<br />";
echo "Notices: 조언제공<br />";

/* 디버그에 유용한 함수
echo $varialbe;
print_r($array);    //읽기쉰운 배열형태로 출력
gettype($variable);   
var_dump($variable);   //변수타입과 변수값
get_defined_var();   //array of defined variables
debug_backtrace();   //backtrace 보여주기
*/

$number = 99;
$string = "별이야?";
$array = array(
    1 => "홈페이지",
    2 => "About Us",
    3 => "서비스"
);

var_dump($number);
var_dump($string);
var_dump($array);

echo "<pre>";
print_r(get_defined_vars());
echo "</pre>";

//var_dump(debug_backtrace());