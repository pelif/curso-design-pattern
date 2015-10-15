<?php

/**
* @class Registry - Pattern REgistry utilizando pattern Singleton
* para referenciar Objetos globalmente
*/

namespace padroes\basicos\appregistry;

class Registry
{
    private static $singleton = null;
    private $registry = array();

    private function __construct() {  }

    public static function getInstance()
    {
        if(null === self::$singleton)
        {
            self::$singleton = new Registry();
        }
        return self::$singleton;
    }

    public function set($key, $value)
    {
        self::$singleton->registry[$key] = $value;
    }

    public function get($key)
    {
        return self::$singleton->registry[$key];
    }
}
