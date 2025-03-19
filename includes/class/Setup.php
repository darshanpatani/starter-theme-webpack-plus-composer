<?php
namespace darshanpatani\Wordpress\Theme\StarterTemplate;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Class : Setup
 * @since v1.0.0
 * @package DarshanPatani Starter Theme
*/
class Setup {
    public function __construct() {
        add_action('after_setup_theme', [$this, 'theme_supports']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);
        add_action('init', [$this, 'register_menus']);
        add_action('widgets_init', [$this, 'register_sidebars']);
    }

    /**
     * Add theme supports
     * @since v1.0.0
     */
    public function theme_supports() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
        add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
        add_theme_support('align-wide');
    }

    /**
     * Enqueue scripts and styles
     * @since v1.0.0
     */
    public function enqueue_assets() {
        $theme_version = wp_get_theme()->get('Version');

        wp_enqueue_script( 'jquery' );

        $srcfiles = json_decode(file_get_contents( constant('DPTHEMEDISTROOT') .'manifest.json'), 'ARRAY_A');
        foreach($srcfiles as $fkey => $file){
            if(strpos($fkey, '.js') !== false){
                wp_enqueue_script(
                    'darshanpatani' . $fkey,
                    constant('DPTHEMEDISTROOT').$file,
                    ['jquery'],
                    $theme_version,
                    TRUE
                );
            }elseif(strpos($fkey, '.css') !== false){
                wp_enqueue_style(
                    'darshanpatani' . $fkey,
                    constant('DPTHEMEDISTROOT').$file,
                    [],
                    $theme_version
                );
            }
        }
    }

    /**
     * Register menus
     * @since v1.0.0
     */
    public function register_menus() {
        register_nav_menus([
            'primary_menu' => __('Primary Menu', 'darshanpatani'),
            'footer_menu'  => __('Footer Menu', 'darshanpatani'),
        ]);
    }

    /**
     * Register Sidebar
     * @since v1.0.0
     */
    function register_sidebars(){
        register_sidebar([
            'name'          => __('Primary Sidebar', 'darshanpatani'),
            'id'            => 'sidebar-1',
            'description'   => __('Main sidebar that appears on the right side of the page.', 'darshanpatani'),
            'before_widget' => '<div class="widget card mb-4 p-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title card-header bg-primary text-white">',
            'after_title'   => '</h5>',
        ]);
    }
}
?>
