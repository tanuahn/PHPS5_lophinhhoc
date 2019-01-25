<?php
include_once 'Rectangle.php';
class Rectangle extends Square {
    public $height;

    public function __construct($name, $width, $height){
        parent::__construct($name, $width);
        $this->height = $height;
    }
    public function calculateArea(){
        return $this->width * $this->height;
    }

    public function calculatePerimeter(){
        return ($this->width + $this->height) * 2;
    }
}
?>