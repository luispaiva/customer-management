<?php

namespace Source\Custom;

class PostTypes
{
    /**
     * @var PostTypes
     */
    private static $class;

    /**
     * PostTypes instance
     *
     * @return PostTypes
     */
    public static function get_instance()
    {
        if (self::$class == null) {
            self::$class = new self();
        }
        return self::$class;
    }

    /**
     * PostTypes constructor
     */
    private function __construct()
    {
        add_action("init", array($this, "custom_post_types"));
    }

    public static function custom_post_types()
    {
        $labels = array(
            'name'                  => __('Clientes', 'customer_management'),
            'singular_name'         => __('Cliente', 'customer_management'),
            'menu_name'             => __('Clientes', 'customer_management'),
            'name_admin_bar'        => __('Clientes', 'customer_management'),
            'add_new'               => __('Adicionar', 'customer_management'),
            'add_new_item'          => __('Adicionar novo cliente', 'customer_management'),
            'new_item'              => __('Novo cliente', 'customer_management'),
            'edit_item'             => __('Editar Cliente', 'customer_management'),
            'view_item'             => __('Visualizar cliente', 'customer_management'),
            'all_items'             => __('Todos os clientes', 'customer_management'),
            'search_items'          => __('Pesquisar', 'customer_management'),
        );

        $args = array(
            'labels'                => $labels,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'query_var'             => true,
            'rewrite'               => array('slug' => 'client'),
            'capability_type'       => 'client',
            'map_meta_cap'          => true,
            'has_archive'           => true,
            'hierarchical'          => false,
            'menu_position'         => null,
            'menu_icon'             => "dashicons-id",
            'supports'              => array('title'),
            'show_in_rest'          => is_user_logged_in() ? true : false,
            'rest_base'             => "clients",
            'rest_controller_class' => "WP_REST_Posts_Controller",
        );

        register_post_type("client", $args);
    }
}
