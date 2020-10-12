<?php

require __DIR__.'/vendor/autoload.php';

$a = new Complex(1, 2);
$b = new Complex(0, 0);
echo "First complex number: " . $a . "<br>";
echo "Second complex number: " . $b . "<br>";
echo "Sum: " . $a->add($b) . "<br>";
echo "Subtraction: " . $a->subtract($b) . "<br>";
echo "Multiplication: " . $a->multiply($b) . "<br>";
try {
    echo "Division: " . $a->divide($b) . "<br>";
} catch (Exception $e) {
    echo $e->getMessage();
}
