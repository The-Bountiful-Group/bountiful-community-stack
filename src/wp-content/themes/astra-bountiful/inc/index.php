<?php

if (!defined('ABSPATH')) exit;

// require_once('something.php');

add_action('init', function () {
	new Bountiful();
});

class Bountiful
{
	function __construct()
	{
		add_action('wp_head', [$this, 'wp_head']);

		// remove 'read more' from excerpt
		add_filter('excerpt_more', '__return_empty_string');

		// remove post navigation
		remove_action('astra_entry_after', 'astra_single_post_navigation_markup');

		// display author bio section
		add_action('astra_template_parts_content', [$this, 'add_author_bio'], 14);
	}

	public function add_author_bio()
	{
		if (function_exists('wpsabox_author_box')) echo wpsabox_author_box();
	}

	public function wp_head()
	{
?>
		<link rel="dns-prefetch" href="//fonts.googleapis.com" />
		<link rel="stylesheet" id='astra-google-fonts-css' href="//fonts.googleapis.com/css?family=Pacifico%3A400%2C&#038;display=fallback&#038;ver=3.3.2" media="all" />
<?php
	}
}
