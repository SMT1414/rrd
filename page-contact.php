<?php
/**
 * Contact Page Template
 */
?>

<style>
/* Contact Page Styles */
.rr-contact-hero {
    background: linear-gradient(135deg, #1e1666 0%, #2d1f8a 100%);
    padding: 100px 20px 80px;
    text-align: center;
    color: #fff;
}

.rr-contact-hero h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 48px;
    font-weight: 700;
    margin: 0 0 20px;
}

.rr-contact-hero p {
    font-size: 20px;
    max-width: 600px;
    margin: 0 auto;
    opacity: 0.9;
}

.rr-contact-main {
    padding: 80px 20px;
}

.rr-contact-container {
    max-width: 1200px;
    margin: 0 auto;
}

.rr-contact-wrapper {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 60px;
    align-items: start;
}

/* Contact Info Side */
.rr-contact-info-side h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 32px;
    font-weight: 700;
    color: #1e1666;
    margin: 0 0 20px;
}

.rr-contact-info-side > p {
    color: #6a7c92;
    font-size: 16px;
    line-height: 1.7;
    margin-bottom: 40px;
}

.rr-contact-info-list {
    margin-bottom: 40px;
}

.rr-contact-info-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 30px;
}

.rr-contact-info-icon {
    width: 60px;
    height: 60px;
    min-width: 60px;
    background: linear-gradient(135deg, #ff6c26, #ffa526);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 24px;
}

.rr-contact-info-text h4 {
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    font-weight: 600;
    color: #1e1666;
    margin: 0 0 8px;
}

.rr-contact-info-text p {
    color: #6a7c92;
    font-size: 15px;
    line-height: 1.6;
    margin: 0;
}

.rr-contact-info-text a {
    color: #ff6c26;
    text-decoration: none;
}

.rr-contact-info-text a:hover {
    text-decoration: underline;
}

/* Social Links */
.rr-contact-social h4 {
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    font-weight: 600;
    color: #1e1666;
    margin: 0 0 15px;
}

.rr-social-links {
    display: flex;
    gap: 15px;
}

.rr-social-link {
    width: 45px;
    height: 45px;
    background: #1e1666;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 18px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.rr-social-link:hover {
    background: #ff6c26;
    transform: translateY(-3px);
}

/* Contact Form Side */
.rr-contact-form-side {
    background: #fff;
    padding: 50px;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.1);
}

.rr-contact-form-side h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 24px;
    font-weight: 600;
    color: #1e1666;
    margin: 0 0 30px;
    text-align: center;
}

.rr-form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.rr-form-group {
    margin-bottom: 20px;
}

.rr-form-group.full-width {
    grid-column: 1 / -1;
}

.rr-form-group label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #1e1666;
    margin-bottom: 8px;
}

.rr-form-group input,
.rr-form-group select,
.rr-form-group textarea {
    width: 100%;
    padding: 15px 20px;
    border: 2px solid #e8e8e8;
    border-radius: 10px;
    font-size: 15px;
    font-family: 'Roboto', sans-serif;
    transition: border-color 0.3s ease;
    box-sizing: border-box;
}

.rr-form-group input:focus,
.rr-form-group select:focus,
.rr-form-group textarea:focus {
    outline: none;
    border-color: #ff6c26;
}

.rr-form-group textarea {
    min-height: 150px;
    resize: vertical;
}

.rr-submit-btn {
    width: 100%;
    padding: 18px 30px;
    background: linear-gradient(to right, #ff6c26, #ffa526);
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.rr-submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255,108,38,0.4);
}

/* Map Section */
.rr-map-section {
    padding: 0;
    background: #f8f9fa;
}

.rr-map-container {
    height: 400px;
    background: #e8e8e8;
    display: flex;
    align-items: center;
    justify-content: center;
}

.rr-map-placeholder {
    text-align: center;
    color: #6a7c92;
}

.rr-map-placeholder i {
    font-size: 48px;
    margin-bottom: 15px;
    color: #1e1666;
}

.rr-map-placeholder p {
    font-size: 16px;
    margin: 0;
}

/* Office Hours */
.rr-hours-section {
    background: #1e1666;
    padding: 60px 20px;
    color: #fff;
}

.rr-hours-container {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    text-align: center;
}

.rr-hours-item h4 {
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    font-weight: 600;
    margin: 0 0 10px;
}

.rr-hours-item p {
    font-size: 16px;
    opacity: 0.8;
    margin: 0;
}

.rr-hours-item .highlight {
    color: #ff6c26;
    font-weight: 600;
}

/* Responsive */
@media (max-width: 1024px) {
    .rr-contact-wrapper {
        grid-template-columns: 1fr;
    }
    
    .rr-hours-container {
        grid-template-columns: 1fr;
        gap: 30px;
    }
}

@media (max-width: 768px) {
    .rr-contact-hero h1 { font-size: 36px; }
    .rr-contact-form-side { padding: 30px 20px; }
    .rr-form-row { grid-template-columns: 1fr; }
    .rr-contact-main { padding: 60px 20px; }
}
</style>

<!-- Hero Section -->
<section class="rr-contact-hero">
    <h1>Get In Touch</h1>
    <p>Ready to take your digital marketing to the next level? We'd love to hear from you.</p>
</section>

<!-- Main Contact Section -->
<section class="rr-contact-main">
    <div class="rr-contact-container">
        <div class="rr-contact-wrapper">
            <!-- Info Side -->
            <div class="rr-contact-info-side">
                <h2>Let's Start a Conversation</h2>
                <p>Whether you have a question about our services, pricing, or just want to chat about your digital marketing needs, our team is here to help.</p>
                
                <div class="rr-contact-info-list">
                    <div class="rr-contact-info-item">
                        <div class="rr-contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="rr-contact-info-text">
                            <h4>Visit Our Office</h4>
                            <p>Epsilon House, West Road,<br>Ransomes Euro Park,<br>Ipswich, Suffolk IP3 9FJ</p>
                        </div>
                    </div>
                    
                    <div class="rr-contact-info-item">
                        <div class="rr-contact-info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="rr-contact-info-text">
                            <h4>Call Us</h4>
                            <p><a href="tel:+441473563990">01473 563 990</a></p>
                        </div>
                    </div>
                    
                    <div class="rr-contact-info-item">
                        <div class="rr-contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="rr-contact-info-text">
                            <h4>Email Us</h4>
                            <p><a href="mailto:info@redrocket.digital">info@redrocket.digital</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="rr-contact-social">
                    <h4>Follow Us</h4>
                    <div class="rr-social-links">
                        <a href="https://facebook.com/redrocketdigital" class="rr-social-link" target="_blank" rel="noopener">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/redrocketuk" class="rr-social-link" target="_blank" rel="noopener">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://linkedin.com/company/redrocketdigital" class="rr-social-link" target="_blank" rel="noopener">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://instagram.com/redrocketdigital" class="rr-social-link" target="_blank" rel="noopener">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Form Side -->
            <div class="rr-contact-form-side">
                <h3>Send Us a Message</h3>
                <form action="#" method="post">
                    <div class="rr-form-row">
                        <div class="rr-form-group">
                            <label for="first_name">First Name *</label>
                            <input type="text" id="first_name" name="first_name" required>
                        </div>
                        <div class="rr-form-group">
                            <label for="last_name">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    
                    <div class="rr-form-row">
                        <div class="rr-form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="rr-form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                    </div>
                    
                    <div class="rr-form-group full-width">
                        <label for="service">Service Interested In</label>
                        <select id="service" name="service">
                            <option value="">Select a service...</option>
                            <option value="web-design">Web Design & Development</option>
                            <option value="seo">Search Engine Optimisation</option>
                            <option value="social-media">Social Media Marketing</option>
                            <option value="paid-advertising">Paid Advertising (PPC)</option>
                            <option value="branding">Logo & Brand Design</option>
                            <option value="pr">PR Services</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="rr-form-group full-width">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" placeholder="Tell us about your project..." required></textarea>
                    </div>
                    
                    <button type="submit" class="rr-submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Office Hours -->
<section class="rr-hours-section">
    <div class="rr-hours-container">
        <div class="rr-hours-item">
            <h4>📞 Phone Support</h4>
            <p>Monday - Friday<br><span class="highlight">9:00 AM - 5:30 PM</span></p>
        </div>
        <div class="rr-hours-item">
            <h4>📧 Email Response</h4>
            <p>We aim to respond within<br><span class="highlight">24 hours</span></p>
        </div>
        <div class="rr-hours-item">
            <h4>🏢 Office Visits</h4>
            <p>By appointment<br><span class="highlight">Monday - Friday</span></p>
        </div>
    </div>
</section>
