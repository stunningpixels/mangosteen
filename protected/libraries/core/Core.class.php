<?php

class Core {
    
    public $root;
    public $config = array();
    public $page;
    
    
    public function __construct() {
        $this->root = "";
        $this->config = $this->loadConfig();
        $this->setupDB();
    }
    
    private function loadConfig() {
        $raw = Spyc::YAMLLoad($this->root.'../../config/core.config.yml');
        return $raw["config"];
    }
    
    private function setupDB() {
        DB::$user = $this->config["db"]["user"];
        DB::$password = $this->config["db"]["password"];
        DB::$dbName = $this->config["db"]["dbName"];
        DB::$host = $this->config["db"]["host"];
        DB::$port = $this->config["db"]["port"];
        DB::$encoding = $this->config["db"]["encoding"];
    }
    
    public function cleanURI($uri) {
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
    
    public function loadPages() {
        #File in folder 'responders'
    
        foreach($this->config["pages"] as $page) {
            include("libraries/core/".$page.".class.php");
        }
    }
    
    public function routePage($clean_url) {
        foreach($this->config["pages"] as $page) {
            if(in_array($clean_url, $page::getResponders())) {
                $this->page = $page;
                return true;
            }
        }
        
        return false;
    }
    
    public function buildPage($args) {
        $smarty = new Smarty;
        $profile = new $this->page($args);
        
        foreach($profile->variables as $name=>$variable) {
            $smarty->assign($name, $variable);
        }
        
        if($profile->header) {
            $smarty->display('templates/header.tpl');
            $_SESSION["nav_back"] = array("url"=>"http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
        }
        
        foreach($profile->templates as $template) {
            $smarty->display('templates/'.$template.'.tpl');
        }
        
        if($profile->footer) $smarty->display('templates/footer.tpl');
    }
    
    public static function log($message) {
        DB::query("INSERT INTO hs_log (time, message) VALUES (%s, %s)", date('Y-m-d H:i:s'), $message);
    }
    
}