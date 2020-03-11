<?php

namespace Source;

use Source\Custom\PostTypes;
use Source\Setup\PluginsRequired;

class Init
{
    /**
     * @var Init
     */
    private static $class;

    /**
     * Init instance
     *
     * @return Init
     */
    public static function get_instance()
    {
        if (self::$class == null) {
            self::$class = new self();
        }
        return self::$class;
    }

    /**
     * Init constructor
     */
    private function __construct()
    {
        PluginsRequired::get_instance();
        PostTypes::get_instance();
    }
}
