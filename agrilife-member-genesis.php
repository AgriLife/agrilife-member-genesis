<?php
/**
 * Plugin Name: AgriLife Member Genesis Plugin
 * Description: Adds the AgriLife Member bar to the site footer of AgriLife sites using Genesis child themes.
 * Author: Elisabeth Button
 * Author URI:   https://https://github.com/AgriLife/
 * Text Domain:  agrilife-member
 * License:      GPL-2.0+
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Abort if this file is called directly
if ( !defined('ABSPATH') ) { 
    die;
}


// Add stylesheet 
function agrilife_member_styles() {
    wp_enqueue_style( 'style',  get_template_directory_uri() . '/../../plugins/agrilife-member-genesis/style.css' );                      
}
add_action( 'wp_enqueue_scripts', 'agrilife_member_styles' );



/**
 * Hooks in before footer CTA widget area.
 *
 * @since 1.0.0
*/
function agrilife_member_footer_bar() {
	echo '<div role="region" aria-label="Texas A&M AgriLife Membership Statement" class="before-footer-cta">
    <div class="wrap"><div id="member-wrap" class="wp-block-columns">
<div id="a-bg"></div>
<div id="member-agrilife" class="wp-block-column">
<p class="member-text">A member of<br /><a href="https://agrilife.tamu.edu/"><span class="member-brand">Texas A&amp;M AgriLife</span></a></p>
</div>
<div id="member-list" class="wp-block-column">
<p><a href="https://agrilifeextension.tamu.edu/">Texas A&amp;M AgriLife Extension Service</a> | <a href="https://agriliferesearch.tamu.edu/">Texas A&amp;M AgriLife Research</a> | <a href="https://tfsweb.tamu.edu/">Texas A&amp;M Forest Service</a> | <a href="https://tvmdl.tamu.edu/">Texas A&amp;M AgriLife Veterinary Medical Diagnostic Lab</a> | <a href="https://aglifesciences.tamu.edu/">College of Agriculture &amp; Life Sciences</a></p>
</div>
</div></div></div>';
}

add_action ('genesis_before_footer', 'agrilife_member_footer_bar' );











// That's it!
?>
