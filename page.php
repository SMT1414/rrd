<?php
/**
 * Page Template
 * This template handles pages including About Us and Contact
 */
get_header();

while (have_posts()): the_post();
    $page_slug = get_post_field('post_name', get_the_ID());
    
    // Check for specific page templates
    if ($page_slug === 'about-us' || $page_slug === 'about') {
        get_template_part('template-parts/page', 'about');
    } elseif ($page_slug === 'contact-us' || $page_slug === 'contact') {
        get_template_part('template-parts/page', 'contact');
    } elseif ($page_slug === 'our-portfolio' || $page_slug === 'portfolio') {
        get_template_part('template-parts/page', 'portfolio');
    } elseif ($page_slug === 'case-studies') {
        get_template_part('template-parts/page', 'casestudies');
    } else {
        // Check if the page was built with Elementor
        $is_elementor = class_exists('\\Elementor\\Plugin') && 
                        \Elementor\Plugin::$instance->documents->get(get_the_ID())->is_built_with_elementor();
        
        if ($is_elementor) {
            // Elementor handles the content - output directly for full width
            the_content();
        } else {
            // Regular page content with centered container
            ?>
            <div class="page-content" style="max-width: 1140px; margin: 0 auto; padding: 80px 20px;">
                <h1 class="page-title" style="color: #1e1666; margin-bottom: 30px; font-family: 'Poppins', sans-serif; font-size: 42px; font-weight: 700;"><?php the_title(); ?></h1>
                <div class="entry-content" style="color: #6a7c92; font-size: 16px; line-height: 1.8;">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php
        }
    }
endwhile;

get_footer();
?>
