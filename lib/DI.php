<?php
namespace nhk\lib;
class DI {
    private static $objects = array();
    
    function __construct()
    {
    }
    
    static function get($classname, $args = array())
    {
        if (!array_key_exists($classname, self::$objects)) {
            $class = self::getClassName($classname);
            $r = new \ReflectionClass($class);
            self::$objects[$classname] = $r->newInstanceArgs($args);
        }
        
        return self::$objects[$classname];
    }
    
    static function getClassName($name)
    {
        if (defined('MOCK_OBJECT')) {
            return '\nhk\tests\mock' . $name;
        }
        return $name;
    }

}