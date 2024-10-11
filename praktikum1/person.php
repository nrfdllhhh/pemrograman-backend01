<?php

class Person {
    var $name;
    var $age;

    function greeting() {
        echo "hello : ", $this->name, "I am " ,$this->age, "years old";
    }
}


$bangbootss = new Person();

$bangbootss ->name ="bangbootss";
$bangbootss ->age = 22;
$bangbootss ->greeting();