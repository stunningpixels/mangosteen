<?php

class Homepage extends Page{
    public function __construct($args, $util) {
        $this->addVar("test", "testing123");
        $this->addTPL("example");
    }
}