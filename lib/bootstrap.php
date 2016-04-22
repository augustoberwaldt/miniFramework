<?php

define('DS', DIRECTORY_SEPARATOR);
define('SERVER_NAME', $_SERVER['SERVER_NAME']);
define('ROOT', str_replace("/",DS,dirname($_SERVER['SCRIPT_FILENAME'])));
define('LIB', ROOT.DS.'lib');

define('APP', ROOT.DS.'app');
define('VENDOR', ROOT.DS.'vendor');

define('MODEL', APP.DS.'model');
define('CONTROLLER', APP.DS.'controller');
define('VIEW', APP.DS.'view');
define('CLASSES', APP.DS.'classes');

define('WEB', ROOT.DS.'public');
define('CSS', WEB.DS.'css');
define('JS', WEB.DS.'js');
define('IMG', WEB.DS.'img');

//require_once LIB.DS.'ClassRegistry.php';
require_once VENDOR.'/autoloader.php';
require_once LIB.DS.'Load.php';
require_once LIB.DS.'Controller.php';
require_once LIB.DS.'Model.php';
require_once APP.DS.'App_Controller.php';
require_once APP.DS.'App_Model.php';
require_once LIB.DS.'Dispatcher.php';