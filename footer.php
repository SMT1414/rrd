</main><!-- #main-content -->

<?php
// Check if Elementor Pro footer is active
if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('footer')) {
    // Fallback footer
    ?>
    <footer class="site-footer" style="width: 100vw !important; max-width: 100vw !important; margin-left: calc(-50vw + 50%) !important; margin-right: calc(-50vw + 50%) !important; padding: 60px 0 30px !important; background: #1e1666 !important; color: #fff; position: relative; left: 0; right: 0; display: block;">
        <div class="footer-container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div class="footer-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-bottom: 40px;">
                <div class="footer-brand">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/redrockettransparentlogo-1.png" alt="Red Rocket Digital" style="height: 45px; margin-bottom: 20px;">
                    <p style="color: rgba(255,255,255,0.7); font-size: 15px; margin: 0 0 20px;">A marketing agency with a difference. Based in Ipswich, Suffolk, we offer cost-effective digital services to get your business noticed.</p>
                    <p style="color: rgba(255,255,255,0.7); font-size: 14px; margin: 0;">
                        <strong style="color: #fff;">Call us:</strong> <a href="tel:+441473563990" style="color: #ff6c26;">01473 563 990</a>
                    </p>
                </div>
                <div class="footer-links">
                    <h4 style="margin-bottom: 20px; color: #fff; font-size: 18px;">Quick Links</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 12px;"><a href="<?php echo home_url(); ?>" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">Home</a></li>
                        <li style="margin-bottom: 12px;"><a href="<?php echo home_url('/about-us/'); ?>" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">About Us</a></li>
                        <li style="margin-bottom: 12px;"><a href="<?php echo home_url('/our-portfolio/'); ?>" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">Our Work</a></li>
                        <li style="margin-bottom: 12px;"><a href="<?php echo home_url('/case-studies/'); ?>" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">Case Studies</a></li>
                        <li style="margin-bottom: 12px;"><a href="<?php echo home_url('/faq/'); ?>" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">FAQs</a></li>
                        <li style="margin-bottom: 0;"><a href="<?php echo home_url('/contact-us/'); ?>" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-services">
                    <h4 style="margin-bottom: 20px; color: #fff; font-size: 18px;">Our Services</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 12px;"><a href="<?php echo home_url('/web-design/'); ?>" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">Web Design & Development</a></li>
                        <li style="margin-bottom: 12px;"><a href="<?php echo home_url('/seo/'); ?>" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">Search Engine Optimisation</a></li>
                        <li style="margin-bottom: 12px;"><a href="<?php echo home_url('/social-media-marketing/'); ?>" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">Social Media Management</a></li>
                        <li style="margin-bottom: 12px;"><a href="<?php echo home_url('/paid-advertising/'); ?>" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">Paid Advertising</a></li>
                        <li style="margin-bottom: 12px;"><a href="<?php echo home_url('/design-services/'); ?>" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">Logo & Brand Design</a></li>
                        <li style="margin-bottom: 0;"><a href="<?php echo home_url('/pr-services/'); ?>" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">PR Services</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4 style="margin-bottom: 20px; color: #fff; font-size: 18px;">Contact Us</h4>
                    <p style="color: rgba(255,255,255,0.7); font-size: 15px; margin: 0 0 15px; line-height: 1.7;">
                        <strong style="color: #fff;">Address:</strong><br>
                        Epsilon House, West Road,<br>
                        Ransomes Euro Park,<br>
                        Ipswich, Suffolk IP3 9FJ
                    </p>
                    <p style="margin: 0 0 10px;">
                        <strong style="color: #fff;">Email:</strong><br>
                        <a href="mailto:info@redrocket.digital" style="color: #ff6c26;">info@redrocket.digital</a>
                    </p>
                    <p style="margin: 0;">
                        <strong style="color: #fff;">Phone:</strong><br>
                        <a href="tel:+441473563990" style="color: #ff6c26;">01473 563 990</a>
                    </p>
                </div>
            </div>
            
            <!-- Partner Sites -->
            <div class="footer-partners" style="border-top: 1px solid rgba(255,255,255,0.1); padding: 25px 0; margin-bottom: 0; text-align: center;">
                <p style="margin: 0; color: rgba(255,255,255,0.5); font-size: 14px;">
                    Part of the SMT Digital family: 
                    <a href="https://smtdigital.co.uk" target="_blank" rel="noopener" style="color: #ff6c26; margin: 0 10px;">smtdigital.co.uk</a> | 
                    <a href="https://seoaudits.digital" target="_blank" rel="noopener" style="color: #ff6c26; margin: 0 10px;">seoaudits.digital</a>
                </p>
            </div>
            
            <div class="footer-bottom" style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 25px; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 20px;">
                <p style="margin: 0; color: rgba(255,255,255,0.6); font-size: 14px;">&copy; <?php echo date('Y'); ?> Red Rocket Digital. All Rights Reserved.</p>
                <p style="margin: 0; color: rgba(255,255,255,0.5); font-size: 13px;">Red Rocket T/A SMT Digital Ltd. Registered in England & Wales No. 12785753 | VAT: 444427495</p>
            </div>
        </div>
    </footer>
    <?php
}
?>

<?php wp_footer(); ?>
</body>
</html>
