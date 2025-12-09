<?php
/**
 * Template Part: SEO Service Page
 * Recreates the original Elementor-based SEO page layout
 */

$theme_uri = get_template_directory_uri();
$images_path = $theme_uri . '/assets/images/archive';
?>

<!-- Hero Section with Gradient Background -->
<section class="service-hero seo-hero">
    <div class="hero-background">
        <img src="<?php echo $images_path; ?>/banner-bg.png" alt="" class="hero-bg-pattern">
    </div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Search Engine Optimization</h1>
                <p class="hero-subtitle">SEO solves one of the major problems businesses face online</p>
                <a href="/contact" class="btn btn-primary">Get Started</a>
            </div>
            <div class="hero-image">
                <img src="<?php echo $images_path; ?>/seo-banner.png" alt="SEO Services" class="hero-banner-img">
            </div>
        </div>
    </div>
</section>

<!-- What is SEO Section -->
<section class="service-intro section-padding">
    <div class="container">
        <div class="intro-content">
            <div class="intro-image">
                <img src="<?php echo $images_path; ?>/search-engine-300x210.png" alt="Search Engine">
            </div>
            <div class="intro-text">
                <h2>Search Engine Optimisation</h2>
                <p>Most business owners understand the value of a good, strategic website. They understand the need to be online, available 24/7 and accessible to their target markets. But that's where the buck stops.</p>
                <p>Not everyone recognises the importance of having a website that shows up on Google's first page. SEO solves one of the major problems businesses face online – the difficulty of being found on Google when people search for their services.</p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section with Icons -->
<section class="service-features section-padding bg-light">
    <div class="container">
        <div class="section-header text-center">
            <h2>What We Offer</h2>
        </div>
        <div class="features-grid">
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?php echo $images_path; ?>/seo-icon-new1-1.png" alt="Dashboard">
                </div>
                <h3>Personalised Dashboard</h3>
                <p>Access your campaign data anytime with our intuitive dashboard designed for your business.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?php echo $images_path; ?>/seo-icon-new1-2.png" alt="Mobile App">
                </div>
                <h3>Mobile App</h3>
                <p>Track your SEO progress on the go with our mobile application.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?php echo $images_path; ?>/seo-icon-new1-3.png" alt="Web Audit">
                </div>
                <h3>32 Point Web Audit</h3>
                <p>Comprehensive audit covering all critical aspects of your website's SEO health.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <img src="<?php echo $images_path; ?>/seo-icon-new1-4.png" alt="Google Insights">
                </div>
                <h3>Google Insights</h3>
                <p>Deep integration with Google tools for accurate reporting and insights.</p>
            </div>
        </div>
    </div>
</section>

<!-- Growth Section -->
<section class="service-growth section-padding">
    <div class="growth-background" style="background-image: url('<?php echo $images_path; ?>/seo-curve-banner.png')"></div>
    <div class="container">
        <div class="growth-content">
            <div class="growth-text">
                <h2>Not Just An SEO Platform</h2>
                <p>We provide a complete digital marketing solution that helps your business grow online. Our platform combines powerful SEO tools with expert strategy to deliver real results.</p>
            </div>
            <div class="growth-image">
                <img src="<?php echo $images_path; ?>/seo-growth-img.png" alt="SEO Growth">
            </div>
        </div>
    </div>
</section>

<!-- SEO Tools Section -->
<section class="service-tools section-padding bg-gradient">
    <div class="container">
        <div class="section-header text-center">
            <h2>Premium Grade SEO Tools</h2>
        </div>
        <div class="tools-grid">
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?php echo $images_path; ?>/seo-service-new-icon1.png" alt="Keyword Ranking">
                </div>
                <h4>Keyword Ranking</h4>
                <p>Track your keyword positions across all major search engines.</p>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?php echo $images_path; ?>/seo-service-new-icon2.png" alt="Web Audit">
                </div>
                <h4>Web Audit</h4>
                <p>Comprehensive technical SEO audits for your website.</p>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?php echo $images_path; ?>/seo-service-new-icon3.png" alt="KPI Reporting">
                </div>
                <h4>KPI Reporting</h4>
                <p>Clear, actionable reports on your key performance indicators.</p>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?php echo $images_path; ?>/seo-service-new-icon4.png" alt="Link Acquisition">
                </div>
                <h4>Link Acquisition</h4>
                <p>Build quality backlinks to improve your domain authority.</p>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?php echo $images_path; ?>/seo-service-new-icon5.png" alt="Website Crawler">
                </div>
                <h4>SEO Website Crawler</h4>
                <p>Identify and fix technical issues affecting your rankings.</p>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?php echo $images_path; ?>/seo-service-new-icon6.png" alt="Snapshot Reports">
                </div>
                <h4>Snapshot Reports</h4>
                <p>Quick overview reports of your SEO performance.</p>
            </div>
        </div>
    </div>
</section>

<!-- Traffic Section with Background -->
<section class="service-traffic section-padding" style="background-image: url('<?php echo $images_path; ?>/seo-traffic-banner.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="traffic-content">
            <div class="traffic-image">
                <img src="<?php echo $images_path; ?>/seo-traffic-img.png" alt="SEO Traffic Growth">
            </div>
            <div class="traffic-text">
                <h2>Drive More Traffic To Your Website</h2>
                <p>Our SEO strategies are designed to increase your organic visibility and drive qualified traffic to your website.</p>
                <ul class="check-list">
                    <li>Increased organic search rankings</li>
                    <li>Higher quality website traffic</li>
                    <li>Better conversion rates</li>
                    <li>Measurable ROI</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Better Experience Section -->
<section class="service-experience section-padding">
    <div class="experience-bg" style="background-image: url('<?php echo $images_path; ?>/seo-curve-banner2.png')"></div>
    <div class="container">
        <div class="experience-content">
            <div class="experience-text">
                <h2>Better User Experience</h2>
                <p>SEO isn't just about search engines – it's about creating a better experience for your users too.</p>
                <div class="experience-features">
                    <div class="exp-feature" style="background-image: url('<?php echo $images_path; ?>/seo-user-experience-icon1-new.png')">
                        <span>Faster Loading</span>
                    </div>
                    <div class="exp-feature" style="background-image: url('<?php echo $images_path; ?>/seo-user-experience-icon2-new.png.png')">
                        <span>Mobile Friendly</span>
                    </div>
                    <div class="exp-feature" style="background-image: url('<?php echo $images_path; ?>/seo-user-experience-icon3-new.png.png')">
                        <span>Easy Navigation</span>
                    </div>
                </div>
            </div>
            <div class="experience-image">
                <img src="<?php echo $images_path; ?>/seo-better-experience-img1.png" alt="Better Experience">
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="service-pricing section-padding bg-light">
    <div class="container">
        <div class="section-header text-center">
            <h2>Our Pricing Plans</h2>
            <p>Choose the plan that best suits your business needs</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card">
                <div class="pricing-icon">
                    <img src="<?php echo $images_path; ?>/demo-10-pricing-icon2.png" alt="Basic">
                </div>
                <h3>Basic Plan</h3>
                <div class="price">
                    <span class="currency">£</span>
                    <span class="amount">299</span>
                    <span class="period">/month</span>
                </div>
                <ul class="pricing-features">
                    <li>10 Keywords Targeted</li>
                    <li>Monthly SEO Report</li>
                    <li>On-Page Optimization</li>
                    <li>Technical Audit</li>
                    <li>Google Analytics Setup</li>
                </ul>
                <a href="/contact" class="btn btn-outline">Get Started</a>
            </div>
            <div class="pricing-card featured">
                <div class="pricing-badge">Popular</div>
                <div class="pricing-icon">
                    <img src="<?php echo $images_path; ?>/demo-10-pricing-icon2.png" alt="Standard">
                </div>
                <h3>Standard Plan</h3>
                <div class="price">
                    <span class="currency">£</span>
                    <span class="amount">599</span>
                    <span class="period">/month</span>
                </div>
                <ul class="pricing-features">
                    <li>25 Keywords Targeted</li>
                    <li>Bi-Weekly Reporting</li>
                    <li>On-Page + Off-Page SEO</li>
                    <li>Link Building Campaign</li>
                    <li>Content Strategy</li>
                    <li>Competitor Analysis</li>
                </ul>
                <a href="/contact" class="btn btn-primary">Get Started</a>
            </div>
            <div class="pricing-card">
                <div class="pricing-icon">
                    <img src="<?php echo $images_path; ?>/trophy.png" alt="Enhanced">
                </div>
                <h3>Enhanced Plan</h3>
                <div class="price">
                    <span class="currency">£</span>
                    <span class="amount">999</span>
                    <span class="period">/month</span>
                </div>
                <ul class="pricing-features">
                    <li>50+ Keywords Targeted</li>
                    <li>Weekly Reporting</li>
                    <li>Full SEO Suite</li>
                    <li>Premium Link Building</li>
                    <li>Content Creation</li>
                    <li>Dedicated Account Manager</li>
                    <li>Priority Support</li>
                </ul>
                <a href="/contact" class="btn btn-outline">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="service-cta section-padding bg-gradient">
    <div class="container">
        <div class="cta-content text-center">
            <h2>Are You Ready For Lift-Off?</h2>
            <p>Let's discuss how our SEO services can help grow your business</p>
            <a href="/contact" class="btn btn-white btn-lg">Contact Us Today</a>
        </div>
    </div>
</section>
