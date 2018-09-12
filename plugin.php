<?php
/**
 * Plugin Name: Oxygen EDD Template Support
 * Plugin URI:  https://github.com/wplit/oxygen-edd-support/
 * GitHub URI:  wplit/oxygen-edd-support/
 * Description: Allows EDD template customisation without using a theme. Made for Oxygen Builder.
 * Version:     1.0.0
 * Author:      David Browne
 * Author URI:  https://wplit.com/
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.  You may NOT assume that you can use any other
 * version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.
 *
 * @package    OxygenEddSupport
 * @since      1.0.0
 * @copyright  Copyright (c) 2018, David Browne
 * @license    GPL-2.0+
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}


add_filter( 'edd_template_paths', 'lit_oxygen_edd_template_dir' );
/**
 * Adds plugin subfolder as new location for EDD to look for templates.
 *
 * @since 1.0.0
 *
 * @param array $file_paths Original template locations
 * @return new template location as /edd_templates/
 */
function lit_oxygen_edd_template_dir($file_paths) {

	$file_paths = array(
		1 => plugin_dir_path( __FILE__ ) . 'edd_templates/',
		100 => edd_get_templates_dir()
	);
    
	return $file_paths;
  
}
