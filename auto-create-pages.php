<?php
/**
 * Red Rocket Digital - Auto Page Creator
 * Creates all service pages with archived content on theme activation
 */

if (!defined('ABSPATH')) exit;

/**
 * Get all page content from WebArchix archive
 */
function redrocket_get_archived_pages() {
    return array(
        
        // ============================================
        // WEB DESIGN PAGE
        // ============================================
        array(
            'slug' => 'web-design',
            'title' => 'Web Design',
            'meta_title' => 'Website Design Ipswich – Web Design Agency Ipswich Suffolk | Red Rocket',
            'meta_description' => 'Professional web design services in Ipswich, Suffolk. Red Rocket creates stunning, mobile-friendly websites that deliver leads and grow your business.',
            'content' => '<div class="rr-page-content">
<h1>Professional Web Design Services</h1>

<p class="lead">If your business counts on a steady stream of leads, consultations or bookings, your web presence can (and should) deliver them. Consistently and predictably.</p>

<p>Let Red Rocket create the winning strategy, and design the perfect elevated web presence to back it up. No more under-performing website and no more feeling overwhelmed by the digital marketing process.</p>

<h2>Why Choose Red Rocket for Web Design?</h2>

<div class="rr-features-grid">
<div class="rr-feature">
<h3>Mobile-First Design</h3>
<p>Every website we build is fully responsive and optimized for mobile devices, ensuring your customers have a great experience on any device.</p>
</div>

<div class="rr-feature">
<h3>SEO-Optimized</h3>
<p>Our websites are built with search engine optimization in mind from the ground up, helping you rank higher on Google.</p>
</div>

<div class="rr-feature">
<h3>Fast Loading</h3>
<p>We optimize every element for speed, because we know that fast-loading websites convert better and rank higher.</p>
</div>

<div class="rr-feature">
<h3>Conversion Focused</h3>
<p>Our designs are strategically crafted to turn visitors into customers, with clear calls-to-action and user-friendly navigation.</p>
</div>
</div>

<h2>Our Web Design Process</h2>

<ol>
<li><strong>Discovery</strong> - We learn about your business, goals, and target audience</li>
<li><strong>Strategy</strong> - We create a custom plan to achieve your objectives</li>
<li><strong>Design</strong> - We craft a beautiful, functional design tailored to your brand</li>
<li><strong>Development</strong> - We build your website using the latest technologies</li>
<li><strong>Launch</strong> - We test thoroughly and launch your new site</li>
<li><strong>Support</strong> - We provide ongoing maintenance and support</li>
</ol>

</div>',
        ),

        // ============================================
        // ECOMMERCE WEB DESIGN PAGE
        // ============================================
        array(
            'slug' => 'ecommerce-web-design-ipswich-suffolk',
            'title' => 'eCommerce Web Design',
            'meta_title' => 'ECommerce Website Design - eCommerce Web Design Agency Ipswich Suffolk',
            'meta_description' => 'Expert eCommerce website design in Ipswich. Red Rocket builds online stores that convert visitors into customers with professional design and multi-channel selling.',
            'content' => '<div class="rr-page-content">
<h1>eCommerce Website Design</h1>

<p class="lead">Does the thought of moving your business online fill you with dread? Worry no more. Red Rocket\'s e-commerce experts can build and maintain the perfect e-commerce store — giving you more time to focus on your business.</p>

<h2>Professional design, marketing and branding</h2>
<p>We\'ll build your online store to match your brand and keep it continuously updated so that it meets all the constantly evolving trends, technologies and regulations.</p>

<h2>Unlock the power of multi-channel selling</h2>
<p>We\'ll set up the social channels that will work for your business, so you can reach the billions of Facebook, Instagram and Google Shopping users who dominate the online market.</p>

<h2>We\'ll take care of everything</h2>
<p>Not only will we set-up your e-commerce operations, we\'ll keep them online 24/7. Your online store and sales channels will be automatically upgraded with all the latest releases.</p>

<h2>Scale up your business</h2>
<p>Once you\'re online, we\'ll work with you to develop a marketing strategy that will drive the outcomes that are best for your business—sales, calls, leads—whatever creates maximum value.</p>

</div>',
        ),

        // ============================================
        // SEO PAGE
        // ============================================
        array(
            'slug' => 'seo',
            'title' => 'Search Engine Optimisation',
            'meta_title' => 'SEO Services Ipswich – Search Engine Optimisation | Red Rocket Digital',
            'meta_description' => 'Professional SEO services in Ipswich, Suffolk. Red Rocket Digital helps your business rank higher on Google with proven search engine optimisation strategies.',
            'content' => '<div class="rr-page-content">
<h1>Search Engine Optimisation (SEO)</h1>

<p class="lead">Ultimate visibility and exposure awaits you, with superior website optimisation and search engine marketing solutions.</p>

<p>Our SEO experts will help your business climb the search rankings, driving more qualified traffic to your website and increasing your online visibility.</p>

<h2>Our SEO Services Include:</h2>

<div class="rr-features-grid">
<div class="rr-feature">
<h3>Technical SEO</h3>
<p>We optimise your website\'s technical foundation to ensure search engines can crawl and index your content effectively.</p>
</div>

<div class="rr-feature">
<h3>On-Page SEO</h3>
<p>We optimise your content, meta tags, headings, and internal linking structure for maximum search visibility.</p>
</div>

<div class="rr-feature">
<h3>Local SEO</h3>
<p>We help local businesses dominate the Google Map Pack and local search results in Ipswich and Suffolk.</p>
</div>

<div class="rr-feature">
<h3>Link Building</h3>
<p>We build high-quality backlinks from authoritative websites to boost your domain authority and rankings.</p>
</div>
</div>

<h2>Why SEO Matters</h2>
<p>82% of consumers use Google to find information online. If your business isn\'t on the first page, you\'re missing out on valuable traffic and potential customers.</p>

<p>Our data-driven approach to SEO ensures that every strategy is tailored to your specific business goals and target market.</p>

</div>',
        ),

        // ============================================
        // SOCIAL MEDIA MARKETING PAGE
        // ============================================
        array(
            'slug' => 'social-media-marketing',
            'title' => 'Social Media Marketing',
            'meta_title' => 'Social Media Marketing Ipswich – Social Media Management | Red Rocket',
            'meta_description' => 'Expert social media marketing and management services in Ipswich. Grow your brand presence on Facebook, Instagram, LinkedIn and more with Red Rocket.',
            'content' => '<div class="rr-page-content">
<h1>Social Media Marketing</h1>

<p class="lead">Where there\'s a phone, there\'s a way. Dominate your social media pages with posts curated to your industry.</p>

<p>Social media is where your customers spend their time. Let us help you connect with them through strategic content and targeted advertising.</p>

<h2>Our Social Media Services</h2>

<div class="rr-features-grid">
<div class="rr-feature">
<h3>Content Creation</h3>
<p>We create engaging, shareable content that resonates with your target audience and builds brand awareness.</p>
</div>

<div class="rr-feature">
<h3>Community Management</h3>
<p>We manage your social media presence, responding to comments and messages to build customer relationships.</p>
</div>

<div class="rr-feature">
<h3>Paid Social Advertising</h3>
<p>We create targeted ad campaigns on Facebook, Instagram, and LinkedIn to reach your ideal customers.</p>
</div>

<div class="rr-feature">
<h3>Analytics & Reporting</h3>
<p>We track performance and provide detailed reports so you can see the ROI of your social media investment.</p>
</div>
</div>

<h2>Platforms We Work With</h2>
<ul>
<li>Facebook</li>
<li>Instagram</li>
<li>LinkedIn</li>
<li>Twitter/X</li>
<li>TikTok</li>
<li>YouTube</li>
</ul>

</div>',
        ),

        // ============================================
        // PAID ADVERTISING PAGE
        // ============================================
        array(
            'slug' => 'paid-advertising',
            'title' => 'Paid Advertising',
            'meta_title' => 'PPC & Paid Advertising Ipswich – Google Ads Management | Red Rocket',
            'meta_description' => 'Expert PPC and paid advertising management in Ipswich. Get instant results with Google Ads and Facebook Ads campaigns managed by Red Rocket Digital.',
            'content' => '<div class="rr-page-content">
<h1>Paid Advertising (PPC)</h1>

<p class="lead">Direct your target demographic straight to your products and services through powerful PPC ads on first-tier search engines.</p>

<p>Get instant visibility and drive qualified traffic to your website with expertly managed pay-per-click advertising campaigns.</p>

<h2>Our PPC Services</h2>

<div class="rr-features-grid">
<div class="rr-feature">
<h3>Google Ads</h3>
<p>We create and manage Google Search, Display, and Shopping campaigns that deliver measurable results.</p>
</div>

<div class="rr-feature">
<h3>Facebook & Instagram Ads</h3>
<p>We leverage the power of social advertising to reach your target audience with precision targeting.</p>
</div>

<div class="rr-feature">
<h3>Remarketing</h3>
<p>We bring back visitors who didn\'t convert with strategic remarketing campaigns across multiple platforms.</p>
</div>

<div class="rr-feature">
<h3>Landing Page Optimisation</h3>
<p>We create and optimise landing pages that convert clicks into customers.</p>
</div>
</div>

<h2>Why Choose Red Rocket for PPC?</h2>
<ul>
<li>Certified Google Ads specialists</li>
<li>Transparent reporting and analytics</li>
<li>No long-term contracts</li>
<li>Proven track record of ROI</li>
</ul>

</div>',
        ),

        // ============================================
        // PR SERVICES PAGE
        // ============================================
        array(
            'slug' => 'pr-services',
            'title' => 'PR Services',
            'meta_title' => 'PR Services Ipswich – Public Relations Agency Suffolk | Red Rocket',
            'meta_description' => 'Professional PR services in Ipswich, Suffolk. Red Rocket delivers memorable brand experiences and helps you stand out from the competition.',
            'content' => '<div class="rr-page-content">
<h1>PR Services</h1>

<p class="lead">We deliver memorable brand experiences, build – and protect – your reputation and help you stand out from the competition.</p>

<p>In today\'s digital age, your reputation is everything. Our PR services help you tell your story, manage your image, and build meaningful connections with your audience.</p>

<h2>Our PR Services Include:</h2>

<div class="rr-features-grid">
<div class="rr-feature">
<h3>Media Relations</h3>
<p>We build relationships with journalists and secure coverage in relevant publications for your business.</p>
</div>

<div class="rr-feature">
<h3>Press Release Writing</h3>
<p>We craft compelling press releases that get picked up by media outlets and drive awareness.</p>
</div>

<div class="rr-feature">
<h3>Crisis Management</h3>
<p>We help protect your reputation when things go wrong with strategic crisis communication.</p>
</div>

<div class="rr-feature">
<h3>Brand Storytelling</h3>
<p>We help you craft and communicate your brand story in a way that resonates with your audience.</p>
</div>
</div>

</div>',
        ),

        // ============================================
        // DESIGN SERVICES PAGE
        // ============================================
        array(
            'slug' => 'design-services',
            'title' => 'Logo & Brand Design',
            'meta_title' => 'Logo & Brand Design Ipswich – Branding Agency Suffolk | Red Rocket',
            'meta_description' => 'Professional logo design and branding services in Ipswich. Create a memorable brand identity with Red Rocket Digital\'s expert designers.',
            'content' => '<div class="rr-page-content">
<h1>Logo & Brand Design</h1>

<p class="lead">Your brand is the face of your business. Make it memorable with professional logo and brand design from Red Rocket Digital.</p>

<h2>Our Branding Services</h2>

<div class="rr-features-grid">
<div class="rr-feature">
<h3>Logo Design</h3>
<p>We create unique, memorable logos that capture the essence of your brand and stand out from the competition.</p>
</div>

<div class="rr-feature">
<h3>Brand Identity</h3>
<p>We develop comprehensive brand guidelines including colours, typography, and visual elements.</p>
</div>

<div class="rr-feature">
<h3>Stationery Design</h3>
<p>We design business cards, letterheads, and other branded materials that make a lasting impression.</p>
</div>

<div class="rr-feature">
<h3>Brand Strategy</h3>
<p>We help you define your brand positioning, messaging, and voice to connect with your target audience.</p>
</div>
</div>

</div>',
        ),

        // ============================================
        // CONTENT COPYWRITING PAGE
        // ============================================
        array(
            'slug' => 'content-copywriting-ipswich-suffolk',
            'title' => 'Content Copywriting',
            'meta_title' => 'Content Copywriting – Persuasive Content Copywriting Ipswich Suffolk',
            'meta_description' => 'Professional content copywriting services in Ipswich. Our expert copywriters create compelling, conversion-focused content for web and social media.',
            'content' => '<div class="rr-page-content">
<h1>Content Copywriting</h1>

<p class="lead">While a beautifully designed website can turn heads, the <em>messaging</em> is the real hero of any solid web presence.</p>

<p>After we\'ve identified your target audience and your key differentiators, our copy experts will craft the most compelling message possible, making that key connection between what you offer and what your customers are looking for.</p>

<p>By putting it all in terms they understand, you\'re sure to see a huge leap in conversions.</p>

<h2>Content for Search</h2>
<p>One of the most important ranking factors for search engines are the words written into your web pages.</p>

<p>Our copywriters not only excel at writing convincing, conversion-focused copy, they will be able to work in pre-identified keyword phrases as well. This results in higher search engine rankings and more qualified traffic to your website.</p>

<h2>Content for Social</h2>
<p>If social marketing (such as Facebook ads) is part of the strategy, the right headline and supporting text is a proven needle-mover when done correctly. In other words, get that right and you can expect a very healthy increase in click-throughs and an overall lower cost-per-click.</p>

<p>Don\'t worry if all this sounds daunting. We can handle it all for you and even provide multiple variations that we can split test against one another, resulting in an even higher-performing ad set.</p>

</div>',
        ),

        // ============================================
        // WEBSITE HOSTING PAGE
        // ============================================
        array(
            'slug' => 'website-hosting',
            'title' => 'Website Hosting',
            'meta_title' => 'Website Hosting Ipswich – Reliable Web Hosting | Red Rocket Digital',
            'meta_description' => 'Reliable, fast website hosting services in Ipswich. Keep your site online 24/7 with Red Rocket Digital\'s managed hosting solutions.',
            'content' => '<div class="rr-page-content">
<h1>Website Hosting</h1>

<p class="lead">Keep your website fast, secure, and online 24/7 with our managed hosting solutions.</p>

<h2>Why Choose Red Rocket Hosting?</h2>

<div class="rr-features-grid">
<div class="rr-feature">
<h3>99.9% Uptime</h3>
<p>We guarantee your website stays online with our reliable hosting infrastructure.</p>
</div>

<div class="rr-feature">
<h3>Daily Backups</h3>
<p>Your data is safe with automated daily backups and easy restore options.</p>
</div>

<div class="rr-feature">
<h3>SSL Certificates</h3>
<p>Free SSL certificates keep your website secure and help with SEO rankings.</p>
</div>

<div class="rr-feature">
<h3>UK-Based Support</h3>
<p>Our support team is based in the UK and available to help when you need it.</p>
</div>
</div>

</div>',
        ),

        // ============================================
        // ABOUT US PAGE
        // ============================================
        array(
            'slug' => 'about-us',
            'title' => 'About Us',
            'meta_title' => 'About Us – Digital Marketing Agency Ipswich | Red Rocket Digital',
            'meta_description' => 'Learn about Red Rocket Digital, Ipswich\'s leading digital marketing agency. Meet our team and discover what makes us different.',
            'content' => '<div class="rr-page-content">
<h1>About Red Rocket Digital</h1>

<p class="lead">We\'re a digital marketing agency focused on your success through innovative campaigns in Ipswich and beyond.</p>

<p>Red Rocket Digital began years ago with just one customer, and a vision to become a digital marketing agency that clients could truly trust. We understood the concerns of businesses who were tired of wasting money with agencies that didn\'t listen or satisfy their needs and over the years, we\'ve worked with a lot of different companies just like you.</p>

<p>We know what works and what doesn\'t. We get the challenges you\'re facing and respect the budgets you have in place.</p>

<p>Today, Red Rocket Digital is an established digital marketing agency with a solid base of trusted clients. We have over 35 years of shared design and marketing expertise and love to stay at the forefront of industry trends and technology.</p>

<h2>Our Values</h2>

<div class="rr-features-grid">
<div class="rr-feature">
<h3>Transparency</h3>
<p>We believe in honest, open communication with all our clients.</p>
</div>

<div class="rr-feature">
<h3>Results-Driven</h3>
<p>Everything we do is focused on delivering measurable results for your business.</p>
</div>

<div class="rr-feature">
<h3>Innovation</h3>
<p>We stay ahead of industry trends to give you a competitive edge.</p>
</div>

<div class="rr-feature">
<h3>Partnership</h3>
<p>We see ourselves as an extension of your team, not just another vendor.</p>
</div>
</div>

<h2>Our Stats</h2>
<ul>
<li><strong>35+</strong> Years of Shared Marketing Experience</li>
<li><strong>30+</strong> Talented Team Members</li>
<li><strong>1,200+</strong> Completed Campaigns and Projects</li>
<li><strong>100%</strong> Guaranteed to Boost Your Online Presence</li>
</ul>

</div>',
        ),

        // ============================================
        // CONTACT US PAGE
        // ============================================
        array(
            'slug' => 'contact-us',
            'title' => 'Contact Us',
            'meta_title' => 'Contact Us – Get In Touch | Red Rocket Digital Ipswich',
            'meta_description' => 'Contact Red Rocket Digital for a free consultation. We\'re based in Ipswich, Suffolk and ready to help your business grow online.',
            'content' => '<div class="rr-page-content">
<h1>Contact Us</h1>

<p class="lead">Ready to take your digital marketing to the next level? Get in touch with our team today.</p>

<h2>Get In Touch</h2>

<div class="rr-contact-details">
<p><strong>Address:</strong><br>
Epsilon House, West Road,<br>
Ransomes Euro Park,<br>
Ipswich, Suffolk IP3 9FJ</p>

<p><strong>Phone:</strong> <a href="tel:+441473563990">01473 563 990</a></p>

<p><strong>Email:</strong> <a href="mailto:info@redrocket.digital">info@redrocket.digital</a></p>
</div>

<h2>Request Your Free Consultation</h2>
<p>Fill in the form below and one of our team will be in touch to discuss your digital marketing needs.</p>

[contact-form-7 id="contact" title="Contact Form"]

</div>',
        ),

        // ============================================
        // CASE STUDIES PAGE
        // ============================================
        array(
            'slug' => 'case-studies',
            'title' => 'Case Studies',
            'meta_title' => 'Case Studies – Our Success Stories | Red Rocket Digital',
            'meta_description' => 'View our digital marketing case studies and success stories. See how Red Rocket Digital has helped businesses grow across Ipswich and beyond.',
            'content' => '<div class="rr-page-content">
<h1>Case Studies</h1>

<p class="lead">See how we\'ve helped businesses like yours achieve their digital marketing goals.</p>

<p>Our case studies showcase the real results we\'ve delivered for clients across various industries. From increased traffic to higher conversions, we\'re proud of the success we\'ve helped our clients achieve.</p>

</div>',
        ),

        // ============================================
        // OUR PORTFOLIO PAGE
        // ============================================
        array(
            'slug' => 'our-portfolio',
            'title' => 'Our Work',
            'meta_title' => 'Our Work – Web Design Portfolio | Red Rocket Digital',
            'meta_description' => 'Browse our web design and digital marketing portfolio. See the stunning websites and successful campaigns we\'ve created for our clients.',
            'content' => '<div class="rr-page-content">
<h1>Our Work</h1>

<p class="lead">Take a look at some of the websites and campaigns we\'ve created for our clients.</p>

<p>Every project is unique, and we approach each one with fresh eyes and creative solutions. Browse our portfolio to see examples of our work across web design, branding, and digital marketing.</p>

</div>',
        ),

        // ============================================
        // FAQ PAGE
        // ============================================
        array(
            'slug' => 'faq',
            'title' => 'FAQs',
            'meta_title' => 'FAQs – Frequently Asked Questions | Red Rocket Digital',
            'meta_description' => 'Find answers to common questions about our digital marketing services, pricing, and process. Red Rocket Digital, Ipswich.',
            'content' => '<div class="rr-page-content">
<h1>Frequently Asked Questions</h1>

<p class="lead">Got questions? We\'ve got answers. Here are some of the most common questions we receive.</p>

<h2>How much does a website cost?</h2>
<p>Every website is different, so pricing depends on your specific requirements. We offer packages starting from £500 for simple brochure sites, up to £5,000+ for complex eCommerce solutions. Contact us for a free quote.</p>

<h2>How long does it take to build a website?</h2>
<p>A typical brochure website takes 2-4 weeks from start to finish. More complex sites with custom functionality may take 6-8 weeks or longer.</p>

<h2>Do you offer ongoing support?</h2>
<p>Yes! We offer various maintenance and support packages to keep your website secure, updated, and performing at its best.</p>

<h2>What areas do you serve?</h2>
<p>While we\'re based in Ipswich, Suffolk, we work with clients across the UK and internationally. Distance is no barrier to great digital marketing!</p>

<h2>Do you require long-term contracts?</h2>
<p>No. We believe in earning your business every month. While we recommend a minimum 3-month commitment for SEO to see results, we don\'t lock you into lengthy contracts.</p>

</div>',
        ),

        // ============================================
        // OUR SERVICES PAGE
        // ============================================
        array(
            'slug' => 'our-services',
            'title' => 'Our Services',
            'meta_title' => 'Red Rocket Services – Web Design & Digital Marketing Ipswich, Suffolk',
            'meta_description' => 'Explore our full range of digital marketing services including web design, SEO, social media, PPC, and content marketing. Red Rocket Digital, Ipswich.',
            'content' => '<div class="rr-page-content">
<h1>Our Services</h1>

<p class="lead">We deliver branding, marketing communications, web platforms and social campaigns with insight, clarity and impact. We like complex. We love to be challenged. And we take huge pride in helping businesses grow.</p>

<p>Every solution comes from our strategic and expert thinking. We\'re not average. Average is for other agencies. Take a look below at the services our team can offer:</p>

<div class="rr-services-grid">

<div class="rr-service-item">
<h3><a href="/web-design/">Web Design & Development</a></h3>
<p>Get a brand new website, or revamp an old one, to stay ahead of the curve with cutting-edge web design.</p>
</div>

<div class="rr-service-item">
<h3><a href="/seo/">Search Engine Optimisation</a></h3>
<p>Ultimate visibility and exposure awaits you, with superior website optimisation and search engine marketing solutions.</p>
</div>

<div class="rr-service-item">
<h3><a href="/social-media-marketing/">Social Media Marketing</a></h3>
<p>Where there\'s a phone, there\'s a way. Dominate your social media pages with posts curated to your industry.</p>
</div>

<div class="rr-service-item">
<h3><a href="/paid-advertising/">Paid Advertising</a></h3>
<p>Direct your target demographic straight to your products and services through powerful PPC ads on first-tier search engines.</p>
</div>

<div class="rr-service-item">
<h3><a href="/pr-services/">PR Services</a></h3>
<p>We deliver memorable brand experiences, build – and protect – your reputation and help you stand out from the competition.</p>
</div>

<div class="rr-service-item">
<h3><a href="/design-services/">Logo & Brand Design</a></h3>
<p>Start pumping out blog articles, location or product pages and more, to stimulate interest in your company.</p>
</div>

</div>

</div>',
        ),

    );
}

/**
 * Create pages on theme activation
 */
function redrocket_create_pages() {
    $pages = redrocket_get_archived_pages();
    
    // Service page slugs that should use the Service Page template
    $service_slugs = array(
        'web-design', 'seo', 'social-media-marketing', 'paid-advertising', 
        'pr-services', 'design-services', 'content-copywriting-ipswich-suffolk',
        'website-hosting', 'ecommerce-web-design-ipswich-suffolk', 'our-services'
    );
    
    // Portfolio/case study slugs that should use the Portfolio Page template
    $portfolio_slugs = array('our-portfolio', 'case-studies');
    
    foreach ($pages as $page_data) {
        // Check if page already exists
        $existing_page = get_page_by_path($page_data['slug']);
        
        if (!$existing_page) {
            // Create the page
            $page_id = wp_insert_post(array(
                'post_title'    => $page_data['title'],
                'post_name'     => $page_data['slug'],
                'post_content'  => $page_data['content'],
                'post_status'   => 'publish',
                'post_type'     => 'page',
                'post_author'   => 1,
            ));
            
            if ($page_id && !is_wp_error($page_id)) {
                // Store custom meta
                update_post_meta($page_id, '_rr_meta_title', $page_data['meta_title']);
                update_post_meta($page_id, '_rr_meta_description', $page_data['meta_description']);
                
                // Set Service Page template for service pages
                if (in_array($page_data['slug'], $service_slugs)) {
                    update_post_meta($page_id, '_wp_page_template', 'page-service.php');
                }
                
                // Set Portfolio Page template for portfolio/case study pages
                if (in_array($page_data['slug'], $portfolio_slugs)) {
                    update_post_meta($page_id, '_wp_page_template', 'page-portfolio.php');
                }
            }
        } else {
            // Update meta for existing pages
            update_post_meta($existing_page->ID, '_rr_meta_title', $page_data['meta_title']);
            update_post_meta($existing_page->ID, '_rr_meta_description', $page_data['meta_description']);
            
            // Also set template for existing service pages
            if (in_array($page_data['slug'], $service_slugs)) {
                update_post_meta($existing_page->ID, '_wp_page_template', 'page-service.php');
            }
            
            // Also set template for existing portfolio/case study pages
            if (in_array($page_data['slug'], $portfolio_slugs)) {
                update_post_meta($existing_page->ID, '_wp_page_template', 'page-portfolio.php');
            }
        }
    }
    
    // Set the homepage
    $front_page = get_page_by_path('');
    if (!$front_page) {
        // Create homepage if it doesn't exist
        $front_page_id = wp_insert_post(array(
            'post_title'    => 'Home',
            'post_name'     => '',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_author'   => 1,
        ));
    }
}

/**
 * Run on theme activation
 */
function redrocket_theme_activation() {
    // Create pages
    redrocket_create_pages();
    
    // Set reading settings
    update_option('show_on_front', 'page');
    
    // Get or create front page
    $front_page = get_page_by_title('Home');
    if ($front_page) {
        update_option('page_on_front', $front_page->ID);
    }
    
    // Set blog page
    $blog_page = get_page_by_path('news');
    if (!$blog_page) {
        $blog_id = wp_insert_post(array(
            'post_title'    => 'News',
            'post_name'     => 'news',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_author'   => 1,
        ));
        update_option('page_for_posts', $blog_id);
    } else {
        update_option('page_for_posts', $blog_page->ID);
    }
    
    // Update site title
    update_option('blogname', 'Red Rocket Digital');
    update_option('blogdescription', 'Digital Marketing Agency Ipswich');
    
    // Clear the missing pages transient
    delete_transient('redrocket_missing_pages');
    
    // Flush rewrite rules
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'redrocket_theme_activation');

/**
 * Check for missing pages and show admin notice
 */
function redrocket_check_missing_pages() {
    // Only check once per hour to avoid performance issues
    $missing_pages = get_transient('redrocket_missing_pages');
    
    if ($missing_pages === false) {
        $missing_pages = array();
        $pages = redrocket_get_archived_pages();
        
        foreach ($pages as $page_data) {
            $existing_page = get_page_by_path($page_data['slug']);
            if (!$existing_page) {
                $missing_pages[] = $page_data['title'];
            }
        }
        
        set_transient('redrocket_missing_pages', $missing_pages, HOUR_IN_SECONDS);
    }
    
    return $missing_pages;
}

/**
 * Display admin notice for missing pages
 */
function redrocket_missing_pages_notice() {
    $missing_pages = redrocket_check_missing_pages();
    
    if (!empty($missing_pages) && current_user_can('manage_options')) {
        $create_url = admin_url('themes.php?page=redrocket-create-pages');
        ?>
        <div class="notice notice-warning is-dismissible">
            <p><strong>Red Rocket Digital:</strong> <?php echo count($missing_pages); ?> pages are missing (<?php echo implode(', ', array_slice($missing_pages, 0, 5)); ?><?php echo count($missing_pages) > 5 ? '...' : ''; ?>). 
            <a href="<?php echo esc_url($create_url); ?>">Click here to create them now</a>.</p>
        </div>
        <?php
    }
}
add_action('admin_notices', 'redrocket_missing_pages_notice');

/**
 * Auto-create pages if requested via URL parameter
 */
function redrocket_auto_create_on_request() {
    if (isset($_GET['redrocket_create_pages']) && current_user_can('manage_options')) {
        if (wp_verify_nonce($_GET['_wpnonce'], 'redrocket_auto_create')) {
            redrocket_create_pages();
            delete_transient('redrocket_missing_pages');
            wp_redirect(admin_url('themes.php?page=redrocket-create-pages&created=1'));
            exit;
        }
    }
}
add_action('admin_init', 'redrocket_auto_create_on_request');

/**
 * Add admin page to manually trigger page creation
 */
function redrocket_admin_menu() {
    add_theme_page(
        'Create Red Rocket Pages',
        'Create Pages',
        'manage_options',
        'redrocket-create-pages',
        'redrocket_admin_page'
    );
}
add_action('admin_menu', 'redrocket_admin_menu');

/**
 * Admin page callback
 */
function redrocket_admin_page() {
    // Handle page creation
    if (isset($_POST['create_pages']) && check_admin_referer('redrocket_create_pages')) {
        redrocket_create_pages();
        delete_transient('redrocket_missing_pages');
        echo '<div class="notice notice-success"><p><strong>Success!</strong> All pages have been created. <a href="' . home_url() . '" target="_blank">View your site</a>.</p></div>';
    }
    
    // Show success message if redirected after auto-create
    if (isset($_GET['created'])) {
        echo '<div class="notice notice-success"><p><strong>Success!</strong> All pages have been created. <a href="' . home_url() . '" target="_blank">View your site</a>.</p></div>';
    }
    
    // Refresh the missing pages check
    delete_transient('redrocket_missing_pages');
    $missing_pages = redrocket_check_missing_pages();
    ?>
    <div class="wrap">
        <h1>Red Rocket Digital - Page Creator</h1>
        
        <?php if (!empty($missing_pages)): ?>
        <div class="notice notice-warning">
            <p><strong><?php echo count($missing_pages); ?> pages are missing.</strong> Click the button below to create them.</p>
        </div>
        <?php else: ?>
        <div class="notice notice-success">
            <p><strong>All pages exist!</strong> Your site is fully set up.</p>
        </div>
        <?php endif; ?>
        
        <form method="post">
            <?php wp_nonce_field('redrocket_create_pages'); ?>
            <p><input type="submit" name="create_pages" class="button button-primary button-hero" value="<?php echo empty($missing_pages) ? 'Recreate All Pages' : 'Create Missing Pages'; ?>"></p>
        </form>
        
        <h2>Page Status:</h2>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>Page Title</th>
                    <th>URL Slug</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $pages = redrocket_get_archived_pages();
            foreach ($pages as $page) {
                $existing = get_page_by_path($page['slug']);
                $status = $existing ? '<span style="color:green;">✓ Exists</span>' : '<span style="color:red;">✗ Missing</span>';
                $action = $existing ? '<a href="' . get_edit_post_link($existing->ID) . '">Edit</a> | <a href="' . get_permalink($existing->ID) . '" target="_blank">View</a>' : '—';
                echo '<tr>';
                echo '<td><strong>' . esc_html($page['title']) . '</strong></td>';
                echo '<td><code>/' . esc_html($page['slug']) . '/</code></td>';
                echo '<td>' . $status . '</td>';
                echo '<td>' . $action . '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
        
        <h3 style="margin-top: 30px;">After Creating Pages</h3>
        <p>Once pages are created, remember to:</p>
        <ol>
            <li>Go to <strong>Settings → Permalinks</strong> and click "Save Changes" to flush rewrite rules</li>
            <li>Set up your navigation menus at <strong>Appearance → Menus</strong></li>
            <li>If using Elementor, import the templates from <code>/elementor-templates/</code></li>
        </ol>
    </div>
    <?php
}
