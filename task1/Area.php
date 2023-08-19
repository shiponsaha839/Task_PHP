<?php 

abstract class Shape {
    abstract function area();
}

class Circle extends Shape {
    private $radius = 0;

    public function setRadius($radius) {
        $this->radius = intval($radius);
    }

    public function area() {
        $area = M_PI * $this->radius * $this->radius;
        echo "Circle Area is = ".$area;
    }
}


class Rectangle extends Shape {
    private $height = 0;
    private $width = 0;

    public function setHeight($height) {
        $this->height = intval($height);
    }

    public function setWidth($width) {
        $this->width = intval($width);
    }

    public function area() {
        $area = $this->height * $this->width;
        echo "Rectangle Area is = ".$area;
    }
}

$circle = new Circle();
$circle->setRadius(2);
$circle->area();

echo "\n";

$rectangle = new Rectangle();
$rectangle->setHeight(10);
$rectangle->setWidth(20);
$rectangle->area();
