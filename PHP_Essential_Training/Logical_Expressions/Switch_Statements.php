<?php
$a = 999;

switch ($a) {
    case 0:
        echo "0";
        break;
    case 3:
        echo "3";
        break;
    default:
        echo "이다";
        break; 
}

echo "<br />";

$year = 2021;
switch (($year - 4) % 12) {
    case 0: $zodiac = "자"; break;
    case 1: $zodiac = "축"; break;
    case 2: $zodiac = "인"; break;
    case 3: $zodiac = "묘"; break;
    case 4: $zodiac = "진"; break;
    case 5: $zodiac = "사"; break;
    case 6: $zodiac = "오"; break;
    case 7: $zodiac = "미"; break;
    case 8: $zodiac = "신"; break;
    case 9: $zodiac = "유"; break;
    case 10: $zodiac = "술"; break;
    case 11: $zodiac = "해"; break;
}
echo "{$year}년은 {$zodiac} 해 입니다";

echo "<br />";

$user_type = "admin3";

switch ($user_type) {
    case "admin": echo "관리자"; break;
    case "customer": echo "손님"; break;
    case "admin1":
    case "admin2": 
        echo "관리자"; break;
    default : echo "안녕하세요?"; break;
}