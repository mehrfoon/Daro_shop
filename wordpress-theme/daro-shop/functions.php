<?php
if (!defined('ABSPATH')) exit;
function daro_shop_setup() {
  load_theme_textdomain('daro-shop', get_template_directory() . '/languages');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', array('height'=>80,'width'=>220,'flex-height'=>true,'flex-width'=>true));
  add_theme_support('woocommerce');
  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
  register_nav_menus(array('primary'=>__('منوی اصلی','daro-shop'),'footer'=>__('منوی پایین','daro-shop')));
}
add_action('after_setup_theme','daro_shop_setup');
function daro_shop_assets() {
  wp_enqueue_style('daro-shop-style', get_stylesheet_uri(), array(), '1.0.0');
  wp_enqueue_style('daro-shop-theme', get_template_directory_uri().'/assets/css/theme.css', array('daro-shop-style'), '1.0.0');
  wp_enqueue_script('daro-shop-script', get_template_directory_uri().'/assets/js/theme.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts','daro_shop_assets');
function daro_shop_excerpt_length($length){ return 18; }
add_filter('excerpt_length','daro_shop_excerpt_length');
