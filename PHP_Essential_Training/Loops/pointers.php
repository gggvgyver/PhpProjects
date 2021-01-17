<?php
$ages = array(4,8,15,16,23,42);

// current: 현재 포인터값
echo "1: " . current($ages) . "<br />";

// next: 포인터 이동
next($ages);
echo "2: " . current($ages) . "<br />";

// 데이타베이스에 값을 불러와서 루프돌릴때 유용
reset($ages);
while($age = current($ages)) {
    echo $age."-";
    next($ages);
}