<?php
include_once 'Shape.php';
class Square extends Shape{
    public $width;

    public function __construct($name, $width){
        parent::__construct($name);
        $this->width = $width;
    }

    public function calculateArea(){
        return $this->width * $this->width;
    }

    public function calculatePerimeter(){
        return($this->width + $this->width) * 2;
    }

}
?>