<?php
$count = 0;
while ($count <= 10) {
    echo $count.",";
    $count++;
}

echo "<br />";

for ($count = 0; $count <= 10; $count++) {
    echo $count . ",";
}

// foreach ($array as $value)
//   statement;
// foreach ($array as $key => $value) {
//   statement;
//}


echo "<br />";

$ages = array(4,8,15,16,23,42);
foreach($ages as $age) {
    echo "나이는: $age <br />";
}