<?php

class Homepage extends Page{
    public static function getResponders() {
        return array("home", "homepage");
    }

    public function __construct($args) {
        $this->header = true;
        $this->footer = true;
        
        $this->variables["title"] = "Login";
        
        $account = new Account();
        
        if($account->getStatus()) {
            $this->templates = array("dashboard");
        }else {
            $this->templates = array("login");
        }
    }
}