<?php
include_once 'Cricle.php';
include_once 'Cylinder.php';
include_once 'Rectangle.php';
include_once 'Square.php';

$cricle = new Cricle('cricle1', 3);
echo 'Cricle area: ' . $cricle->calculateArea() . '<br/>';
echo 'Cricle perimetter: ' . $cricle->calculatePerimeter() . '<br/>';

$cylinder = new Cylinder('cylinder1', 3, 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br/>';
echo 'Cylinder perimetter: ' . $cylinder->calculatePerimeter() . '<br/>';

$rectangle =new Rectangle('rectangle1', 3, 4);
echo 'Rectangle arae: ' . $rectangle->calculateArea() . '<br/>';
echo 'Rectangle perimetter: ' . $rectangle->calculatePerimeter() . '<br/>';

$square = new Square('square1', 4);
echo 'Square area: ' . $square->calculateArea() . '<br/>';
echo 'Square perimetter: ' . $square->calculatePerimeter();
?>