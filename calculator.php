<?php

class Circle_data
{

    public $type = 'circle';
    public $radius = 2;
    public $surface;
    public $circumference;

}

class Triangle_data
{

    public $type = 'triangle';
    public $a=4;
    public $b=5;
    public $c=6;
    public $h=3;
    public $surface;
    public $circumference;



}

$triangle = new Triangle_data();

$triangle->surface = ($triangle->a*$triangle->h)/2;
$triangle->circumference = ($triangle->a + $triangle->b + $triangle->c);

$circle = new Circle_data();

$circle->surface = pow($circle->radius,2) * M_PI;
$circle->circumference = 2 * M_PI * $circle->radius;

echo json_encode($triangle,JSON_PRETTY_PRINT);
echo json_encode($circle,JSON_PRETTY_PRINT);

header('Content-Type: application/json');

?>