<?php
/**
 * Template Part: Portfolio/Our Work Page
 * Displays portfolio grid with project showcases
 */
?>

<style>
/* Portfolio Page Styles */
.portfolio-hero {
    background: linear-gradient(135deg, #1e1666 0%, #1e3497 100%);
    padding: 80px 20px;
    text-align: center;
    position: relative;
}

.portfolio-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('<?php echo get_template_directory_uri(); ?>/assets/images/archive/banner-bg.png') center/cover;
    opacity: 0.1;
}

.portfolio-hero-content {
    position: relative;
    z-index: 1;
    max-width: 800px;
    margin: 0 auto;
}

.portfolio-hero h1 {
    color: #fff;
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 20px;
}

.portfolio-hero p {
    color: rgba(255,255,255,0.85);
    font-size: 20px;
    line-height: 1.7;
}

.portfolio-section {
    padding: 80px 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.portfolio-intro {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 60px;
}

.portfolio-intro h2 {
    color: #1e1666;
    font-size: 36px;
    margin-bottom: 20px;
}

.portfolio-intro p {
    color: #666;
    font-size: 18px;
    line-height: 1.7;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.portfolio-item {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.portfolio-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.portfolio-image {
    position: relative;
    overflow: hidden;
    aspect-ratio: 16/10;
}

.portfolio-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.portfolio-item:hover .portfolio-image img {
    transform: scale(1.1);
}

.portfolio-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(30,22,102,0.9), rgba(30,52,151,0.9));
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.portfolio-item:hover .portfolio-overlay {
    opacity: 1;
}

.portfolio-overlay span {
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    padding: 12px 30px;
    border: 2px solid #fff;
    border-radius: 50px;
}

.portfolio-content {
    padding: 25px;
}

.portfolio-content h3 {
    color: #1e1666;
    font-size: 20px;
    margin-bottom: 10px;
}

.portfolio-content p {
    color: #666;
    font-size: 15px;
    line-height: 1.6;
    margin-bottom: 15px;
}

.portfolio-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.portfolio-tag {
    background: rgba(30,22,102,0.1);
    color: #1e1666;
    font-size: 12px;
    padding: 5px 12px;
    border-radius: 20px;
}

/* Stats Section */
.portfolio-stats {
    background: #f8f9fa;
    padding: 60px 20px;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    max-width: 1000px;
    margin: 0 auto;
    text-align: center;
}

.stat-item h3 {
    font-size: 48px;
    font-weight: 700;
    color: #ff6c26;
    margin-bottom: 10px;
}

.stat-item p {
    color: #666;
    font-size: 16px;
}

/* CTA Section */
.portfolio-cta {
    background: linear-gradient(135deg, #1e1666 0%, #1e3497 100%);
    padding: 80px 20px;
    text-align: center;
}

.portfolio-cta h2 {
    color: #fff;
    font-size: 36px;
    margin-bottom: 20px;
}

.portfolio-cta p {
    color: rgba(255,255,255,0.85);
    font-size: 18px;
    max-width: 600px;
    margin: 0 auto 30px;
}

.portfolio-cta .btn {
    display: inline-block;
    background: #ff6c26;
    color: #fff;
    padding: 16px 40px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.portfolio-cta .btn:hover {
    background: #e55a1b;
    transform: translateY(-3px);
}

@media (max-width: 1024px) {
    .portfolio-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .portfolio-hero h1 {
        font-size: 36px;
    }
    .portfolio-grid {
        grid-template-columns: 1fr;
    }
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
    .stat-item h3 {
        font-size: 36px;
    }
}
</style>

<!-- Hero Section -->
<section class="portfolio-hero">
    <div class="portfolio-hero-content">
        <h1>Our Work</h1>
        <p>Take a look at some of the websites and digital marketing campaigns we've created for our clients across Ipswich, Suffolk and beyond.</p>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="portfolio-section">
    <div class="portfolio-intro">
        <h2>Featured Projects</h2>
        <p>Every project is unique, and we approach each one with fresh eyes and creative solutions. Here's a selection of our recent work.</p>
    </div>
    
    <div class="portfolio-grid">
        <!-- Project 1: Lotus Styling -->
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/archive/lotus-styling-website-geo-1920w-768x420.jpg" alt="Lotus Styling Website">
                <div class="portfolio-overlay">
                    <span>View Project</span>
                </div>
            </div>
            <div class="portfolio-content">
                <h3>Lotus Styling</h3>
                <p>A beautiful, modern website design for a premium styling and fashion consultancy business.</p>
                <div class="portfolio-tags">
                    <span class="portfolio-tag">Web Design</span>
                    <span class="portfolio-tag">Branding</span>
                </div>
            </div>
        </div>
        
        <!-- Project 2: T'Pau -->
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/archive/t-pau-website-designers-geo-1920w-768x418.png" alt="T'Pau Website">
                <div class="portfolio-overlay">
                    <span>View Project</span>
                </div>
            </div>
            <div class="portfolio-content">
                <h3>T'Pau Official</h3>
                <p>Official website for the iconic 80s band T'Pau, featuring tour dates, merchandise and fan engagement.</p>
                <div class="portfolio-tags">
                    <span class="portfolio-tag">Web Design</span>
                    <span class="portfolio-tag">Music</span>
                </div>
            </div>
        </div>
        
        <!-- Project 3: Wander -->
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/archive/wander-screenshot-7c0e486b-1920w.jpg" alt="Wander Website">
                <div class="portfolio-overlay">
                    <span>View Project</span>
                </div>
            </div>
            <div class="portfolio-content">
                <h3>Wander Travel</h3>
                <p>An engaging travel website designed to inspire adventure and simplify trip planning.</p>
                <div class="portfolio-tags">
                    <span class="portfolio-tag">Web Design</span>
                    <span class="portfolio-tag">Travel</span>
                </div>
            </div>
        </div>
        
        <!-- Project 4: Burger Restaurant -->
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/archive/burger-screenshot-1920w.jpg" alt="Restaurant Website">
                <div class="portfolio-overlay">
                    <span>View Project</span>
                </div>
            </div>
            <div class="portfolio-content">
                <h3>Gourmet Burger Co</h3>
                <p>Mouth-watering website design for a premium burger restaurant, featuring online ordering.</p>
                <div class="portfolio-tags">
                    <span class="portfolio-tag">Web Design</span>
                    <span class="portfolio-tag">Restaurant</span>
                </div>
            </div>
        </div>
        
        <!-- Project 5: Malthouse Theatre -->
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/archive/screencapture-malthousetheatre-co-uk-2021-09-18-13_16_11-1920w-688x1024.png" alt="Malthouse Theatre" style="object-position: top;">
                <div class="portfolio-overlay">
                    <span>View Project</span>
                </div>
            </div>
            <div class="portfolio-content">
                <h3>Malthouse Theatre</h3>
                <p>A vibrant website for a local theatre, showcasing upcoming shows and enabling online ticket sales.</p>
                <div class="portfolio-tags">
                    <span class="portfolio-tag">Web Design</span>
                    <span class="portfolio-tag">Entertainment</span>
                </div>
            </div>
        </div>
        
        <!-- Project 6: Jack Charles -->
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/archive/screencapture-jackcharles-co-uk-2021-09-18-13_10_55-1920w-534x1024.png" alt="Jack Charles Website" style="object-position: top;">
                <div class="portfolio-overlay">
                    <span>View Project</span>
                </div>
            </div>
            <div class="portfolio-content">
                <h3>Jack Charles</h3>
                <p>Professional business website with strong branding and lead generation focus.</p>
                <div class="portfolio-tags">
                    <span class="portfolio-tag">Web Design</span>
                    <span class="portfolio-tag">Business</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="portfolio-stats">
    <div class="stats-grid">
        <div class="stat-item">
            <h3>100+</h3>
            <p>Projects Completed</p>
        </div>
        <div class="stat-item">
            <h3>35+</h3>
            <p>Years Combined Experience</p>
        </div>
        <div class="stat-item">
            <h3>98%</h3>
            <p>Client Satisfaction</p>
        </div>
        <div class="stat-item">
            <h3>50+</h3>
            <p>Happy Clients</p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="portfolio-cta">
    <h2>Ready to Start Your Project?</h2>
    <p>Let's discuss how we can help bring your digital vision to life.</p>
    <a href="<?php echo home_url('/contact-us/'); ?>" class="btn">Get in Touch</a>
</section>
