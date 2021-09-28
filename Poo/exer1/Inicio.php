<?php
require ('Calculadora.php');

$calc = new Calculadora();
$calc->add(12);
$calc->divide(5);

echo "Total".$calc->add();