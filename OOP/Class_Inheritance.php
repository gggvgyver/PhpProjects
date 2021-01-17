<?php
class User {
    
    var $first_name;
    var $last_name;
    var $username;

    function full_name() {
        return $this->first_name . " " . $this->last_name;
    }
}

class Customer extends User {

    var $city;
    var $state;
    var $country;

    function location() {
        return  $this->city . "," .
                $this->state . "," .
                $this->country;
    }

}

$u = new User;
$u->first_name = '제리';
$u->last_name = '맥과이어';
$u->username = '제리맥과이어';

$c = new Customer;
$c->first_name = '제리2';
$c->last_name = '맥과이어2';
$c->username = '제리맥과이어2';
$c->city = "뉴욕";
$c->state = "뉴욕";
$c->country = "미국";

echo $u->full_name(). '<br />';
echo $c->full_name(). '<br />';

echo $c->location(). '<br />';

echo get_parent_class($u). '<br />';
echo get_parent_class($c). '<br />';

if(is_subclass_of($c, 'user')) {
    echo "인스턴스는 User의 서브클래스이다. <br />";
}

$parents = class_parents($c);
echo implode(', ', $parents). '<br />';