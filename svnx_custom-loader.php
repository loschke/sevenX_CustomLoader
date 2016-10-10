<?php
/*
Plugin Name: 7x - CustomLoader
Plugin URI: https://github.com/loschke/sevenX_CustomLoader
Description: Include Custom Post Types and Custom Fields via Plugin.
Version: 1.0
Author: sevenX - Rico Loschke
Author URI: http://sevenx.de
Author Email: hello@sevenx.de
*/

class svnx_CustomLoader {
    public static function svnx_loaderInit()
    {
        $self = new self();
        add_action('plugins_loaded', array( $self, 'svnx_cptLoader' ));
        add_action('plugins_loaded', array( $self, 'svnx_acfLoader' ));

    }

    // include Custom Post Types (CPT UI)
    public static function svnx_cptLoader() {
        /* If nothing defined in wp-config, load our CPT:s because we assume it's a regular user installing on a clean site */
        if(!defined('DEV_MODE') || (defined('DEV_MODE') && (DEV_MODE !== true)))
        {
            foreach (glob(__DIR__ . "/acf/*.php") as $filename)
                include $filename;
        }
    }

    // include Advanced Custom Fields (ACF Pro)
    public static function svnx_acfLoader() {
        /* If nothing defined in wp-config, load our ACF:s because we assume it's a regular user installing on a clean site */
        if(!defined('DEV_MODE') || (defined('DEV_MODE') && (DEV_MODE !== true)))
        {
            foreach (glob(__DIR__ . "/cpt/*.php") as $filename)
                include $filename;
        }
    }

}
svnx_CustomLoader::svnx_loaderInit();

