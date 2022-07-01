<?php
// Plugin Name: New Plugin
// Plugin URi: https://about.me/farazhashmi21
// Author: Developer Faraz Hashmi
// Author Uri: https://hashmiwebsol.com
// Version: 0.1
// Description: Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.
// To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.
// Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
// Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.
// Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.
// Tags: newplugin, NEWPLUGIN, NEW-PLUGIN, new-plugin, New-Plugin, New-plugin, new-Plugin

if(!defined('ABSPATH')){
    die('Nothing is here for you.');
}
register_activation_hook(__FILE__,'new_plugin_register_activation_hook');
register_deactivation_hook(__FILE__,'new_plugin_register_deactivation_hook');
register_uninstall_hook(__FILE__,'new_plugin_register_uninstall_hook');

function new_plugin_register_activation_hook(){
    add_option('title', 'This is the title.');
}
function new_plugin_register_deactivation_hook(){
    delete_option('title');
}
// function new_plugin_register_uninstall_hook(){}
add_action('init', 'new_plugin_init');
function new_plugin_init(){
    add_shortcode('check', 'displ');
}
function displ($atts){
    $greetings = "Assalam-O-Alaiqum World";
    $atts = shortcode_atts(
        array('message' => $greetings), $atts, 'check'
    );
    // echo "<p>$greetings</p>";
    return $atts['message'];
}
// Action Hooks
// do_action();
// add_action();
// remove_action();
// has_action();
// Filter Hooks
// apply_filter();
// add_filter();
// remove_filter();
// has_filter();
add_filter('the_title', 'new_plugin_the_title');
function new_plugin_the_title($title){
    return "All Titles Has Been Override.";
}
?>