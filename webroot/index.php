<?php
/**
 * Created by PhpStorm.
 * User: Rohan
 * Date: 12/26/2016
 * Time: 5:48 AM
 */


define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATH', ROOT.DS.'views');

require_once (ROOT.DS.'lib'.DS.'init.php');



App::run($_SERVER['REQUEST_URI']);