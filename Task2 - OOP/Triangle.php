<?php

class Triangle implements Shape {

    private $sideSize;

    public function __construct($sideSize) {
        $this->sideSize = $sideSize;
    }

    public function calculateArea() {
        return (sqrt(3) / 4) * $this->sideSize;
    }
}