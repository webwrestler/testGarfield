<?php

include_once ('Animals.php');

class Cat extends Animals
{
    function meow()
    {
        print "Cat {$this->getName()} is saying meow";
    }
}

$cat = new Cat('Garfield');
$cat->meow();