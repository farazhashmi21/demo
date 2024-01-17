<?php
  function newdaytech_greetings(){
    register_nav_menus(
      array(
        'primary' =>  __('Primary Menu', 'newdaytech'),
        'social' => __('Social Menu', 'newdaytech')
      )
    );
  }
add_action('init', 'newdaytech_greetings');
