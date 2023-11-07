<?php
/**
 * Plugin Name: Mascara de Campos
 * Description: Plugin para mascarar campos de telefone, CPF, RG e CEP.
 * Version: 1.0
 * Author: E4 Develope
 */

function add_masking_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js', array('jquery'), '1.14.16', true);
    wp_enqueue_script('masking', plugin_dir_url(__FILE__) . 'masking.js', array('jquery', 'jquery-mask'), '1.0', true);
}

function add_masking_styles() {
    wp_enqueue_style('masking', plugin_dir_url(__FILE__) . 'masking.css');
}

add_action('wp_enqueue_scripts', 'add_masking_scripts');
add_action('wp_enqueue_scripts', 'add_masking_styles');

