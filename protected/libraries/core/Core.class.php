<?php

class Core {

    private $responders = array();
    private $request = "homepage";
    private $handler = array(
        "identifier" => "",
        "handler" => "",
        "class" => "",
        "permissions" => "",
        "appearance" => "",
        "request" => ""
    );
    private $page;
    private $smarty;
    
    
    public function __construct($uri) {

        $uri_req = $this->cleanURI($uri);

        $request = $uri_req[0];

        if($this->setHandler()) {
            if($this->evaluatePermissions($this->handler["permissions"], $_SERVER['REMOTE_ADDR'])) {
                $this->smarty = new Smarty;
                $this->executeHandler($uri_req[1]);
            }else {
                #Permissions error
            }
        }else {
            #Request error
        }
    }
    
    private function cleanURI($uri) {
        $base_page = "";
        $arguments = array();
        
        
        
        $unclean = explode("/",substr($uri, strlen($this->config["general"]["root"])));
        $base_page = $unclean[1];
        
        if($base_page == "/" || $base_page == "") {
            $base_page = "home";
        }
        
        foreach($unclean as $key => $var) {
            if($key > 1) {
                array_push($arguments, $var);
            }
        }
        
        return array($base_page, $arguments);
        
    }
    
    private function setHandler() {
        $responders = scandir("../../responders");
        foreach($responders as $responder) {
            if(substr($responder, -3) == "yml") {
                $current = Spyc::YAMLLoad("../../responders/" . $responder);

                foreach($current["responders"] as $regex) {
                    if(preg_match($regex, $this->request) >= 1) {

                        if($this->handler["identifier"] != "") return false;

                        $this->handler = array(
                            "identifier"    =>  $current["identifier"],
                            "handler"       =>  $current["handler"],
                            "class"         =>  $current["class"],
                            "permissions"   =>  $current["permissions"],
                            "appearance"    =>  $current["appearance"],
                            "request"       =>  $regex
                        );
                    }
                }

                $this->responders[$current["identifier"]] = $current;
            }
        }

        if($this->handler["identifier"] == "") return false;

        return true;
    }

    private function evaluatePermissions($permissions, $userip) {

        if($permissions["type"] == whitelist) {
            foreach($permissions["ips"] as $ip) {
                if($ip == $userip) return true;
            }
            return false;
        }else if($permissions["type"] == blacklist) {
            foreach($permissions["ips"] as $ip) {
                if($ip == $userip) return false;
            }
            return true;
        }
    }

    private function executeHandler($args) {
        require("../../responders/{$this->handler['handler']}");
        $this->page = new $this->handler["class"]($args, array());

        foreach($this->page->variables as $name=>$variable) {
            $this->smarty->assign($name, $variable);
        }
        
        if($this->handler["appearance"]["header"] == true) $this->smarty->display('../../templates/header.tpl');
        
        echo "\n"; #Readability

        foreach($this->page->templates as $template) {
            $this->smarty->display('../../templates/'.$template.'.tpl');
        }

        echo "\n"; #Readability
        
        if($this->handler["appearance"]["footer"] == true) $this->smarty->display('../../templates/footer.tpl');
    }
    
}