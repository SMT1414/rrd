<?php
/**
 * About Us Page Template
 */
?>

<style>
/* About Page Styles */
.rr-about-hero {
    background: linear-gradient(135deg, #1e1666 0%, #2d1f8a 100%);
    padding: 100px 20px 80px;
    text-align: center;
    color: #fff;
}

.rr-about-hero h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 48px;
    font-weight: 700;
    margin: 0 0 20px;
}

.rr-about-hero p {
    font-size: 20px;
    max-width: 700px;
    margin: 0 auto;
    opacity: 0.9;
}

.rr-about-section {
    padding: 80px 20px;
}

.rr-about-container {
    max-width: 1200px;
    margin: 0 auto;
}

.rr-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.rr-about-content h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 36px;
    font-weight: 700;
    color: #1e1666;
    margin: 0 0 25px;
    line-height: 1.2;
}

.rr-about-content p {
    color: #6a7c92;
    font-size: 16px;
    line-height: 1.8;
    margin-bottom: 20px;
}

.rr-about-image img {
    width: 100%;
    border-radius: 15px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
}

/* Why Choose Us */
.rr-why-section {
    background: #f8f9fa;
}

.rr-why-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 50px;
}

.rr-why-card {
    background: #fff;
    padding: 40px 30px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 10px 40px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}

.rr-why-card:hover {
    transform: translateY(-10px);
}

.rr-why-icon {
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

.rr-why-card h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    font-weight: 600;
    color: #1e1666;
    margin: 0 0 15px;
}

.rr-why-card p {
    color: #6a7c92;
    font-size: 15px;
    line-height: 1.7;
    margin: 0;
}

/* Team Section */
.rr-team-section {
    text-align: center;
}

.rr-section-header {
    margin-bottom: 50px;
}

.rr-section-header h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 36px;
    font-weight: 700;
    color: #1e1666;
    margin: 0 0 15px;
}

.rr-section-header p {
    color: #6a7c92;
    font-size: 18px;
    max-width: 600px;
    margin: 0 auto;
}

.rr-team-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.rr-team-member {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}

.rr-team-member:hover {
    transform: translateY(-10px);
}

.rr-team-photo {
    height: 250px;
    background: linear-gradient(135deg, #1e1666, #2d1f8a);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 64px;
    color: rgba(255,255,255,0.3);
}

.rr-team-info {
    padding: 25px 20px;
}

.rr-team-info h4 {
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    font-weight: 600;
    color: #1e1666;
    margin: 0 0 5px;
}

.rr-team-info p {
    color: #ff6c26;
    font-size: 14px;
    margin: 0;
}

/* Values Section */
.rr-values-section {
    background: linear-gradient(135deg, #1e1666 0%, #2d1f8a 100%);
    color: #fff;
}

.rr-values-section .rr-section-header h2 {
    color: #fff;
}

.rr-values-section .rr-section-header p {
    color: rgba(255,255,255,0.8);
}

.rr-values-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.rr-value-card {
    text-align: center;
    padding: 30px 20px;
}

.rr-value-icon {
    font-size: 48px;
    margin-bottom: 20px;
}

.rr-value-card h4 {
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    font-weight: 600;
    margin: 0 0 10px;
}

.rr-value-card p {
    font-size: 14px;
    opacity: 0.8;
    margin: 0;
    line-height: 1.6;
}

/* CTA Section */
.rr-cta-section {
    background: #ff6c26;
    padding: 80px 20px;
    text-align: center;
    color: #fff;
}

.rr-cta-section h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 36px;
    font-weight: 700;
    margin: 0 0 20px;
}

.rr-cta-section p {
    font-size: 18px;
    margin: 0 0 30px;
    opacity: 0.9;
}

.rr-cta-btn {
    display: inline-block;
    background: #fff;
    color: #ff6c26;
    padding: 15px 40px;
    border-radius: 5px;
    font-weight: 600;
    font-size: 16px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.rr-cta-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

/* Responsive */
@media (max-width: 1024px) {
    .rr-team-grid { grid-template-columns: repeat(2, 1fr); }
    .rr-values-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 768px) {
    .rr-about-hero h1 { font-size: 36px; }
    .rr-about-grid { grid-template-columns: 1fr; }
    .rr-why-grid { grid-template-columns: 1fr; }
    .rr-team-grid { grid-template-columns: 1fr; }
    .rr-values-grid { grid-template-columns: 1fr; }
    .rr-about-section { padding: 60px 20px; }
}
</style>

<!-- Hero Section -->
<section class="rr-about-hero">
    <h1>About Red Rocket Digital</h1>
    <p>A marketing agency with a difference. Based in Ipswich, Suffolk, delivering results-driven digital solutions since 2015.</p>
</section>

<!-- Our Story -->
<section class="rr-about-section">
    <div class="rr-about-container">
        <div class="rr-about-grid">
            <div class="rr-about-content">
                <h2>Our Story</h2>
                <p>Red Rocket Digital was founded with a simple mission: to help businesses of all sizes achieve their full potential online. What started as a small team of passionate digital marketers has grown into a full-service agency serving clients across the UK and beyond.</p>
                <p>We believe that every business deserves access to expert digital marketing services, regardless of their size or budget. That's why we've built our agency on the principles of transparency, results, and genuine partnership with our clients.</p>
                <p>Today, we're proud to have helped hundreds of businesses transform their online presence, increase their visibility, and achieve sustainable growth through strategic digital marketing.</p>
            </div>
            <div class="rr-about-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/archive/manon-mac.jpg" alt="Red Rocket Digital Team">
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="rr-about-section rr-why-section">
    <div class="rr-about-container">
        <div class="rr-section-header" style="text-align: center;">
            <h2>Why Choose Red Rocket?</h2>
            <p>What sets us apart from other digital marketing agencies</p>
        </div>
        <div class="rr-why-grid">
            <div class="rr-why-card">
                <div class="rr-why-icon">🎯</div>
                <h3>Results-Driven</h3>
                <p>We focus on delivering measurable results that impact your bottom line. Every strategy is designed with your ROI in mind.</p>
            </div>
            <div class="rr-why-card">
                <div class="rr-why-icon">🤝</div>
                <h3>True Partnership</h3>
                <p>We work as an extension of your team, taking the time to understand your business and goals to deliver tailored solutions.</p>
            </div>
            <div class="rr-why-card">
                <div class="rr-why-icon">💡</div>
                <h3>Innovative Approach</h3>
                <p>We stay ahead of industry trends and use cutting-edge techniques to give your business a competitive advantage.</p>
            </div>
            <div class="rr-why-card">
                <div class="rr-why-icon">📊</div>
                <h3>Transparent Reporting</h3>
                <p>Full visibility into your campaigns with detailed monthly reports and regular strategy calls to keep you informed.</p>
            </div>
            <div class="rr-why-card">
                <div class="rr-why-icon">🏆</div>
                <h3>Proven Track Record</h3>
                <p>Over 1,200 successful projects and a 100% client satisfaction rate speaks to our commitment to excellence.</p>
            </div>
            <div class="rr-why-card">
                <div class="rr-why-icon">🌱</div>
                <h3>Carbon Neutral</h3>
                <p>We're committed to sustainability. Red Rocket Digital is a certified carbon neutral business.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="rr-about-section rr-values-section">
    <div class="rr-about-container">
        <div class="rr-section-header" style="text-align: center;">
            <h2>Our Core Values</h2>
            <p>The principles that guide everything we do</p>
        </div>
        <div class="rr-values-grid">
            <div class="rr-value-card">
                <div class="rr-value-icon">✨</div>
                <h4>Excellence</h4>
                <p>We strive for excellence in every project, no matter how big or small.</p>
            </div>
            <div class="rr-value-card">
                <div class="rr-value-icon">🔒</div>
                <h4>Integrity</h4>
                <p>Honesty and transparency are at the heart of all our client relationships.</p>
            </div>
            <div class="rr-value-card">
                <div class="rr-value-icon">🚀</div>
                <h4>Innovation</h4>
                <p>We embrace new technologies and approaches to deliver cutting-edge solutions.</p>
            </div>
            <div class="rr-value-card">
                <div class="rr-value-icon">❤️</div>
                <h4>Passion</h4>
                <p>We genuinely love what we do and it shows in the quality of our work.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="rr-cta-section">
    <h2>Ready to Work With Us?</h2>
    <p>Let's discuss how we can help grow your business online.</p>
    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="rr-cta-btn">Get Your Free Consultation</a>
</section>
