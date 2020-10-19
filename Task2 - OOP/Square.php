<?php

class Square implements Shape {

    private $sideSize;

    public function __construct($sideSize) {
        $this->sideSize = $sideSize;
    }

    public function calculateArea() {
        return $this->sideSize * $this->sideSize;
    }
}