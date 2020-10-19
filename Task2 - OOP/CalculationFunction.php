<?php

require 'Shape.php';
require 'Circle.php';
require 'Square.php';
require 'Triangle.php';

$data = [
    ['Square', 5],
    ['Circle', 10],
    ['Triangle', 15]
];

function calculateMultipleShapes($shapes) {
    $result = 0;

    foreach ($shapes as $shape) {

        if (!checkShape($shape[0])) {
            return 'Shape not supported';
        }

        $newShape = new $shape[0]($shape[1]);
        $result += $newShape->calculateArea();
    }

    return $result;
}

function checkShape($shape) {
    $shape_types = [
        'Square',
        'Circle',
        'Triangle',
    ];
    if (!in_array($shape, $shape_types)) {
        return false;
    }

    return true;
}

echo calculateMultipleShapes($data);
