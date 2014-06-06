<?php
/*
Plugin Name: Source Shortcode
Version: 1.1
Plugin URI: http://techzei.com
Description: Easy shortcode access to insert Source and Via Link inside posts in Wordpress
Author: Jash Jacob
Author URI: http://jashjacob.com

Copyright 2013

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/



wp_enqueue_style('source_style', plugin_dir_url( __FILE__ ) . 'css/style.css');

function sourcePrint($atts,$content=NULL) {
	extract( shortcode_atts( array(
		'link'		=> '#'
	), $atts) );

	$source = '<ul class="credits"><li class="credits"><span class="cre_cate">Source</span><span class="cre_cate_link"><a href="'.$link.'">'.$content.'</a></span></li></ul>';

	return $source;
}
add_shortcode('source','sourcePrint');

function viaPrint($atts,$content=NULL) {
	extract( shortcode_atts( array(
		'link'		=> '#'
	), $atts) );

	$via = '<ul class="credits"><li class="credits"><span class="cre_cate">Via</span><span class="cre_cate_link"><a href="'.$link.'">'.$content.'</a></span></li></ul>';

	return $via;
}
add_shortcode('via','viaPrint');

?>
