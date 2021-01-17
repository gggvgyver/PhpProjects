<?php
for ($count = 0; $count <= 10; $count++) {
    if ($count % 2 == 0) {
        continue; // 건너뛴다
    }
    if ($count == 9) {
        break; // 중단한다
    }
    echo $count . ",";
}