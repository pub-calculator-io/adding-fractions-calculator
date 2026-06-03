<?php
/*
Plugin Name: Adding Fractions Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/adding-fractions-calculator/
Description: Easily add and subtract proper, improper, and mixed fractions with our free Adding Fractions Calculator. Instantly solve math problems with up to 9 fractions!
Version: 1.0.0
Author: www.calculator.io / Adding Fractions Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_adding_fractions_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Adding Fractions Calculator by www.calculator.io";

function calcio_adding_fractions_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Adding Fractions Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_adding_fractions_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_adding_fractions_calculator', 'calcio_adding_fractions_calculator_shortcode' );