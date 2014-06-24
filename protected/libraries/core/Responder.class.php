<?php

/*

All content and software copyright Louis Knight-Webb 2014
ALL RIGHTS RESERVED

*/

require("../spyc/spyc.class.php");
require("../meekro/meekro.class.php");
require("../smarty/smarty.class.php");

require("Core.class.php");
require("Page.class.php");

session_start();

date_default_timezone_set("GMT");

$core = new Core($_SERVER["REQUEST_URI"]);