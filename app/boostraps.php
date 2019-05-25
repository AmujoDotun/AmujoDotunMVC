<?php

//Load Config file
require_once 'configs/config.php';
//load libraries

// require_once 'libraries/core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php';

//Autoload Cpre Libraries
spl_autoload_register(function($className){
    require_once 'libraries/'. $className . '.php';
});