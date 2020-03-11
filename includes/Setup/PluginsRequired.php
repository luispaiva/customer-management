<?php

namespace Source\Setup;

class PluginsRequired
{
    /**
     * @var PluginsRequired
     */
    private static $class;

    /**
     * PluginsRequired instance
     *
     * @return PluginsRequired
     */
    public static function get_instance()
    {
        if (self::$class == null) {
            self::$class = new self();
        }
        return self::$class;
    }

    /**
     * PluginsRequired constructor
     */
    private function __construct()
    {
        add_action('tgmpa_register', array($this, 'tgmpa_register'));
    }

    public function tgmpa_register()
    {
        $plugins = array(
            array(
                'name'          => 'Contact Form 7',
                'slug'          => 'contact-form-7',
                'required'      => true
            ),
            array(
                'name'          => 'Really Simple CAPTCHA',
                'slug'          => 'really-simple-captcha',
                'required'      => true
            ),
            array(
                'name'          => 'Members',
                'slug'          => 'members',
                'required'      => true
            ),
        );

        $config = array(
            'id'           => 'tgmpa',
            'default_path' => '',
            'menu'         => 'tgmpa-install-plugins',
            'parent_slug'  => 'plugins.php',
            'capability'   => 'install_plugins',
            'has_notices'  => true,
            'dismissable'  => true,
            'dismiss_msg'  => '',
            'is_automatic' => false,
            'message'      => '',
        );

        tgmpa($plugins, $config);
    }
}
