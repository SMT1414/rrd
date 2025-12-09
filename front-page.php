<?php
/**
 * Front Page Template
 * Red Rocket Digital Homepage
 * 
 * This template always shows the built-in homepage content.
 * To use Elementor instead, create a page with Elementor and set it as 
 * a custom template, don't use front-page.php
 */
get_header();

// Always show built-in homepage - ignore any page content
?>

<style>
/* Homepage Styles */
.rr-hero {
    background: linear-gradient(135deg, #1e1666 0%, #2d1f8a 50%, #1e1666 100%);
    min-height: 90vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
}

/* Video Background */
.rr-hero-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}

.rr-hero-video video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.rr-hero-video::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(30, 22, 102, 0.85) 0%, rgba(45, 31, 138, 0.8) 50%, rgba(30, 22, 102, 0.85) 100%);
}

/* Parallax Background Image Fallback */
.rr-hero-parallax {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 120%;
    background: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/archive/wp3502437-space-background-images-scaled-1.jpg') center center / cover no-repeat;
    transform: translateZ(0);
    will-change: transform;
}

.rr-hero-parallax::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(30, 22, 102, 0.9) 0%, rgba(45, 31, 138, 0.85) 50%, rgba(30, 22, 102, 0.9) 100%);
}

/* Animated Background Elements */
.rr-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.03)" stroke-width="0.5"/></svg>') repeat;
    background-size: 100px 100px;
    z-index: 1;
    animation: float 20s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}

.rr-hero-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 120px 20px;
    text-align: center;
    position: relative;
    z-index: 2;
    width: 100%;
}

.rr-hero h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 58px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 20px;
    line-height: 1.15;
    text-shadow: 0 2px 20px rgba(0,0,0,0.3);
}

.rr-hero h1 span {
    background: linear-gradient(to right, #ff6c26, #ffa526);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.rr-hero .rr-subtitle {
    font-size: 26px;
    color: #ff6c26;
    font-weight: 600;
    margin-bottom: 25px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.rr-hero p {
    font-size: 20px;
    color: rgba(255,255,255,0.9);
    max-width: 750px;
    margin: 0 auto 45px;
    line-height: 1.8;
}

.rr-hero-buttons {
    display: flex;
    gap: 25px;
    justify-content: center;
    flex-wrap: wrap;
}

/* Carbon Neutral Badge */
.rr-carbon-badge {
    position: absolute;
    bottom: 40px;
    right: 40px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 20px 30px;
    text-align: center;
    border: 1px solid rgba(255,255,255,0.2);
    z-index: 2;
}

.rr-carbon-badge .number {
    font-size: 36px;
    font-weight: 700;
    color: #ff6c26;
}

.rr-carbon-badge .text {
    font-size: 12px;
    color: rgba(255,255,255,0.8);
    text-transform: uppercase;
    letter-spacing: 1px;
}

.rr-btn {
    display: inline-block;
    padding: 18px 45px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 16px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.rr-btn-primary {
    background: linear-gradient(to right, #ff6c26, #ffa526);
    color: #fff;
    box-shadow: 0 10px 30px rgba(255, 108, 38, 0.3);
}

.rr-btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(255, 108, 38, 0.4);
    color: #fff;
}

.rr-btn-secondary {
    background: transparent;
    color: #fff;
    border: 2px solid rgba(255,255,255,0.3);
}

.rr-btn-secondary:hover {
    background: rgba(255,255,255,0.1);
    border-color: rgba(255,255,255,0.5);
    color: #fff;
}

/* Stats Bar */
.rr-stats {
    background: #fff;
    padding: 40px 20px;
    box-shadow: 0 10px 60px rgba(0,0,0,0.1);
    margin-top: -60px;
    position: relative;
    z-index: 10;
    max-width: 1100px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 15px;
}

.rr-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    text-align: center;
}

.rr-stat-number {
    font-family: 'Poppins', sans-serif;
    font-size: 48px;
    font-weight: 700;
    color: #ec5d49;
    line-height: 1;
}

.rr-stat-label {
    font-size: 14px;
    color: #6a7c92;
    margin-top: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Section Styles */
.rr-section {
    padding: 100px 20px;
}

.rr-section-dark {
    background: #1e1666;
    color: #fff;
}

.rr-section-gray {
    background: #f8f9fa;
}

.rr-container {
    max-width: 1200px;
    margin: 0 auto;
}

.rr-section-header {
    text-align: center;
    margin-bottom: 60px;
}

.rr-section-header h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 42px;
    font-weight: 600;
    color: #1e1666;
    margin-bottom: 20px;
}

.rr-section-dark .rr-section-header h2 {
    color: #fff;
}

.rr-section-header p {
    font-size: 18px;
    color: #6a7c92;
    max-width: 600px;
    margin: 0 auto;
}

.rr-section-dark .rr-section-header p {
    color: rgba(255,255,255,0.7);
}

/* Services Grid */
.rr-services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.rr-service-card {
    background: #fff;
    padding: 40px 30px;
    border-radius: 15px;
    box-shadow: 0 15px 50px rgba(36, 76, 109, 0.1);
    transition: all 0.3s ease;
    text-align: center;
}

.rr-service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 60px rgba(36, 76, 109, 0.15);
}

.rr-service-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #ff6c26, #ffa526);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    font-size: 32px;
    color: #fff;
}

.rr-service-card h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 22px;
    font-weight: 600;
    color: #1e1666;
    margin-bottom: 15px;
}

.rr-service-card p {
    color: #6a7c92;
    font-size: 15px;
    line-height: 1.7;
    margin-bottom: 20px;
}

.rr-service-link {
    color: #ec5d49;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.rr-service-link:hover {
    color: #ff6c26;
}

/* About Section */
.rr-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.rr-about-content h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 38px;
    font-weight: 600;
    color: #1e1666;
    margin-bottom: 25px;
    line-height: 1.3;
}

.rr-about-content p {
    color: #6a7c92;
    font-size: 17px;
    line-height: 1.8;
    margin-bottom: 20px;
}

.rr-about-features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin: 30px 0;
}

.rr-about-feature {
    display: flex;
    align-items: center;
    gap: 12px;
}

.rr-about-feature .check {
    width: 24px;
    height: 24px;
    background: linear-gradient(135deg, #ff6c26, #ffa526);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 12px;
    flex-shrink: 0;
}

.rr-about-image {
    position: relative;
}

.rr-about-image img {
    border-radius: 15px;
    box-shadow: 0 30px 60px rgba(0,0,0,0.15);
    width: 100%;
}

.rr-about-image::before {
    content: '';
    position: absolute;
    top: -20px;
    right: -20px;
    width: 200px;
    height: 200px;
    background: linear-gradient(135deg, #ff6c26, #ffa526);
    border-radius: 15px;
    z-index: -1;
    opacity: 0.2;
}

/* Process Section */
.rr-process-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
}

.rr-process-step {
    text-align: center;
    position: relative;
}

.rr-process-number {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, rgba(255,108,38,0.1), rgba(255,165,38,0.1));
    border: 3px solid #ff6c26;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    font-family: 'Poppins', sans-serif;
    font-size: 32px;
    font-weight: 700;
    color: #ff6c26;
}

.rr-process-step h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 22px;
    font-weight: 600;
    color: #1e1666;
    margin-bottom: 15px;
}

.rr-process-step p {
    color: #6a7c92;
    font-size: 15px;
    line-height: 1.7;
}

/* Testimonials */
.rr-testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
}

.rr-testimonial {
    background: #fff;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 15px 50px rgba(36, 76, 109, 0.1);
}

.rr-testimonial-text {
    font-size: 17px;
    color: #6a7c92;
    line-height: 1.8;
    font-style: italic;
    margin-bottom: 25px;
}

.rr-testimonial-author {
    display: flex;
    align-items: center;
    gap: 15px;
}

.rr-testimonial-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, #1e1666, #ec5d49);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 24px;
    font-weight: 600;
}

.rr-testimonial-name {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    color: #1e1666;
    font-size: 16px;
}

.rr-testimonial-role {
    color: #ec5d49;
    font-size: 14px;
}

/* CTA Section */
.rr-cta {
    background: linear-gradient(135deg, #ff6c26, #ffa526);
    padding: 100px 20px;
    text-align: center;
}

.rr-cta h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 42px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 20px;
}

.rr-cta p {
    font-size: 20px;
    color: rgba(255,255,255,0.9);
    max-width: 600px;
    margin: 0 auto 40px;
}

.rr-btn-white {
    background: #fff;
    color: #1e1666;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.rr-btn-white:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.25);
    color: #1e1666;
}

/* Industries Section */
.rr-industries-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 20px;
}

.rr-industry {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    padding: 30px 15px;
    border-radius: 10px;
    text-align: center;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 150px;
}

.rr-industry:hover {
    background: rgba(255,255,255,0.1);
    transform: translateY(-5px);
}

.rr-industry-icon {
    font-size: 36px;
    margin-bottom: 15px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.rr-industry h4 {
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-weight: 600;
    color: #fff;
    margin: 0;
    line-height: 1.3;
}

/* Contact Form Section */
.rr-contact-section {
    background: linear-gradient(135deg, #1e1666 0%, #2d1f8a 100%);
}

.rr-contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.rr-contact-content h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 38px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 20px;
}

.rr-contact-content p {
    color: rgba(255,255,255,0.8);
    font-size: 18px;
    line-height: 1.7;
    margin-bottom: 30px;
}

.rr-contact-info {
    margin-top: 40px;
}

.rr-contact-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 20px;
}

.rr-contact-icon {
    width: 50px;
    height: 50px;
    min-width: 50px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ff6c26;
    font-size: 20px;
    flex-shrink: 0;
}

.rr-contact-text {
    color: rgba(255,255,255,0.9);
    font-size: 16px;
    line-height: 1.6;
    padding-top: 12px;
}

.rr-contact-form {
    background: #fff;
    padding: 50px;
    border-radius: 15px;
    box-shadow: 0 30px 60px rgba(0,0,0,0.3);
}

.rr-contact-form h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 24px;
    font-weight: 600;
    color: #1e1666;
    margin-bottom: 30px;
    text-align: center;
}

.rr-form-group {
    margin-bottom: 20px;
}

.rr-form-group input,
.rr-form-group textarea,
.rr-form-group select {
    width: 100%;
    padding: 15px 20px;
    border: 2px solid #e8e8e8;
    border-radius: 8px;
    font-size: 16px;
    transition: border-color 0.3s ease;
    font-family: inherit;
}

.rr-form-group input:focus,
.rr-form-group textarea:focus,
.rr-form-group select:focus {
    outline: none;
    border-color: #ff6c26;
}

.rr-form-group textarea {
    resize: vertical;
    min-height: 120px;
}

.rr-form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.rr-submit-btn {
    width: 100%;
    padding: 18px;
    background: linear-gradient(to right, #ff6c26, #ffa526);
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.rr-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(255, 108, 38, 0.4);
}

/* Responsive */
@media (max-width: 1024px) {
    .rr-hero h1 { font-size: 44px; }
    .rr-hero .rr-subtitle { font-size: 20px; letter-spacing: 2px; }
    .rr-about-grid { grid-template-columns: 1fr; }
    .rr-contact-grid { grid-template-columns: 1fr; }
    .rr-process-grid { grid-template-columns: 1fr; gap: 50px; }
    .rr-stats-grid { grid-template-columns: repeat(2, 1fr); }
    .rr-industries-grid { grid-template-columns: repeat(3, 1fr); }
    .rr-carbon-badge { bottom: 20px; right: 20px; padding: 15px 20px; }
    .rr-carbon-badge .number { font-size: 28px; }
}

@media (max-width: 768px) {
    .rr-hero { min-height: 80vh; }
    .rr-hero h1 { font-size: 32px; }
    .rr-hero .rr-subtitle { font-size: 16px; letter-spacing: 1px; margin-bottom: 15px; }
    .rr-hero p { font-size: 16px; }
    .rr-hero-content { padding: 80px 20px; }
    .rr-section { padding: 60px 20px; }
    .rr-section-header h2 { font-size: 28px; }
    .rr-hero-buttons { flex-direction: column; align-items: center; }
    .rr-stats { margin-top: -40px; }
    .rr-stats-grid { grid-template-columns: 1fr 1fr; }
    .rr-stat-number { font-size: 36px; }
    .rr-about-features { grid-template-columns: 1fr; }
    .rr-industries-grid { grid-template-columns: repeat(2, 1fr); }
    .rr-form-row { grid-template-columns: 1fr; }
    .rr-contact-form { padding: 30px 20px; }
    .rr-testimonials-grid { grid-template-columns: 1fr; }
    .rr-carbon-badge { display: none; }
    .rr-contact-grid { grid-template-columns: 1fr; }
}
</style>

<!-- Hero Section -->
<section class="rr-hero">
    <!-- Parallax Background -->
    <div class="rr-hero-parallax"></div>
    
    <div class="rr-hero-content">
        <div class="rr-subtitle">Solutions For Your Business</div>
        <h1>Ultimate <span>Digital Marketing</span></h1>
        <p>We have a team of dedicated professionals providing cutting-edge web design, search engine marketing solutions and digital marketing strategies to businesses of all sizes across the globe. Transform your company and create innovative design experiences.</p>
        <div class="rr-hero-buttons">
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="rr-btn rr-btn-primary">Get Started Today</a>
            <a href="<?php echo esc_url(home_url('/our-portfolio/')); ?>" class="rr-btn rr-btn-secondary">View Our Work</a>
        </div>
    </div>
    
    <!-- Carbon Neutral Badge -->
    <div class="rr-carbon-badge">
        <div class="number">100%</div>
        <div class="text">Carbon Neutral</div>
    </div>
</section>

<!-- Parallax JS -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const parallax = document.querySelector('.rr-hero-parallax');
    if (parallax) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            parallax.style.transform = 'translateY(' + (scrolled * 0.4) + 'px)';
        });
    }
});
</script>

<!-- Stats Bar -->
<div class="rr-stats">
    <div class="rr-stats-grid">
        <div class="rr-stat">
            <div class="rr-stat-number">35+</div>
            <div class="rr-stat-label">Years Experience</div>
        </div>
        <div class="rr-stat">
            <div class="rr-stat-number">30+</div>
            <div class="rr-stat-label">Team Members</div>
        </div>
        <div class="rr-stat">
            <div class="rr-stat-number">1,200+</div>
            <div class="rr-stat-label">Projects Completed</div>
        </div>
        <div class="rr-stat">
            <div class="rr-stat-number">100%</div>
            <div class="rr-stat-label">Client Satisfaction</div>
        </div>
    </div>
</div>

<!-- Services Section -->
<section class="rr-section">
    <div class="rr-container">
        <div class="rr-section-header">
            <h2>Services We Offer</h2>
            <p>Red Rocket Digital offers a complete platform of digital marketing services to help your business grow.</p>
        </div>
        <div class="rr-services-grid">
            <div class="rr-service-card">
                <div class="rr-service-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Web Design & Development</h3>
                <p>Get a brand new website, or revamp an old one, to stay ahead of the curve with cutting-edge web design.</p>
                <a href="<?php echo esc_url(home_url('/web-design/')); ?>" class="rr-service-link">Find Out More →</a>
            </div>
            <div class="rr-service-card">
                <div class="rr-service-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3>Search Engine Optimisation</h3>
                <p>Ultimate visibility and exposure awaits you, with superior website optimisation and search engine marketing solutions.</p>
                <a href="<?php echo esc_url(home_url('/seo/')); ?>" class="rr-service-link">Find Out More →</a>
            </div>
            <div class="rr-service-card">
                <div class="rr-service-icon">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h3>Paid Advertising</h3>
                <p>Direct your target demographic straight to your products and services through powerful PPC ads on first-tier search engines.</p>
                <a href="<?php echo esc_url(home_url('/paid-advertising/')); ?>" class="rr-service-link">Find Out More →</a>
            </div>
            <div class="rr-service-card">
                <div class="rr-service-icon">
                    <i class="fas fa-share-alt"></i>
                </div>
                <h3>Social Media Management</h3>
                <p>Where there's a phone, there's a way. Dominate your social media pages with posts curated to your industry.</p>
                <a href="<?php echo esc_url(home_url('/social-media-marketing/')); ?>" class="rr-service-link">Find Out More →</a>
            </div>
            <div class="rr-service-card">
                <div class="rr-service-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3>Logo & Brand Design</h3>
                <p>Start pumping out blog articles, location or product pages and more, to stimulate interest in your company.</p>
                <a href="<?php echo esc_url(home_url('/design-services/')); ?>" class="rr-service-link">Find Out More →</a>
            </div>
            <div class="rr-service-card">
                <div class="rr-service-icon">
                    <i class="fas fa-star"></i>
                </div>
                <h3>Reputation Management</h3>
                <p>Reputation is important to every business. We have a range of tools to help with positive reviews and review management.</p>
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="rr-service-link">Find Out More →</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="rr-section rr-section-gray">
    <div class="rr-container">
        <div class="rr-about-grid">
            <div class="rr-about-content">
                <h2>A Digital Marketing Agency Focused On Your Success</h2>
                <p>Our digital marketing agency can assist you with all of your marketing needs. We handle everything from search engine optimisation campaigns to customised PPC campaigns and website design.</p>
                <p>Transform your company and create innovative design experiences at a local as well as global scale.</p>
                <div class="rr-about-features">
                    <div class="rr-about-feature">
                        <span class="check">✓</span>
                        <span>Expert Team</span>
                    </div>
                    <div class="rr-about-feature">
                        <span class="check">✓</span>
                        <span>Proven Results</span>
                    </div>
                    <div class="rr-about-feature">
                        <span class="check">✓</span>
                        <span>UK Based Support</span>
                    </div>
                    <div class="rr-about-feature">
                        <span class="check">✓</span>
                        <span>Transparent Pricing</span>
                    </div>
                </div>
                <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="rr-btn rr-btn-primary">Learn More About Us</a>
            </div>
            <div class="rr-about-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/redrockettransparentlogo-1.png" alt="Red Rocket Digital" style="background: #1e1666; padding: 60px; border-radius: 15px;">
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="rr-section">
    <div class="rr-container">
        <div class="rr-section-header">
            <h2>How We Work</h2>
            <p>We have a simple three-step process to get you up and running!</p>
        </div>
        <div class="rr-process-grid">
            <div class="rr-process-step">
                <div class="rr-process-number">01</div>
                <h3>Create Your Website</h3>
                <p>Answer a few simple questions and we'll build your new or redesigned website perfectly tailored to your business.</p>
            </div>
            <div class="rr-process-step">
                <div class="rr-process-number">02</div>
                <h3>Activate & Connect</h3>
                <p>Activate your new website, connect your domain name and we'll handle all the technical details for you.</p>
            </div>
            <div class="rr-process-step">
                <div class="rr-process-number">03</div>
                <h3>Get Online & Grow</h3>
                <p>Sit back and relax while your Google-optimised website works for you, bringing in new customers 24/7.</p>
            </div>
        </div>
    </div>
</section>

<!-- Industries Section -->
<section class="rr-section rr-section-dark">
    <div class="rr-container">
        <div class="rr-section-header">
            <h2>Industries We Work With</h2>
            <p>We've helped businesses across many sectors achieve their digital marketing goals.</p>
        </div>
        <div class="rr-industries-grid">
            <div class="rr-industry">
                <div class="rr-industry-icon">🏨</div>
                <h4>Hospitality</h4>
            </div>
            <div class="rr-industry">
                <div class="rr-industry-icon">🏠</div>
                <h4>Estate Agency</h4>
            </div>
            <div class="rr-industry">
                <div class="rr-industry-icon">🛒</div>
                <h4>Ecommerce</h4>
            </div>
            <div class="rr-industry">
                <div class="rr-industry-icon">⚖️</div>
                <h4>Legal</h4>
            </div>
            <div class="rr-industry">
                <div class="rr-industry-icon">🔧</div>
                <h4>Trades & Home</h4>
            </div>
            <div class="rr-industry">
                <div class="rr-industry-icon">💼</div>
                <h4>Small Business</h4>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="rr-section rr-section-gray">
    <div class="rr-container">
        <div class="rr-section-header">
            <h2>What Our Clients Say</h2>
            <p>Don't just take our word for it - hear from some of our satisfied clients.</p>
        </div>
        <div class="rr-testimonials-grid">
            <div class="rr-testimonial">
                <p class="rr-testimonial-text">"I wanted to redesign my website with different landing pages for the different services I offer. Rob and his team were creative, responsive and patient throughout. I'm delighted with the end result!"</p>
                <div class="rr-testimonial-author">
                    <div class="rr-testimonial-avatar">KF</div>
                    <div>
                        <div class="rr-testimonial-name">Katie Flamman</div>
                        <div class="rr-testimonial-role">Business Owner</div>
                    </div>
                </div>
            </div>
            <div class="rr-testimonial">
                <p class="rr-testimonial-text">"Incredible service all around. Since the new website went live we have seen a large increase of traffic and interaction. I would recommend Red Rocket Digital to anyone looking for a digital agency."</p>
                <div class="rr-testimonial-author">
                    <div class="rr-testimonial-avatar">CD</div>
                    <div>
                        <div class="rr-testimonial-name">Carol Decker</div>
                        <div class="rr-testimonial-role">T'Pau</div>
                    </div>
                </div>
            </div>
            <div class="rr-testimonial">
                <p class="rr-testimonial-text">"It's not just the work they do with paid ads, but services like SEO and content really do add up. By the end of the first month, we were dealing with more new leads than we knew what to do with!"</p>
                <div class="rr-testimonial-author">
                    <div class="rr-testimonial-avatar">MB</div>
                    <div>
                        <div class="rr-testimonial-name">Mark Bradshaw</div>
                        <div class="rr-testimonial-role">Company Director</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="rr-section rr-contact-section">
    <div class="rr-container">
        <div class="rr-contact-grid">
            <div class="rr-contact-content">
                <h2>Request Your Free Consultation</h2>
                <p>Ready to take your digital marketing to the next level? Get in touch with our team today and let's discuss how we can help your business succeed online.</p>
                <div class="rr-contact-info">
                    <div class="rr-contact-item">
                        <div class="rr-contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="rr-contact-text">
                            Epsilon House, West Road,<br>
                            Ransomes Euro Park, Ipswich IP3 9FJ
                        </div>
                    </div>
                    <div class="rr-contact-item">
                        <div class="rr-contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="rr-contact-text">
                            info@redrocket.digital
                        </div>
                    </div>
                    <div class="rr-contact-item">
                        <div class="rr-contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="rr-contact-text">
                            01473 563 990
                        </div>
                    </div>
                </div>
            </div>
            <div class="rr-contact-form">
                <h3>Get In Touch</h3>
                <form action="<?php echo esc_url(home_url('/contact-us/')); ?>" method="get">
                    <div class="rr-form-row">
                        <div class="rr-form-group">
                            <input type="text" name="first_name" placeholder="First Name *" required>
                        </div>
                        <div class="rr-form-group">
                            <input type="text" name="last_name" placeholder="Last Name *" required>
                        </div>
                    </div>
                    <div class="rr-form-row">
                        <div class="rr-form-group">
                            <input type="email" name="email" placeholder="Email Address *" required>
                        </div>
                        <div class="rr-form-group">
                            <input type="tel" name="phone" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="rr-form-group">
                        <select name="service">
                            <option value="">What service are you interested in?</option>
                            <option value="web-design">Web Design & Development</option>
                            <option value="seo">Search Engine Optimisation</option>
                            <option value="ppc">Paid Advertising</option>
                            <option value="social">Social Media Management</option>
                            <option value="branding">Logo & Brand Design</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="rr-form-group">
                        <textarea name="message" placeholder="Tell us about your project..."></textarea>
                    </div>
                    <button type="submit" class="rr-submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="rr-cta">
    <div class="rr-container">
        <h2>Ready to Grow Your Business?</h2>
        <p>Get in touch with our team today and let's discuss how we can help your business succeed online.</p>
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="rr-btn rr-btn-white">Get Your Free Consultation</a>
    </div>
</section>

<?php
get_footer();
?>
