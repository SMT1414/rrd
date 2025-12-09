<?php
/**
 * Template Part: Case Studies Page
 * Displays case studies with results and testimonials
 */
?>

<style>
/* Case Studies Page Styles */
.casestudies-hero {
    background: linear-gradient(135deg, #1e1666 0%, #1e3497 100%);
    padding: 80px 20px;
    text-align: center;
    position: relative;
}

.casestudies-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('<?php echo get_template_directory_uri(); ?>/assets/images/archive/banner-bg.png') center/cover;
    opacity: 0.1;
}

.casestudies-hero-content {
    position: relative;
    z-index: 1;
    max-width: 800px;
    margin: 0 auto;
}

.casestudies-hero h1 {
    color: #fff;
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 20px;
}

.casestudies-hero p {
    color: rgba(255,255,255,0.85);
    font-size: 20px;
    line-height: 1.7;
}

.casestudies-section {
    padding: 80px 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.casestudies-intro {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 60px;
}

.casestudies-intro h2 {
    color: #1e1666;
    font-size: 36px;
    margin-bottom: 20px;
}

.casestudies-intro p {
    color: #666;
    font-size: 18px;
    line-height: 1.7;
}

/* Case Study Cards */
.case-study-card {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
    margin-bottom: 80px;
    padding-bottom: 80px;
    border-bottom: 1px solid #eee;
}

.case-study-card:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.case-study-card:nth-child(even) {
    direction: rtl;
}

.case-study-card:nth-child(even) > * {
    direction: ltr;
}

.case-study-image {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.15);
}

.case-study-image img {
    width: 100%;
    height: auto;
    display: block;
}

.case-study-content h3 {
    color: #1e1666;
    font-size: 28px;
    margin-bottom: 15px;
}

.case-study-industry {
    display: inline-block;
    background: rgba(255,108,38,0.1);
    color: #ff6c26;
    font-size: 14px;
    font-weight: 600;
    padding: 6px 16px;
    border-radius: 20px;
    margin-bottom: 20px;
}

.case-study-content p {
    color: #666;
    font-size: 16px;
    line-height: 1.7;
    margin-bottom: 25px;
}

.case-study-results {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-bottom: 25px;
}

.result-item {
    text-align: center;
    padding: 20px 15px;
    background: #f8f9fa;
    border-radius: 10px;
}

.result-item .number {
    display: block;
    font-size: 32px;
    font-weight: 700;
    color: #ff6c26;
    margin-bottom: 5px;
}

.result-item .label {
    font-size: 13px;
    color: #666;
}

.case-study-services {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.service-tag {
    background: rgba(30,22,102,0.1);
    color: #1e1666;
    font-size: 13px;
    padding: 8px 16px;
    border-radius: 20px;
}

/* Testimonial Section */
.testimonial-section {
    background: #f8f9fa;
    padding: 80px 20px;
}

.testimonial-container {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
}

.testimonial-section h2 {
    color: #1e1666;
    font-size: 36px;
    margin-bottom: 50px;
}

.testimonial-card {
    background: #fff;
    padding: 50px;
    border-radius: 12px;
    box-shadow: 0 5px 30px rgba(0,0,0,0.1);
    position: relative;
}

.testimonial-card::before {
    content: '"';
    position: absolute;
    top: 20px;
    left: 30px;
    font-size: 80px;
    color: rgba(30,22,102,0.1);
    font-family: Georgia, serif;
    line-height: 1;
}

.testimonial-text {
    font-size: 20px;
    color: #444;
    line-height: 1.8;
    font-style: italic;
    margin-bottom: 30px;
}

.testimonial-author {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
}

.testimonial-author img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
}

.author-info h4 {
    color: #1e1666;
    font-size: 18px;
    margin-bottom: 5px;
}

.author-info p {
    color: #666;
    font-size: 14px;
}

/* CTA Section */
.casestudies-cta {
    background: linear-gradient(135deg, #1e1666 0%, #1e3497 100%);
    padding: 80px 20px;
    text-align: center;
}

.casestudies-cta h2 {
    color: #fff;
    font-size: 36px;
    margin-bottom: 20px;
}

.casestudies-cta p {
    color: rgba(255,255,255,0.85);
    font-size: 18px;
    max-width: 600px;
    margin: 0 auto 30px;
}

.casestudies-cta .btn {
    display: inline-block;
    background: #ff6c26;
    color: #fff;
    padding: 16px 40px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.casestudies-cta .btn:hover {
    background: #e55a1b;
    transform: translateY(-3px);
}

@media (max-width: 968px) {
    .case-study-card {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    .case-study-card:nth-child(even) {
        direction: ltr;
    }
    .case-study-results {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .casestudies-hero h1 {
        font-size: 36px;
    }
    .case-study-content h3 {
        font-size: 24px;
    }
    .case-study-results {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    .testimonial-card {
        padding: 30px;
    }
    .testimonial-text {
        font-size: 17px;
    }
}
</style>

<!-- Hero Section -->
<section class="casestudies-hero">
    <div class="casestudies-hero-content">
        <h1>Case Studies</h1>
        <p>Real results from real clients. See how we've helped businesses across Ipswich, Suffolk and beyond achieve their digital marketing goals.</p>
    </div>
</section>

<!-- Case Studies -->
<section class="casestudies-section">
    <div class="casestudies-intro">
        <h2>Success Stories</h2>
        <p>Every business is unique, and so is every solution we create. Here's how we've delivered measurable results for our clients.</p>
    </div>
    
    <!-- Case Study 1: T'Pau -->
    <div class="case-study-card">
        <div class="case-study-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/archive/t-pau-website-designers-geo-1920w-768x418.png" alt="T'Pau Website Case Study">
        </div>
        <div class="case-study-content">
            <span class="case-study-industry">Entertainment / Music</span>
            <h3>T'Pau Official Website</h3>
            <p>The iconic 80s band T'Pau needed a modern website to engage with fans, promote upcoming tours, and sell merchandise. We created a stunning, mobile-responsive website that captured the band's energy while providing a seamless user experience.</p>
            <div class="case-study-results">
                <div class="result-item">
                    <span class="number">250%</span>
                    <span class="label">Increase in Traffic</span>
                </div>
                <div class="result-item">
                    <span class="number">180%</span>
                    <span class="label">More Merch Sales</span>
                </div>
                <div class="result-item">
                    <span class="number">45%</span>
                    <span class="label">Fan Engagement Up</span>
                </div>
            </div>
            <div class="case-study-services">
                <span class="service-tag">Web Design</span>
                <span class="service-tag">eCommerce</span>
                <span class="service-tag">SEO</span>
            </div>
        </div>
    </div>
    
    <!-- Case Study 2: Lotus Styling -->
    <div class="case-study-card">
        <div class="case-study-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/archive/lotus-styling-website-geo-1920w-768x420.jpg" alt="Lotus Styling Website Case Study">
        </div>
        <div class="case-study-content">
            <span class="case-study-industry">Fashion / Retail</span>
            <h3>Lotus Styling</h3>
            <p>A premium fashion consultancy needed a website that reflected their high-end brand positioning. We delivered an elegant, visually striking design that showcases their services and converts visitors into consultation bookings.</p>
            <div class="case-study-results">
                <div class="result-item">
                    <span class="number">320%</span>
                    <span class="label">More Enquiries</span>
                </div>
                <div class="result-item">
                    <span class="number">85%</span>
                    <span class="label">Bounce Rate Down</span>
                </div>
                <div class="result-item">
                    <span class="number">4.2s</span>
                    <span class="label">Avg. Session Time</span>
                </div>
            </div>
            <div class="case-study-services">
                <span class="service-tag">Web Design</span>
                <span class="service-tag">Branding</span>
                <span class="service-tag">Content</span>
            </div>
        </div>
    </div>
    
    <!-- Case Study 3: Local Restaurant -->
    <div class="case-study-card">
        <div class="case-study-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/archive/burger-screenshot-1920w.jpg" alt="Restaurant Website Case Study">
        </div>
        <div class="case-study-content">
            <span class="case-study-industry">Hospitality / Restaurant</span>
            <h3>Local Restaurant Chain</h3>
            <p>This popular restaurant needed a website refresh with online ordering capabilities. We created an appetizing design with seamless integration to their POS system, resulting in a significant increase in online orders.</p>
            <div class="case-study-results">
                <div class="result-item">
                    <span class="number">£15k</span>
                    <span class="label">Monthly Online Orders</span>
                </div>
                <div class="result-item">
                    <span class="number">200%</span>
                    <span class="label">Online Bookings Up</span>
                </div>
                <div class="result-item">
                    <span class="number">#1</span>
                    <span class="label">Google Local Ranking</span>
                </div>
            </div>
            <div class="case-study-services">
                <span class="service-tag">Web Design</span>
                <span class="service-tag">Local SEO</span>
                <span class="service-tag">Google My Business</span>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="testimonial-container">
        <h2>What Our Clients Say</h2>
        <div class="testimonial-card">
            <p class="testimonial-text">Incredible service all around. Red Rocket designed our new website for the group T'Pau. Since the new website went live we have seen a large increase of traffic and interaction with our fans. Rob and his team understood the brief from the get go and I would recommend Red Rocket Digital to anyone looking for a digital agency.</p>
            <div class="testimonial-author">
                <div class="author-info">
                    <h4>Carol Decker</h4>
                    <p>Lead Singer, T'Pau</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="casestudies-cta">
    <h2>Ready to Be Our Next Success Story?</h2>
    <p>Let's discuss how we can help transform your digital presence and achieve real, measurable results.</p>
    <a href="<?php echo home_url('/contact-us/'); ?>" class="btn">Start Your Project</a>
</section>
