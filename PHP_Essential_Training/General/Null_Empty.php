<?php
$val1 = null;
$val2 = "";
$val3 = "0";

if(is_null($val1)) {
    echo "널 <br />";
}

if(is_null($val2)) {
    echo "널 <br />";
}
else { echo "공백 <br />";}

echo isset($val1). "<br />";
echo isset($val2). "<br />";

//php에서 empty는 "", null, 0, 0.0, "0", false, array()

echo empty($val1)."<br />";
echo empty($val1)."<br />";
echo empty($val3)."<br />";
