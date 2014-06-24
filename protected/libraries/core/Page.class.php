<?php

class Page {
    public $header;
    public $footer;
    public $templates = array();
    public $variables = array();
    public $responders = array();
    
    public function __construct() {
        $this->variables = array();
    }

    public function addVar($key, $value) {
        $this->variables[$key] = $value;
        return true;
    }

    public function addTPL($template, $position=-1) {
        if($position == -1) {
            array_push($this->templates, $template);
        }else {
            $this->templates[$position] = $template;
        }
        return true;
    }
}