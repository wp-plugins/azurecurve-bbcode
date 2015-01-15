<?php
/*
Plugin Name: azurecurve BBCode
Plugin URI: http://wordpress.azurecurve.co.uk/plugins/bbcode

Description: Allows some common BB code to be used in place of html on pages and posts.
Version: 1.0.0

Author: Ian Grieve
Author URI: http://wordpress.azurecurve.co.uk

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.

The full copy of the GNU General Public License is available here: http://www.gnu.org/licenses/gpl.txt

*/

function azc_bbcode_bold($atts, $content = null) {
	return "<span class='azc_bbc_bold'>".do_shortcode($content)."</span>";
}
add_shortcode( 'b', 'azc_bbcode_bold' );
add_shortcode( 'B', 'azc_bbcode_bold' );

function azc_bbcode_italic($atts, $content = null) {
	return "<span class='azc_bbc_italic'>".do_shortcode($content)."</span>";
}
add_shortcode( 'i', 'azc_bbcode_italic' );
add_shortcode( 'I', 'azc_bbcode_italic' );

function azc_bbcode_underline($atts, $content = null) {
	return "<span class='azc_bbc_underline'>".do_shortcode($content)."</span>";
}
add_shortcode( 'u', 'azc_bbcode_underline' );
add_shortcode( 'U', 'azc_bbcode_underline' );

function azc_bbcode_ol($atts, $content = null) {
	return "<ol class='azc_bbc_ol'>".do_shortcode($content)."</ol>";
}
add_shortcode( 'ol', 'azc_bbcode_ol' );
add_shortcode( 'OL', 'azc_bbcode_ol' );

function azc_bbcode_ul($atts, $content = null) {
	return "<ul class='azc_bbc_ul'>".do_shortcode($content)."</ul>";
}
add_shortcode( 'ul', 'azc_bbcode_ul' );
add_shortcode( 'UL', 'azc_bbcode_ul' );

function azc_bbcode_li($atts, $content = null) {
	return "<li class='azc_bbc_li'>".do_shortcode($content)."</li>";
}
add_shortcode( 'li', 'azc_bbcode_li' );
add_shortcode( 'LI', 'azc_bbcode_li' );

function azc_bbcode_table($atts, $content = null) {
	return "<table class='azc_bbc_table'>".do_shortcode($content)."</table>";
}
add_shortcode( 'table', 'azc_bbcode_table' );
add_shortcode( 'TABLE', 'azc_bbcode_table' );

function azc_bbcode_tr($atts, $content = null) {
	return "<tr class='azc_bbc_tr'>".do_shortcode($content)."</tr>";
}
add_shortcode( 'tr', 'azc_bbcode_tr' );
add_shortcode( 'TR', 'azc_bbcode_tr' );

function azc_bbcode_th($atts, $content = null) {
	return "<th class='azc_bbc_th'>".do_shortcode($content)."</th>";
}
add_shortcode( 'th', 'azc_bbcode_th' );
add_shortcode( 'TH', 'azc_bbcode_th' );

function azc_bbcode_td($atts, $content = null) {
	return "<td class='azc_bbc_td'>".do_shortcode($content)."</td>";
}
add_shortcode( 'td', 'azc_bbcode_td' );
add_shortcode( 'TD', 'azc_bbcode_td' );

function azc_bbcode_strike($atts, $content = null) {
	return "<span class='azc_bbc_strike'>".do_shortcode($content)."</span>";
}
add_shortcode( 'strike', 'azc_bbcode_strike' );
add_shortcode( 'STRIKE', 'azc_bbcode_strike' );
add_shortcode( 's', 'azc_bbcode_strike' );
add_shortcode( 'S', 'azc_bbcode_strike' );

function azc_bbcode_url($atts, $content = null) {
	if (empty($atts)){
		$return = "<a class='azc_bbc_url' href='$content'>".$content."</a>";
	}else{
		$attribs = implode('',$atts);
		$url = substr ( $attribs, 1);
		$url = str_replace("'", '', str_replace('"', '', $url));
		
		$return = "<a href='$url' class='azc_bbc_url'>".$content."</a>";
	}
	return $return;
}
add_shortcode( 'url', 'azc_bbcode_url' );
add_shortcode( 'URL', 'azc_bbcode_url' );
add_shortcode( 'link', 'azc_bbcode_url' );
add_shortcode( 'LINK', 'azc_bbcode_url' );

function azc_bbcode_color($atts, $content = null) {
	if (empty($atts)){
		$color = 'black';
	}else{
		$attribs = implode('',$atts);
		$color = str_replace("'", '', str_replace('"', '', substr ( $attribs, 1)));
		if(ctype_xdigit($color)) {
			$color = '#'.$color;
		}
	}
	return "<span style='color: $color; '>".do_shortcode($content)."</span>";
}
add_shortcode( 'color', 'azc_bbcode_color' );
add_shortcode( 'COLOR', 'azc_bbcode_color' );
add_shortcode( 'colour', 'azc_bbcode_color' );
add_shortcode( 'COLOUR', 'azc_bbcode_color' );


function azc_bbcode_quote($atts, $content = null) {
	if (empty($atts)){
		$return_quote = "<blockquote class='azc_bbc_quote'>".do_shortcode($content)."</blockquote>";
	}else{
		$attribs = implode('',$atts);
		$cite = str_replace("'", '', str_replace('"', '', substr ( $attribs, 1)));
		$return_quote = "<div class='azc_bbc_quote'>$cite wrote:<blockquote class='azc_bbc_quote'>".do_shortcode($content)."</blockquote></div>";
	}
	return $return_quote;
}
add_shortcode( 'q', 'azc_bbcode_quote' );
add_shortcode( 'Q', 'azc_bbcode_quote' );
add_shortcode( 'quote', 'azc_bbcode_quote' );
add_shortcode( 'QUOTE', 'azc_bbcode_quote' );
add_shortcode( 'blockquote', 'azc_bbcode_quote' );
add_shortcode( 'BLOCKQUOTE', 'azc_bbcode_quote' );


function azc_bbcode_code($atts, $content = null) {
	return "<pre class='azc_bbc_code'><code class='azc_bbc_code'>".do_shortcode($content)."</code></pre>";
}
add_shortcode( 'code', 'azc_bbcode_code' );
add_shortcode( 'CODE', 'azc_bbcode_code' );

function azc_bbcode_size($atts, $content = null) {
	if (empty($atts)){
		$size = '1em';
	}else{
		$attribs = implode('',$atts);
		$size = str_replace("'", '', str_replace('"', '', substr ( $attribs, 1)));
	}
	return "<span style='font-size: $size;'>".do_shortcode($content)."</span>";
}
add_shortcode( 'size', 'azc_bbcode_size' );
add_shortcode( 'SIZE', 'azc_bbcode_size' );


function azc_bbcode_img($atts, $content = null) {
	if (empty($atts)){
		$title = '';
	}else{
		$attribs = implode('',$atts);
		$title = str_replace("'", '', str_replace('"', '', substr ( $attribs, 1)));
	}
	if (strlen($title) > 0) { $title = "title='$title' alt='$title'"; }
	return "<img class='azc_bbc_image' src='$content' $title />";
}
add_shortcode( 'img', 'azc_bbcode_img' );
add_shortcode( 'IMG', 'azc_bbcode_img' );

function azc_bbcode_centre($atts, $content = null) {
	return "<center class='azc_bbc_center'>".do_shortcode($content)."</center>";
}
add_shortcode( 'center', 'azc_bbcode_centre' );
add_shortcode( 'CENTER', 'azc_bbcode_centre' );
add_shortcode( 'centre', 'azc_bbcode_centre' );
add_shortcode( 'CENTRE', 'azc_bbcode_centre' );

function azc_bbc_load_css(){
	wp_enqueue_style( 'azurecurve-bbcode', plugins_url( 'style.css', __FILE__ ) );
}
add_action('wp_enqueue_scripts', 'azc_bbc_load_css');

?>