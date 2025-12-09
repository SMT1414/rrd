<?php
/**
 * Template Part: Web Design Service Page
 * Recreates the original Elementor-based Web Design page layout
 */

$theme_uri = get_template_directory_uri();
$images_path = $theme_uri . '/assets/images/archive';
?>

<!-- Hero Section -->
<section class="service-hero webdesign-hero">
    <div class="hero-background">
        <img src="<?php echo $images_path; ?>/banner-bg.png" alt="" class="hero-bg-pattern">
    </div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Web Design Services</h1>
                <p class="hero-subtitle">Professional, responsive websites that convert visitors into customers</p>
                <a href="/contact" class="btn btn-primary">Get A Quote</a>
            </div>
            <div class="hero-image">
                <img src="<?php echo $images_path; ?>/web-design-service-banner.png" alt="Web Design Services" class="hero-banner-img">
            </div>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="service-intro section-padding">
    <div class="container">
        <div class="intro-content">
            <div class="intro-text" style="max-width: 100%; text-align: center;">
                <h2>Stunning Websites That Work For Your Business</h2>
                <p>At Red Rocket Digital, we create beautiful, functional websites that represent your brand and drive real business results. Our team of designers and developers work together to deliver websites that not only look great but perform exceptionally.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="service-features section-padding bg-light">
    <div class="container">
        <div class="section-header text-center">
            <h2>Our Web Design Services</h2>
            <p>Everything you need for a successful online presence</p>
        </div>
        <div class="features-grid">
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?php echo $images_path; ?>/web-design-service-icon1.jpg" alt="Custom Design">
                </div>
                <h3>Custom Website Design</h3>
                <p>Bespoke designs tailored to your brand identity and business goals.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?php echo $images_path; ?>/web-design-service-icon2.jpg" alt="Responsive">
                </div>
                <h3>Responsive Development</h3>
                <p>Websites that look and work perfectly on all devices and screen sizes.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?php echo $images_path; ?>/web-design-service-icon3.jpg" alt="WordPress">
                </div>
                <h3>WordPress Development</h3>
                <p>Powerful, easy-to-manage WordPress sites with custom functionality.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?php echo $images_path; ?>/web-development-service-new-icon4.png" alt="Support">
                </div>
                <h3>Ongoing Support</h3>
                <p>Continued maintenance and support to keep your site running smoothly.</p>
            </div>
        </div>
    </div>
</section>

<!-- Development Features -->
<section class="service-tools section-padding bg-gradient">
    <div class="container">
        <div class="section-header text-center">
            <h2>Why Choose Red Rocket?</h2>
        </div>
        <div class="tools-grid">
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?php echo $images_path; ?>/web-development-service-new-icon1.png" alt="Strategy">
                </div>
                <h4>Strategic Planning</h4>
                <p>We start with understanding your business goals and target audience.</p>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?php echo $images_path; ?>/web-development-service-new-icon2.png" alt="Design">
                </div>
                <h4>Creative Design</h4>
                <p>Unique, eye-catching designs that set you apart from competitors.</p>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?php echo $images_path; ?>/web-development-service-new-icon3.png" alt="Development">
                </div>
                <h4>Expert Development</h4>
                <p>Clean, efficient code that ensures fast loading and reliability.</p>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?php echo $images_path; ?>/web-development-service-new-icon4.png" alt="Testing">
                </div>
                <h4>Thorough Testing</h4>
                <p>Rigorous testing across browsers and devices before launch.</p>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?php echo $images_path; ?>/web-development-service-new-icon5.png" alt="SEO">
                </div>
                <h4>SEO Ready</h4>
                <p>Built with search engine optimization best practices from the start.</p>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?php echo $images_path; ?>/web-development-service-new-icon6.png" alt="Training">
                </div>
                <h4>Training & Handover</h4>
                <p>Full training so you can manage your website with confidence.</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Preview -->
<section class="service-portfolio section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2>Our Recent Work</h2>
            <p>See some of our latest web design projects</p>
        </div>
        <div class="portfolio-grid">
            <div class="portfolio-item">
                <img src="<?php echo $images_path; ?>/lotus-styling-website-geo-1920w-768x420.jpg" alt="Lotus Styling Website">
                <div class="portfolio-overlay">
                    <h4>Lotus Styling</h4>
                    <p>Beauty & Wellness</p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="<?php echo $images_path; ?>/t-pau-website-designers-geo-1920w-768x418.png" alt="T'Pau Website">
                <div class="portfolio-overlay">
                    <h4>T'Pau</h4>
                    <p>Entertainment</p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="<?php echo $images_path; ?>/Screenshot2021-01-14at17.29.08-1920w-600x329.png" alt="Client Website">
                <div class="portfolio-overlay">
                    <h4>Business Website</h4>
                    <p>Corporate</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top: 40px;">
            <a href="/web-design-portfolio" class="btn btn-outline">View Full Portfolio</a>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="service-process section-padding bg-light">
    <div class="container">
        <div class="section-header text-center">
            <h2>Our Web Design Process</h2>
        </div>
        <div class="process-steps">
            <div class="process-step">
                <div class="step-number">01</div>
                <h3>Discovery</h3>
                <p>We learn about your business, goals, and target audience to create a strategic plan.</p>
            </div>
            <div class="process-step">
                <div class="step-number">02</div>
                <h3>Design</h3>
                <p>Our designers create mockups and wireframes for your approval before development.</p>
            </div>
            <div class="process-step">
                <div class="step-number">03</div>
                <h3>Development</h3>
                <p>We build your website using the latest technologies and best practices.</p>
            </div>
            <div class="process-step">
                <div class="step-number">04</div>
                <h3>Launch</h3>
                <p>After thorough testing, we launch your site and provide training and support.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="service-cta section-padding bg-gradient">
    <div class="container">
        <div class="cta-content text-center">
            <h2>Ready To Transform Your Online Presence?</h2>
            <p>Let's discuss your web design project today</p>
            <a href="/contact" class="btn btn-white btn-lg">Get Started</a>
        </div>
    </div>
</section>

<style>
/* Portfolio Grid */
.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.portfolio-item {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
}

.portfolio-item img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.portfolio-item:hover img {
    transform: scale(1.1);
}

.portfolio-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(30,22,102,0.9));
    padding: 30px 20px 20px;
    color: #fff;
}

.portfolio-overlay h4 {
    font-size: 18px;
    margin-bottom: 5px;
}

.portfolio-overlay p {
    font-size: 14px;
    opacity: 0.8;
}

/* Process Steps */
.process-steps {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.process-step {
    text-align: center;
    padding: 30px 20px;
}

.step-number {
    width: 60px;
    height: 60px;
    background: var(--rr-gradient);
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    font-weight: 700;
    margin: 0 auto 20px;
}

.process-step h3 {
    font-size: 20px;
    color: var(--rr-purple);
    margin-bottom: 15px;
}

.process-step p {
    font-size: 14px;
    color: var(--rr-gray);
    line-height: 1.6;
}

@media (max-width: 768px) {
    .portfolio-grid,
    .process-steps {
        grid-template-columns: 1fr;
    }
}
</style>
