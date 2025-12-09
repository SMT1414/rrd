<?php
/**
 * Template Part: Default Service Page
 * Generic service page template using page content
 */

$theme_uri = get_template_directory_uri();
$images_path = $theme_uri . '/assets/images/archive';

// Get page data
$page_title = get_the_title();
$page_content = get_the_content();
$featured_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
?>

<!-- Hero Section -->
<section class="service-hero default-hero">
    <div class="hero-background">
        <img src="<?php echo $images_path; ?>/banner-bg.png" alt="" class="hero-bg-pattern">
    </div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title"><?php echo esc_html($page_title); ?></h1>
                <?php if (has_excerpt()) : ?>
                    <p class="hero-subtitle"><?php echo get_the_excerpt(); ?></p>
                <?php endif; ?>
                <a href="/contact" class="btn btn-primary">Get Started</a>
            </div>
            <?php if ($featured_image) : ?>
            <div class="hero-image">
                <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($page_title); ?>" class="hero-banner-img">
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="service-content section-padding">
    <div class="container">
        <div class="content-wrapper">
            <?php 
            // Output the page content with formatting
            the_content(); 
            ?>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="service-features section-padding bg-light">
    <div class="container">
        <div class="section-header text-center">
            <h2>Why Choose Red Rocket Digital?</h2>
        </div>
        <div class="features-grid" style="grid-template-columns: repeat(3, 1fr);">
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?php echo $images_path; ?>/seo-icon-new1-1.png" alt="Experience">
                </div>
                <h3>Experienced Team</h3>
                <p>Our team of experts brings years of experience to every project.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?php echo $images_path; ?>/seo-icon-new1-2.png" alt="Results">
                </div>
                <h3>Proven Results</h3>
                <p>We deliver measurable results that impact your bottom line.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?php echo $images_path; ?>/seo-icon-new1-3.png" alt="Support">
                </div>
                <h3>Dedicated Support</h3>
                <p>We're here to support you every step of the way.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="service-cta section-padding bg-gradient">
    <div class="container">
        <div class="cta-content text-center">
            <h2>Ready To Get Started?</h2>
            <p>Let's discuss how we can help grow your business</p>
            <a href="/contact" class="btn btn-white btn-lg">Contact Us Today</a>
        </div>
    </div>
</section>

<style>
/* Default Service Content Styling */
.service-content .content-wrapper {
    max-width: 800px;
    margin: 0 auto;
}

.service-content .content-wrapper h2,
.service-content .content-wrapper h3,
.service-content .content-wrapper h4 {
    color: var(--rr-purple);
    margin-top: 30px;
    margin-bottom: 15px;
}

.service-content .content-wrapper h2 {
    font-size: 32px;
}

.service-content .content-wrapper h3 {
    font-size: 24px;
}

.service-content .content-wrapper p {
    font-size: 16px;
    line-height: 1.8;
    color: var(--rr-gray);
    margin-bottom: 20px;
}

.service-content .content-wrapper ul,
.service-content .content-wrapper ol {
    margin-bottom: 20px;
    padding-left: 30px;
}

.service-content .content-wrapper li {
    margin-bottom: 10px;
    line-height: 1.6;
    color: var(--rr-gray);
}

.service-content .content-wrapper img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    margin: 20px 0;
}
</style>
