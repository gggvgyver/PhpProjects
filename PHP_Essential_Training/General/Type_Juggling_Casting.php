<?php
$count = "2";
echo "Type: ".gettype($count)."<br />";
$count += 3;
echo "Type: ".gettype($count)."<br />";
$count_casting = "777";
//settype($count_casting, "integer");
$count_casting = (integer) $count_casting;
echo "Type Casting: ".gettype($count_casting);