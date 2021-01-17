<?php
class Person {
    
    var $first_name;
    var $last_name;

    function say_hello() {
        return "안녕 ". $this->first_name . " " . $this->last_name;
    }
}

$person1 = new Person;
$person1->first_name = "황";
$person1->last_name = "별이";
echo $person1->say_hello();