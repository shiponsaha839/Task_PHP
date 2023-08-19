<?php

abstract class Animal {
    public abstract function sound();
}

class Dog extends Animal {
    public function sound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function sound() {
        return "Meow!";
    }
}


$dog = new Dog();
echo $dog->sound();

$cat = new Cat();
echo $cat->sound();