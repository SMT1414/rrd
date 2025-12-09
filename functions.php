<?php
/**
 * Red Rocket Digital Theme Functions
 * Elementor-compatible theme
 */

if (!defined('ABSPATH')) exit;

/**
 * Include auto-create pages functionality
 */
require_once get_template_directory() . '/inc/auto-create-pages.php';

/**
 * Theme Setup
 */
function redrocket_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-width' => true,
        'flex-height' => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Elementor support
    add_theme_support('elementor');
    add_theme_support('header-footer-elementor');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'redrocket-digital'),
        'footer' => __('Footer Menu', 'redrocket-digital'),
    ));
}
add_action('after_setup_theme', 'redrocket_setup');

/**
 * Enqueue Scripts and Styles
 */
function redrocket_scripts() {
    // Google Fonts - optimized loading
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@300;400;500&display=swap', array(), null);
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    
    // Main theme stylesheet (original site CSS)
    wp_enqueue_style('redrocket-main', get_template_directory_uri() . '/assets/css/main.css', array(), '2.0.1');
    
    // Theme base stylesheet
    wp_enqueue_style('redrocket-style', get_stylesheet_uri(), array('redrocket-main'), '2.3.1');
    
    // Service pages stylesheet
    wp_enqueue_style('redrocket-services', get_template_directory_uri() . '/assets/css/service-pages.css', array('redrocket-style'), '2.3.1');
    
    // Theme JavaScript
    wp_enqueue_script('redrocket-scripts', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), '2.0.1', true);
}
add_action('wp_enqueue_scripts', 'redrocket_scripts');

/**
 * Performance Optimizations
 */

// Add resource hints for faster loading
function redrocket_resource_hints($urls, $relation_type) {
    if ($relation_type === 'dns-prefetch') {
        $urls[] = '//fonts.googleapis.com';
        $urls[] = '//fonts.gstatic.com';
        $urls[] = '//cdnjs.cloudflare.com';
    }
    
    if ($relation_type === 'preconnect') {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin' => 'anonymous',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    
    return $urls;
}
add_filter('wp_resource_hints', 'redrocket_resource_hints', 10, 2);

// Add defer to non-critical scripts
function redrocket_defer_scripts($tag, $handle, $src) {
    $defer_scripts = array('redrocket-scripts', 'font-awesome');
    
    if (in_array($handle, $defer_scripts)) {
        return str_replace(' src', ' defer src', $tag);
    }
    
    return $tag;
}
add_filter('script_loader_tag', 'redrocket_defer_scripts', 10, 3);

// Add loading="lazy" to images
function redrocket_lazy_load_images($content) {
    if (is_admin()) return $content;
    
    // Add lazy loading to images that don't have it
    $content = preg_replace('/<img((?!loading=)[^>]*)>/i', '<img$1 loading="lazy">', $content);
    
    return $content;
}
add_filter('the_content', 'redrocket_lazy_load_images');
add_filter('post_thumbnail_html', 'redrocket_lazy_load_images');
add_filter('widget_text', 'redrocket_lazy_load_images');

// Remove unnecessary WordPress head elements
function redrocket_cleanup_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'redrocket_cleanup_head');

// Disable XML-RPC for security
add_filter('xmlrpc_enabled', '__return_false');

// Remove query strings from static resources
function redrocket_remove_query_strings($src) {
    if (strpos($src, '?ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'redrocket_remove_query_strings', 10, 2);
add_filter('script_loader_src', 'redrocket_remove_query_strings', 10, 2);

/**
 * Elementor Compatibility - Add body classes
 */
function redrocket_body_classes($classes) {
    // Add Elementor classes for styling compatibility
    if (class_exists('\\Elementor\\Plugin')) {
        $classes[] = 'elementor-default';
        $classes[] = 'elementor-kit-7';
    }
    
    if (is_front_page()) {
        $classes[] = 'home-page';
        $classes[] = 'elementor-page';
    }
    
    return $classes;
}
add_filter('body_class', 'redrocket_body_classes');

/**
 * Allow full-width Elementor layouts
 */
function redrocket_elementor_content_width() {
    return 1140;
}
add_filter('elementor/template/page_content_width', 'redrocket_elementor_content_width');

/**
 * Register Widget Areas
 */
function redrocket_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'redrocket-digital'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here.', 'redrocket-digital'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer 1', 'redrocket-digital'),
        'id' => 'footer-1',
        'description' => __('Footer widget area 1', 'redrocket-digital'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer 2', 'redrocket-digital'),
        'id' => 'footer-2',
        'description' => __('Footer widget area 2', 'redrocket-digital'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer 3', 'redrocket-digital'),
        'id' => 'footer-3',
        'description' => __('Footer widget area 3', 'redrocket-digital'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'redrocket_widgets_init');

/**
 * Fallback menu if no menu is assigned
 */
function redrocket_fallback_menu() {
    ?>
    <ul class="nav-menu">
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li class="menu-item-has-children">
            <a href="#">Our Solutions</a>
            <ul class="sub-menu">
                <li><a href="<?php echo home_url('/web-design/'); ?>">Web Design & Development</a></li>
                <li><a href="<?php echo home_url('/design-services/'); ?>">Logo & Brand Design</a></li>
                <li><a href="<?php echo home_url('/website-hosting/'); ?>">Website Hosting</a></li>
                <li><a href="<?php echo home_url('/seo/'); ?>">Search Engine Optimisation</a></li>
                <li><a href="<?php echo home_url('/social-media-marketing/'); ?>">Social Media Management</a></li>
                <li><a href="<?php echo home_url('/paid-advertising/'); ?>">Paid Advertising</a></li>
                <li><a href="<?php echo home_url('/pr-services/'); ?>">PR Services</a></li>
            </ul>
        </li>
        <li><a href="<?php echo home_url('/case-studies/'); ?>">Case Studies</a></li>
        <li><a href="<?php echo home_url('/our-portfolio/'); ?>">Our Work</a></li>
        <li><a href="<?php echo home_url('/faq/'); ?>">FAQs</a></li>
        <li><a href="<?php echo home_url('/about-us/'); ?>">About Us</a></li>
        <li><a href="<?php echo home_url('/contact-us/'); ?>">Contact Us</a></li>
    </ul>
    <?php
}

/**
 * Theme Activation
 */
function redrocket_activation() {
    // Update site title
    update_option('blogname', 'Red Rocket Digital');
    update_option('blogdescription', 'Ultimate Digital Marketing Solutions For Your Business | Ipswich, Suffolk');
    
    // Show admin notice
    set_transient('redrocket_activation_notice', true, 5);
}
add_action('after_switch_theme', 'redrocket_activation');

/**
 * Force correct site title in document title only (not in database)
 */
function redrocket_fix_document_title($title) {
    // Replace "My Blog" with correct name in the document title
    return str_replace('My Blog', 'Red Rocket Digital', $title);
}
add_filter('pre_get_document_title', 'redrocket_fix_document_title');
add_filter('wp_title', 'redrocket_fix_document_title');

/**
 * Page-specific meta data from WebArchix archive
 * Original titles and descriptions preserved for SEO continuity
 */
function redrocket_get_page_meta() {
    return array(
        // Homepage
        '' => array(
            'title' => 'Web Design & Digital Marketing Agency Ipswich | Red Rocket',
            'description' => 'Red Rocket Digital is a full-service digital marketing agency in Ipswich, Suffolk. We offer web design, SEO, social media marketing, and PPC services to help your business grow.',
        ),
        // Web Design
        'web-design' => array(
            'title' => 'Website Design Ipswich – Web Design Agency Ipswich Suffolk | Red Rocket',
            'description' => 'Professional web design services in Ipswich, Suffolk. Red Rocket creates stunning, mobile-friendly websites that deliver leads and grow your business.',
        ),
        // eCommerce
        'ecommerce-web-design-ipswich-suffolk' => array(
            'title' => 'ECommerce Website Design - eCommerce Web Design Agency Ipswich Suffolk',
            'description' => 'Expert eCommerce website design in Ipswich. Red Rocket builds online stores that convert visitors into customers with professional design and multi-channel selling.',
        ),
        // Content Copywriting
        'content-copywriting-ipswich-suffolk' => array(
            'title' => 'Content Copywriting – Persuasive Content Copywriting Ipswich Suffolk',
            'description' => 'Professional content copywriting services in Ipswich. Our expert copywriters create compelling, conversion-focused content for web and social media.',
        ),
        // Our Services
        'our-services' => array(
            'title' => 'Red Rocket Services – Web Design & Digital Marketing Ipswich, Suffolk',
            'description' => 'Explore our full range of digital marketing services including web design, SEO, social media, PPC, and content marketing. Red Rocket Digital, Ipswich.',
        ),
        // SEO
        'seo' => array(
            'title' => 'SEO Services Ipswich – Search Engine Optimisation | Red Rocket Digital',
            'description' => 'Professional SEO services in Ipswich, Suffolk. Red Rocket Digital helps your business rank higher on Google with proven search engine optimisation strategies.',
        ),
        // Social Media Marketing
        'social-media-marketing' => array(
            'title' => 'Social Media Marketing Ipswich – Social Media Management | Red Rocket',
            'description' => 'Expert social media marketing and management services in Ipswich. Grow your brand presence on Facebook, Instagram, LinkedIn and more with Red Rocket.',
        ),
        // Paid Advertising
        'paid-advertising' => array(
            'title' => 'PPC & Paid Advertising Ipswich – Google Ads Management | Red Rocket',
            'description' => 'Expert PPC and paid advertising management in Ipswich. Get instant results with Google Ads and Facebook Ads campaigns managed by Red Rocket Digital.',
        ),
        // PR Services
        'pr-services' => array(
            'title' => 'PR Services Ipswich – Public Relations Agency Suffolk | Red Rocket',
            'description' => 'Professional PR services in Ipswich, Suffolk. Red Rocket delivers memorable brand experiences and helps you stand out from the competition.',
        ),
        // Design Services / Logo & Brand
        'design-services' => array(
            'title' => 'Logo & Brand Design Ipswich – Branding Agency Suffolk | Red Rocket',
            'description' => 'Professional logo design and branding services in Ipswich. Create a memorable brand identity with Red Rocket Digital\'s expert designers.',
        ),
        // Website Hosting
        'website-hosting' => array(
            'title' => 'Website Hosting Ipswich – Reliable Web Hosting | Red Rocket Digital',
            'description' => 'Reliable, fast website hosting services in Ipswich. Keep your site online 24/7 with Red Rocket Digital\'s managed hosting solutions.',
        ),
        // About Us
        'about-us' => array(
            'title' => 'About Us – Digital Marketing Agency Ipswich | Red Rocket Digital',
            'description' => 'Learn about Red Rocket Digital, Ipswich\'s leading digital marketing agency. Meet our team and discover what makes us different.',
        ),
        // Contact
        'contact-us' => array(
            'title' => 'Contact Us – Get In Touch | Red Rocket Digital Ipswich',
            'description' => 'Contact Red Rocket Digital for a free consultation. We\'re based in Ipswich, Suffolk and ready to help your business grow online.',
        ),
        // Case Studies
        'case-studies' => array(
            'title' => 'Case Studies – Our Success Stories | Red Rocket Digital',
            'description' => 'View our digital marketing case studies and success stories. See how Red Rocket Digital has helped businesses grow across Ipswich and beyond.',
        ),
        // Our Portfolio
        'our-portfolio' => array(
            'title' => 'Our Work – Web Design Portfolio | Red Rocket Digital',
            'description' => 'Browse our web design and digital marketing portfolio. See the stunning websites and successful campaigns we\'ve created for our clients.',
        ),
        // FAQ
        'faq' => array(
            'title' => 'FAQs – Frequently Asked Questions | Red Rocket Digital',
            'description' => 'Find answers to common questions about our digital marketing services, pricing, and process. Red Rocket Digital, Ipswich.',
        ),
        // Blog / News
        'news' => array(
            'title' => 'Our Blog - Red Rocket',
            'description' => 'Digital marketing insights, tips, and news from Red Rocket Digital. Stay updated with the latest in web design, SEO, and online marketing.',
        ),
        // Marketing 360
        'marketing-360' => array(
            'title' => 'Marketing 360 - B2B Lead Generation | Red Rocket',
            'description' => 'Comprehensive B2B lead generation and marketing solutions with Marketing 360. Full-service digital marketing from Red Rocket Digital.',
        ),
    );
}

/**
 * SEO Enhancements - Add meta tags
 * Checks post meta first, then falls back to hardcoded array
 */
function redrocket_seo_meta_tags() {
    // Only add if no SEO plugin is active
    if (defined('WPSEO_VERSION') || defined('RANK_MATH_VERSION') || defined('AIOSEO_VERSION')) {
        return;
    }
    
    $site_name = 'Red Rocket Digital';
    $page_meta = redrocket_get_page_meta();
    $default_description = 'Red Rocket Digital is a leading digital marketing agency in Ipswich, Suffolk. We offer web design, SEO, social media management, and paid advertising services.';
    $description = '';
    
    // Get current page slug
    $current_slug = '';
    if (is_front_page()) {
        $current_slug = '';
    } elseif (is_page()) {
        $current_slug = get_post_field('post_name', get_post());
    }
    
    // Priority 1: Check post meta (set by auto-create-pages)
    if (is_page() || is_front_page()) {
        $post_id = get_the_ID();
        $meta_description = get_post_meta($post_id, '_rr_meta_description', true);
        if (!empty($meta_description)) {
            $description = $meta_description;
        }
    }
    
    // Priority 2: Check hardcoded array
    if (empty($description) && isset($page_meta[$current_slug])) {
        $description = $page_meta[$current_slug]['description'];
    }
    
    // Priority 3: Use post excerpt
    if (empty($description) && is_singular()) {
        $post = get_post();
        if ($post->post_excerpt) {
            $description = wp_strip_all_tags($post->post_excerpt);
        }
    }
    
    // Fallback to default
    if (empty($description)) {
        $description = $default_description;
    }
    
    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">' . "\n";
    
    // Open Graph tags
    echo '<meta property="og:locale" content="en_GB">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr(wp_get_document_title()) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url(get_permalink()) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '">' . "\n";
    
    // Twitter Card
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    
    // Geo tags for local SEO
    echo '<meta name="geo.region" content="GB-SFK">' . "\n";
    echo '<meta name="geo.placename" content="Ipswich">' . "\n";
}
add_action('wp_head', 'redrocket_seo_meta_tags', 1);

/**
 * Optimize document title - Use page-specific titles from archive
 * Checks post meta first, then falls back to hardcoded array
 */
function redrocket_document_title_parts($title) {
    // Fix if site name is still "My Blog"
    if (isset($title['site']) && $title['site'] === 'My Blog') {
        $title['site'] = 'Red Rocket Digital';
    }
    
    // Get current page slug
    $current_slug = '';
    if (is_front_page()) {
        $current_slug = '';
    } elseif (is_page()) {
        $current_slug = get_post_field('post_name', get_post());
    }
    
    // Priority 1: Check post meta (set by auto-create-pages)
    if (is_page() || is_front_page()) {
        $post_id = get_the_ID();
        $meta_title = get_post_meta($post_id, '_rr_meta_title', true);
        if (!empty($meta_title)) {
            return array('title' => $meta_title);
        }
    }
    
    // Priority 2: Check hardcoded array
    $page_meta = redrocket_get_page_meta();
    if (isset($page_meta[$current_slug]) && !empty($page_meta[$current_slug]['title'])) {
        return array('title' => $page_meta[$current_slug]['title']);
    }
    
    return $title;
}
add_filter('document_title_parts', 'redrocket_document_title_parts');

/**
 * Add Schema.org structured data
 */
function redrocket_schema_markup() {
    if (!is_front_page()) return;
    
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        '@id' => home_url('/#organization'),
        'name' => 'Red Rocket Digital',
        'legalName' => 'SMT Digital Ltd',
        'alternateName' => 'Red Rocket T/A SMT Digital Ltd',
        'description' => 'Digital marketing agency offering web design, SEO, social media management, and paid advertising services.',
        'url' => home_url('/'),
        'logo' => get_template_directory_uri() . '/assets/images/redrockettransparentlogo-1.png',
        'image' => get_template_directory_uri() . '/assets/images/redrockettransparentlogo-1.png',
        'telephone' => '+441473563990',
        'email' => 'info@redrocket.digital',
        'address' => array(
            '@type' => 'PostalAddress',
            'streetAddress' => 'Epsilon House, West Road, Ransomes Euro Park',
            'addressLocality' => 'Ipswich',
            'addressRegion' => 'Suffolk',
            'postalCode' => 'IP3 9FJ',
            'addressCountry' => 'GB'
        ),
        'geo' => array(
            '@type' => 'GeoCoordinates',
            'latitude' => '52.0405',
            'longitude' => '1.1976'
        ),
        'openingHoursSpecification' => array(
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'),
            'opens' => '09:00',
            'closes' => '17:30'
        ),
        'sameAs' => array(
            'https://www.facebook.com/redrocketdigital',
            'https://www.linkedin.com/company/red-rocket-digital',
            'https://twitter.com/redraborocket',
            'https://smtdigital.co.uk',
            'https://seoaudits.digital'
        ),
        'priceRange' => '££',
        'areaServed' => array(
            '@type' => 'Place',
            'name' => 'Ipswich, Suffolk, United Kingdom'
        ),
        'serviceType' => array(
            'Web Design',
            'Search Engine Optimization',
            'Social Media Marketing',
            'Pay Per Click Advertising',
            'Digital Marketing'
        )
    );
    
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
}
add_action('wp_head', 'redrocket_schema_markup', 5);

/**
 * Admin notice after activation
 */
function redrocket_admin_notice() {
    if (get_transient('redrocket_activation_notice')) {
        $elementor_installed = class_exists('\\Elementor\\Plugin');
        ?>
        <div class="notice notice-success is-dismissible">
            <p><strong>Red Rocket Digital theme activated!</strong></p>
            <?php if (!$elementor_installed): ?>
            <p><strong>Important:</strong> This theme requires <a href="<?php echo admin_url('plugin-install.php?s=elementor&tab=search&type=term'); ?>">Elementor</a> plugin to function properly. Please install and activate Elementor.</p>
            <?php else: ?>
            <p>Elementor is installed. You can now edit your pages with Elementor.</p>
            <?php endif; ?>
        </div>
        <?php
        delete_transient('redrocket_activation_notice');
    }
}
add_action('admin_notices', 'redrocket_admin_notice');

/**
 * Add Elementor CSS variables for original site colors
 */
function redrocket_elementor_css() {
    ?>
    <style>
    :root {
        --e-global-color-primary: #6ec1e4;
        --e-global-color-secondary: #54595f;
        --e-global-color-text: #7a7a7a;
        --e-global-color-accent: #61ce70;
        --e-global-color-1a5fc9d: #1e1666;
        --e-global-color-0b866e5: #ec5d49;
        --e-global-color-a500ff3: #010101;
        --e-global-typography-primary-font-family: "Roboto";
        --e-global-typography-primary-font-weight: 600;
        --e-global-typography-secondary-font-family: "Roboto Slab";
        --e-global-typography-secondary-font-weight: 400;
        --e-global-typography-text-font-family: "Roboto";
        --e-global-typography-text-font-weight: 400;
        --e-global-typography-accent-font-family: "Roboto";
        --e-global-typography-accent-font-weight: 500;
    }
    
    /* ============================================
       ELEMENTOR FULL WIDTH FIX - CRITICAL
       ============================================ */
    
    /* Ensure body and html don't constrain */
    html, body {
        overflow-x: hidden;
        width: 100%;
    }
    
    /* Main content area full width */
    .site-main,
    #main-content {
        width: 100%;
        max-width: 100%;
        margin: 0;
        padding: 0;
    }
    
    /* Elementor Header/Footer Theme Locations */
    .elementor-location-header,
    .elementor-location-footer,
    [data-elementor-type="header"],
    [data-elementor-type="footer"] {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    
    /* Full width sections in header/footer */
    .elementor-location-header .elementor-section-full_width,
    .elementor-location-footer .elementor-section-full_width,
    .elementor-location-header .elementor-top-section,
    .elementor-location-footer .elementor-top-section {
        width: 100% !important;
        max-width: 100% !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
    }
    
    /* Stretched sections fix */
    .elementor-section-stretched {
        width: 100% !important;
        left: 0 !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
    }
    
    /* Elementor container in full-width sections */
    .elementor-section-full_width > .elementor-container {
        max-width: 100% !important;
        width: 100% !important;
    }
    
    /* Boxed sections keep their container width */
    .elementor-section-boxed > .elementor-container {
        max-width: 1140px;
    }
    
    /* RadiantThemes button styling (used in original site) */
    .radiantthemes-custom-button .radiantthemes-custom-button-main {
        display: inline-block;
        padding: 10px 35px;
        border-radius: 5px;
        font-weight: 400;
        font-size: 15px;
        line-height: 28px;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .radiantthemes-custom-button .radiantthemes-custom-button-main:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }
    </style>
    <?php
}
add_action('wp_head', 'redrocket_elementor_css');

/**
 * Check if Elementor is editing
 */
function redrocket_is_elementor_editing() {
    if (class_exists('\\Elementor\\Plugin')) {
        return \Elementor\Plugin::$instance->editor->is_edit_mode() || 
               \Elementor\Plugin::$instance->preview->is_preview_mode();
    }
    return false;
}

/**
 * Add SEO Meta Box to Pages
 */
function redrocket_add_seo_meta_box() {
    add_meta_box(
        'redrocket_seo_meta',
        'SEO Settings (Red Rocket)',
        'redrocket_seo_meta_box_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'redrocket_add_seo_meta_box');

/**
 * Meta Box Callback
 */
function redrocket_seo_meta_box_callback($post) {
    wp_nonce_field('redrocket_seo_meta_box', 'redrocket_seo_meta_box_nonce');
    
    $meta_title = get_post_meta($post->ID, '_rr_meta_title', true);
    $meta_description = get_post_meta($post->ID, '_rr_meta_description', true);
    
    ?>
    <style>
        .rr-meta-box label { display: block; font-weight: 600; margin-bottom: 5px; }
        .rr-meta-box input[type="text"], .rr-meta-box textarea { width: 100%; }
        .rr-meta-box .description { color: #666; font-size: 12px; margin-top: 5px; }
        .rr-meta-box .field-group { margin-bottom: 20px; }
        .rr-meta-box .char-count { float: right; color: #666; font-size: 12px; }
    </style>
    <div class="rr-meta-box">
        <div class="field-group">
            <label for="rr_meta_title">
                SEO Title
                <span class="char-count"><span id="title-count"><?php echo strlen($meta_title); ?></span> / 60 characters</span>
            </label>
            <input type="text" id="rr_meta_title" name="rr_meta_title" value="<?php echo esc_attr($meta_title); ?>" maxlength="70">
            <p class="description">The title that appears in search engine results. Aim for 50-60 characters.</p>
        </div>
        
        <div class="field-group">
            <label for="rr_meta_description">
                Meta Description
                <span class="char-count"><span id="desc-count"><?php echo strlen($meta_description); ?></span> / 160 characters</span>
            </label>
            <textarea id="rr_meta_description" name="rr_meta_description" rows="3" maxlength="170"><?php echo esc_textarea($meta_description); ?></textarea>
            <p class="description">The description that appears in search engine results. Aim for 150-160 characters.</p>
        </div>
    </div>
    <script>
        jQuery(document).ready(function($) {
            $('#rr_meta_title').on('input', function() {
                $('#title-count').text($(this).val().length);
            });
            $('#rr_meta_description').on('input', function() {
                $('#desc-count').text($(this).val().length);
            });
        });
    </script>
    <?php
}

/**
 * Save Meta Box Data
 */
function redrocket_save_seo_meta_box($post_id) {
    // Security checks
    if (!isset($_POST['redrocket_seo_meta_box_nonce'])) {
        return;
    }
    if (!wp_verify_nonce($_POST['redrocket_seo_meta_box_nonce'], 'redrocket_seo_meta_box')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Save meta title
    if (isset($_POST['rr_meta_title'])) {
        update_post_meta($post_id, '_rr_meta_title', sanitize_text_field($_POST['rr_meta_title']));
    }
    
    // Save meta description
    if (isset($_POST['rr_meta_description'])) {
        update_post_meta($post_id, '_rr_meta_description', sanitize_textarea_field($_POST['rr_meta_description']));
    }
}
add_action('save_post', 'redrocket_save_seo_meta_box');
