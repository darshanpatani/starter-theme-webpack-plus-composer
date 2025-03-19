<?php
namespace darshanpatani\Wordpress\Theme\StarterTemplate;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * WP Bootstrap Navwalker
 * A custom WordPress nav walker class to work with Bootstrap 5 navigation menus.
 * @since v1.0.0
 * @package DarshanPatani Starter Theme
 */

use Walker_Nav_Menu;

class WP_Bootstrap_Navwalker extends Walker_Nav_Menu {

    /**
     * Start Level
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth Depth of menu item.
     * @param array  $args Additional arguments.
     */
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="dropdown-menu">';
    }

    /**
     * Start Element
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Menu item data object.
     * @param int    $depth Depth of menu item.
     * @param array  $args Additional arguments.
     * @param int    $id Menu item ID.
     */
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty( $item->classes ) ? [] : (array) $item->classes;
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

        $output .= '<li class="' . esc_attr( $class_names ) . '">';

        $atts = [];
        $atts['title']  = ! empty( $item->title ) ? $item->title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
        $atts['href']   = ! empty( $item->url ) ? $item->url : '';

        if ( in_array( 'menu-item-has-children', $classes, true ) ) {
            $atts['class'] = 'nav-link dropdown-toggle';
            $atts['data-bs-toggle'] = 'dropdown';
            $atts['aria-expanded'] = 'false';
        } else {
            $atts['class'] = 'nav-link';
        }

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $attributes .= ' ' . esc_attr( $attr ) . '="' . esc_attr( $value ) . '"';
            }
        }

        $output .= '<a' . $attributes . '>';
        $output .= apply_filters( 'the_title', $item->title, $item->ID );
        $output .= '</a>';
    }

    /**
     * End Element
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Menu item data object.
     * @param int    $depth Depth of menu item.
     * @param array  $args Additional arguments.
     */
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}
