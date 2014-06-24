<?php

class Homepage extends Page{
    public function __construct($args, $util) {
        $this->addVar("version", "Alpha 1");
        $this->addTPL("example");
    }
}