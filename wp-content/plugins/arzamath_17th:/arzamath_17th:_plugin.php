<?php
/**
Plugin Name: arzamath_17th:
Plugin URI: http://vk.com/club78658235
Description: Plugin wordpress
Version: 1.0
Author: Ivan Dobrelya
Author URI: http://www.vk.com/id273271172
License: GPL2
Copyright 2014  Ivan.Dobrelya  (email : nergal@i.ua)
*/

if(!class_exists('Arzamath'))
{
    class Arzamath
    {
        public function __construct()
        {
            //require_once('settings.php');
            require_once(sprintf("%s/settings.php", dirname(__FILE__)));
            $arzamath_settings=new Arzamath_Settings();

            require_once(sprintf("%s/post-types/post-type_template.php", dirname(__FILE__)));
            $Post_Type_Template = new Post_Type_Template();

            $plugin=plugin_basename(__FILE__);
            add_filter("plugin_action_links_$plugin", array($this, 'plugin_settings_link'));

        }

        public function plugin_settings_link($links)
        {
            $settings_link='<a href="options-general.php?page=arzamath_template">Settings</a>';
            array_unshift($links, $settings_link);
            return $links;
        }
    }
}

if (class_exists('Arzamath'))
{
    register_activation_hook(__FILE__, array('Arzamath', 'activate'));
    register_deactivation_hook(__FILE__, array('Arzamath', 'deactivate'));
    $arzamath=new Arzamath();
}