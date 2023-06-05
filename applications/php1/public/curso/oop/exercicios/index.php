<?php
require '../exercicios/math.php';

$calc = new Calculadora();
$calc->add(33);
$calc->add(33);
$calc->sub(33);
$calc->dividi(2);
$calc->mutiplay(2);

echo "Total:" . $calc->total();
$calc->clear();

echo "Total:" . $calc->total();