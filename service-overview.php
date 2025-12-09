<?php
/**
 * Template Part: Services Overview Page
 * Shows all services in a grid layout
 */

$theme_uri = get_template_directory_uri();
$images_path = $theme_uri . '/assets/images/archive';
?>

<!-- Hero Section -->
<section class="service-hero services-overview-hero">
    <div class="hero-background">
        <img src="<?php echo $images_path; ?>/banner-bg.png" alt="" class="hero-bg-pattern">
    </div>
    <div class="container">
        <div class="hero-content" style="justify-content: center;">
            <div class="hero-text" style="max-width: 700px; text-align: center;">
                <h1 class="hero-title">Our Services</h1>
                <p class="hero-subtitle">Comprehensive digital marketing solutions to help your business grow online</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="services-overview section-padding">
    <div class="container">
        <div class="services-grid">
            <!-- SEO -->
            <a href="/seo" class="service-card">
                <div class="service-card-image">
                    <img src="<?php echo $images_path; ?>/seo-banner.png" alt="SEO Services">
                </div>
                <div class="service-card-content">
                    <h3>Search Engine Optimization</h3>
                    <p>Improve your rankings and drive organic traffic with our comprehensive SEO services.</p>
                    <span class="service-link">Learn More →</span>
                </div>
            </a>
            
            <!-- Web Design -->
            <a href="/web-design" class="service-card">
                <div class="service-card-image">
                    <img src="<?php echo $images_path; ?>/web-design-service-banner.png" alt="Web Design">
                </div>
                <div class="service-card-content">
                    <h3>Web Design & Development</h3>
                    <p>Beautiful, responsive websites that convert visitors into customers.</p>
                    <span class="service-link">Learn More →</span>
                </div>
            </a>
            
            <!-- Social Media -->
            <a href="/social-media-marketing" class="service-card">
                <div class="service-card-image">
                    <img src="<?php echo $images_path; ?>/social-media-marketing-network-banner.png" alt="Social Media">
                </div>
                <div class="service-card-content">
                    <h3>Social Media Marketing</h3>
                    <p>Build your brand and engage your audience across all social platforms.</p>
                    <span class="service-link">Learn More →</span>
                </div>
            </a>
            
            <!-- PPC -->
            <a href="/paid-advertising" class="service-card">
                <div class="service-card-image">
                    <img src="<?php echo $images_path; ?>/seo-traffic-banner.jpg" alt="Paid Advertising">
                </div>
                <div class="service-card-content">
                    <h3>Paid Advertising</h3>
                    <p>Targeted PPC campaigns that deliver measurable ROI.</p>
                    <span class="service-link">Learn More →</span>
                </div>
            </a>
            
            <!-- Content -->
            <a href="/content-copywriting-ipswich-suffolk" class="service-card">
                <div class="service-card-image">
                    <img src="<?php echo $images_path; ?>/about-banner.jpg" alt="Content Copywriting">
                </div>
                <div class="service-card-content">
                    <h3>Content & Copywriting</h3>
                    <p>Compelling content that engages your audience and drives action.</p>
                    <span class="service-link">Learn More →</span>
                </div>
            </a>
            
            <!-- eCommerce -->
            <a href="/ecommerce-web-design-ipswich-suffolk" class="service-card">
                <div class="service-card-image">
                    <img src="<?php echo $images_path; ?>/online-shopping-g68152c6e3_640-300x225.jpeg" alt="eCommerce">
                </div>
                <div class="service-card-content">
                    <h3>eCommerce Solutions</h3>
                    <p>Online stores that sell. From WooCommerce to Shopify.</p>
                    <span class="service-link">Learn More →</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Why Us Section -->
<section class="services-why-us section-padding bg-light">
    <div class="container">
        <div class="section-header text-center">
            <h2>Why Choose Red Rocket Digital?</h2>
            <p>We're more than just a digital marketing agency</p>
        </div>
        <div class="why-us-grid">
            <div class="why-us-item">
                <div class="why-icon">
                    <img src="<?php echo $images_path; ?>/seo-icon-new1-1.png" alt="Local Expertise">
                </div>
                <h4>Local Expertise</h4>
                <p>Based in Ipswich, Suffolk, we understand the local market and business community.</p>
            </div>
            <div class="why-us-item">
                <div class="why-icon">
                    <img src="<?php echo $images_path; ?>/seo-icon-new1-2.png" alt="Results Driven">
                </div>
                <h4>Results Driven</h4>
                <p>We focus on delivering measurable results that impact your bottom line.</p>
            </div>
            <div class="why-us-item">
                <div class="why-icon">
                    <img src="<?php echo $images_path; ?>/seo-icon-new1-3.png" alt="Transparent">
                </div>
                <h4>Transparent Reporting</h4>
                <p>Clear, honest reporting so you always know how your campaigns are performing.</p>
            </div>
            <div class="why-us-item">
                <div class="why-icon">
                    <img src="<?php echo $images_path; ?>/seo-icon-new1-4.png" alt="Dedicated Support">
                </div>
                <h4>Dedicated Support</h4>
                <p>A dedicated account manager for personalized service and support.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="service-cta section-padding bg-gradient">
    <div class="container">
        <div class="cta-content text-center">
            <h2>Ready To Grow Your Business?</h2>
            <p>Let's discuss your digital marketing needs today</p>
            <a href="/contact" class="btn btn-white btn-lg">Get A Free Consultation</a>
        </div>
    </div>
</section>

<style>
/* Services Grid */
.services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.service-card {
    display: block;
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    text-decoration: none;
    box-shadow: 0 10px 40px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
}

.service-card-image {
    height: 200px;
    overflow: hidden;
}

.service-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.service-card:hover .service-card-image img {
    transform: scale(1.1);
}

.service-card-content {
    padding: 25px;
}

.service-card-content h3 {
    font-size: 20px;
    color: var(--rr-purple);
    margin-bottom: 10px;
}

.service-card-content p {
    font-size: 14px;
    color: var(--rr-gray);
    line-height: 1.6;
    margin-bottom: 15px;
}

.service-link {
    color: var(--rr-orange);
    font-weight: 600;
    font-size: 14px;
}

/* Why Us Grid */
.why-us-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.why-us-item {
    text-align: center;
    padding: 30px 20px;
}

.why-icon {
    width: 80px;
    height: 80px;
    background: var(--rr-white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.why-icon img {
    max-width: 40px;
    height: auto;
}

.why-us-item h4 {
    font-size: 18px;
    color: var(--rr-purple);
    margin-bottom: 10px;
}

.why-us-item p {
    font-size: 14px;
    color: var(--rr-gray);
    line-height: 1.6;
}

@media (max-width: 1024px) {
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .why-us-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .services-grid,
    .why-us-grid {
        grid-template-columns: 1fr;
    }
}
</style>
