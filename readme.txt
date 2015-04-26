=== azurecurve BBCode ===
Contributors: azurecurve
Donate link: http://wordpress.azurecurve.co.uk/support-development/
Author URI: http://wordpress.azurecurve.co.uk/
Plugin URI: http://wordpress.azurecurve.co.uk/plugins/bbcode/
Tags: posts, pages, bbcode
Requires at least: 3.3
Tested up to: 4.2.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows users to use standard bbcode in posts and pages.

== Description ==
Allows users to use standard bbcode in posts and pages in place of HTML.

The following bbcodes can be used:
Bold: [b]bold[/b]
Italic: [i]italics[/i]
Underline: [u]underline[/u]
Center Text:[center]centered text[/center]
Strike :[s]strike this out[/s] [strike]strike this out[/strike]
Quote: [quote]Lorem ipsum dolor sit amet, consectetuer adipiscing elit,[/quote] [quote=NAME]Lorem ipsum dolor sit amet[/quote]
Color: [color="red"]red[/color] [color="ff0000"]hex red[/color] [color=#ff0000]hex red[/color]
Font size: [size=12pt]12pt font size[/size] [size=1.2em]1.2em font size[/size] [size=12px]12px font size[/size]
Image: [img]http://s.wordpress.org/style/images/codeispoetry.png[/img] [img=Code is Poetry]http://s.wordpress.org/style/images/codeispoetry.png[/img]
URL: [url]http://wordpress.org/[/url] [url=http://wordpress.org/]WordPress[/url] [link]http://wordpress.org/[/link] [link=http://wordpress.org/]WordPress[/link]
Ordered lists: [ol][li][/li][li][/li][/ol]
Unordered lists: [ul][li][/li][li][/li][/ul]
Table: [table][tr][th][/th][th][/th][/tr][tr][td][/td][td][/td][/tr][tr][td][/td][td][/td][/tr][/table]
Code:[code]function azc_bbcode_bold($atts, $content = null) { return "<span class='azc_bbc_bold'>".do_shortcode($content)."</span>"; }[/code]

== Installation ==
To install the plugin copy the <em>azurcurve-posts-archive</em> folder into your plug-in directory and activate it.

== Changelog ==
Changes and feature additions for the BBCode plugin:
= 1.0.0 =
* First version

== Frequently Asked Questions ==
= Can I translate this plugin? =
Yes, the .pot fie is in the plugin's languages folder and can also be downloaded from the plugin page on http://wordpress.azurecurve.co.uk; if you do translate this plugin please sent the .po and .mo files to wordpress.translations@azurecurve.co.uk for inclusion in the next version (full credit will be given).