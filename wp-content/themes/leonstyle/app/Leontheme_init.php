<?php

namespace Leonstyle;

/**
 * Leontheme_init
 */
class Leontheme_init {

    /**
     * instance
     *
     * @var mixed
     */
    private static $_instance = NULL;

    /**
     * construct
     */
    protected function __construct()
    {
        $this->setup_hooks();
    }

    /**
     * setup_hooks
     *
     * @return void
     */
    protected function setup_hooks()
    {
        add_action( 'wp_enqueue_scripts', [$this, 'register_styles'] );
        add_action( 'wp_enqueue_scripts', [$this, 'register_scripts'] );
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo', array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        ) );
        add_theme_support( 'custom-background', array() );
    }

    /**
     * get_instance
     *
     * @return void
     */
    public static function get_instance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    /**
     * register_styles
     *
     * @return void
     */
    public function register_styles()
    {
        wp_register_style( 'bootstrap-style', get_theme_file_uri('/assets/bootstrap/css/bootstrap.min.css'), array(), false, 'all');
        wp_register_style( 'slick-style', get_theme_file_uri('/assets/slick/slick.css'), array(), false, 'all');
        wp_register_style( 'slick-theme-style', get_theme_file_uri('/assets/slick/slick-theme.css'), array(), false, 'all');
        wp_register_style( 'leon-style', get_theme_file_uri('/assets/leonstyle/css/leon.css'), array(), wp_get_theme()->get( 'Version' ), 'all');
        
        wp_enqueue_style('bootstrap-style');
        wp_enqueue_style('slick-style');
        wp_enqueue_style('slick-theme-style');
        wp_enqueue_style('leon-style');
    }

    /**
     * register_scripts
     *
     * @return void
     */
    public function register_scripts()
    {
        wp_register_script( 'bootstrap-script', get_theme_file_uri( '/assets/bootstrap/js/bootstrap.min.js' ), array('jquery'), false, true );
        wp_register_script( 'slick-script', get_theme_file_uri( '/assets/slick/slick.min.js' ), array('bootstrap-script'), false, true );
        wp_register_script( 'leon-script', get_theme_file_uri( '/assets/leonstyle/js/leon.js' ), array('slick-script'), filemtime(get_template_directory( '/assets/leonstyle/js/leon.js' )), true );
    
        wp_enqueue_script('bootstrap-script');
        wp_enqueue_script('slick-script');
        wp_enqueue_script('leon-script');
    }
}