<?php
/**
 * Created by PhpStorm.
 * User: Rohan
 * Date: 12/26/2016
 * Time: 5:49 AM
 */

class Config {


    protected static $settings = array();

    public static function get($key)
    {
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }

    public static function set($key, $value)
    {
        self::$settings[$key] = $value;
    }
}