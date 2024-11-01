<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

delete_option('gopiplus_displaydate');
delete_option('gopiplus_displaycategory');
delete_option('gopiplus_displaycomment');
delete_option('gopiplus_displayimage');
delete_option('gopiplus_displaytag');
delete_option('gopiplus_displaydesc');
delete_option('gopiplus_displayreadmore');
delete_option('gopiplus_query_posts_showposts');
delete_option('gopiplus_query_posts_orderby');
delete_option('gopiplus_query_posts_order');
delete_option('gopiplus_query_posts_category');
delete_option('gopiplus_query_slider');
 
// for site options in Multisite
delete_site_option('gopiplus_displaydate');
delete_site_option('gopiplus_displaycategory');
delete_site_option('gopiplus_displaycomment');
delete_site_option('gopiplus_displayimage');
delete_site_option('gopiplus_displaytag');
delete_site_option('gopiplus_displaydesc');
delete_site_option('gopiplus_displayreadmore');
delete_site_option('gopiplus_query_posts_showposts');
delete_site_option('gopiplus_query_posts_orderby');
delete_site_option('gopiplus_query_posts_order');
delete_site_option('gopiplus_query_posts_category');
delete_site_option('gopiplus_query_slider');