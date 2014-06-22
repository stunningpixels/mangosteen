<?php

class Page {
    public $header;
    public $footer;
    public $templates;
    public $variables = array();
    public $responders = array();
    
    public function __construct() {
        $this->variables = array();
    }
}