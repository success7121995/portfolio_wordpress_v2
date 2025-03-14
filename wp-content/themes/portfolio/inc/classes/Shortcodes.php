<?php
/**
 * Shortcodes
 * 
 * @package Personal Website
 * 
 * Each component is a shortcode, so it can be directly called by entering the shortcode in the backend.
 */

class Shortcodes {
  // Prevent from multiple instantiations
  use Singleton;

  private function __construct() {
    add_shortcode('embed_about_me', [$this, 'about_me_shortcode']);
  }

  // About Me
  function about_me_shortcode() {
    $about_me_query = new WP_Query([
      'post_type' => 'page',
      'title' => 'About Me',
      'posts_per_page' => 1
    ]);



    $about_me_comp = $about_me_query -> have_posts() ? $about_me_query -> posts[0] : null;

    // If there is no content, return an empty string
    if (empty($about_me_comp)) return '';

    $content = apply_filters('the_content', $about_me_comp -> post_content);
    $content = wp_kses_post($content); // Sanitize content

    // Custom class to p tags
    $content = str_replace('<p>', '<p class="p-4 font-primary text-black text-sm/6 transform -rotate-3 w-[95%] mx-auto mt-12 lg:mt-8">', $content);
    return $content;
  }
}