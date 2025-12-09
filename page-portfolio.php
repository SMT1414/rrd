<?php
/**
 * Template Name: Portfolio Page
 * Description: Full-width portfolio and case studies template
 */

get_header();

$slug = get_post_field('post_name', get_post());

// Route to appropriate template based on page slug
switch ($slug) {
    case 'our-portfolio':
    case 'portfolio':
    case 'our-work':
        get_template_part('template-parts/page', 'portfolio');
        break;
        
    case 'case-studies':
    case 'casestudies':
        get_template_part('template-parts/page', 'casestudies');
        break;
        
    default:
        // For any other page using this template, show portfolio
        get_template_part('template-parts/page', 'portfolio');
        break;
}

get_footer();
