<?php
/**
 * Created by PhpStorm.
 * User: Rohan
 * Date: 12/26/2016
 * Time: 5:49 AM
 */

Config::set('site name', 'Your site');

Config::set('languages', array('en', 'hi'));


Config::set('routes', array(
    'default' => '',
    'admin' => 'admin_',

));

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller','pages');
Config::set('default_action', 'index');