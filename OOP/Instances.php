<?php

class Student {
    var $first_name;
}

$student1 = new Student;
$student2 = new Student;

echo get_class($student1);

echo "<br />";

$student1->first_name = "별이1";
echo $student1->first_name;

echo "<br />";

$student2->first_name = "별이2";
echo $student2->first_name;

