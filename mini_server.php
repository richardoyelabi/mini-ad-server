<?php
/* MANUAL AD INSERTION BY RICHARD*/  




//Insert ads after second paragraph of single post content.
 
add_filter( 'the_content', 'prefix_insert_post_ads' );
 
function prefix_insert_post_ads( $content ) {
    $ad_code = '<div class="mini-server"><noscript><a href="https://www.kqzyfj.com/click-100222216-10860792" target="_blank"><img src="https://www.tqlkg.com/image-100222216-10860792" width="468" height="60" alt="Great deals on used books." border="0"/></a></noscript></div><br>';
 
    if ( is_single() && ! is_admin() ) {
        return prefix_insert_after_paragraph( $ad_code, 2, $content );
    }
     
    return $content;
}
  
// Parent Function that makes the magic happen
  
function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
    $closing_p = '</p>';
    $paragraphs = explode( $closing_p, $content );
    foreach ($paragraphs as $index => $paragraph) {
 
        if ( trim( $paragraph ) ) {
            $paragraphs[$index] .= $closing_p;
        }
 
        if ( $paragraph_id == $index + 1 ) {
            $paragraphs[$index] .= $insertion;
            $paragraph_id += 2;
        }
    }
     
    return implode( '', $paragraphs );
}


// Enqueue Ad Javascript and CSS

function add_mini_server_script() {
    if ( is_single() && !is_admin() ) {
        wp_enqueue_script('mini_server_script', get_stylesheet_directory_uri().'/mini_server/mini_server_js.php');
    }
}

function add_mini_server_style() {
    if ( is_single() && !is_admin() ) {
        wp_enqueue_style('mini_server_style', get_stylesheet_directory_uri().'/mini_server/mini_server.css');
    }
}


add_action('wp_enqueue_scripts', 'add_mini_server_script');

add_action('wp_head', 'add_mini_server_style');