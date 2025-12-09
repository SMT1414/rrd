<?php
/**
 * Template Name: Service Page
 * Description: A template for service pages that loads the appropriate template part
 */

get_header();

// Get the current page slug
$page_slug = get_post_field('post_name', get_post());

// Map page slugs to template parts
$service_templates = array(
    'seo' => 'service-seo',
    'search-engine-optimization' => 'service-seo',
    'web-design' => 'service-webdesign',
    'web-design-ipswich-suffolk' => 'service-webdesign',
    'social-media-marketing' => 'service-social',
    'social-media' => 'service-social',
    'paid-advertising' => 'service-ppc',
    'ppc' => 'service-ppc',
    'content-copywriting-ipswich-suffolk' => 'service-content',
    'content-copywriting' => 'service-content',
    'ecommerce-web-design-ipswich-suffolk' => 'service-ecommerce',
    'ecommerce' => 'service-ecommerce',
    'pr-services' => 'service-pr',
    'link-building' => 'service-linkbuilding',
    'our-services' => 'service-overview',
    'services' => 'service-overview',
);

// Check if we have a specific template
$template_name = isset($service_templates[$page_slug]) ? $service_templates[$page_slug] : 'service-default';

// Try to load the specific template part, fall back to default
$template_file = get_template_directory() . '/template-parts/' . $template_name . '.php';

if (file_exists($template_file)) {
    get_template_part('template-parts/' . $template_name);
} else {
    // Fall back to default service template
    get_template_part('template-parts/service-default');
}

get_footer();
