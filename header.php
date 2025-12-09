<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
    <!-- Red Rocket Theme v2.4.1 - Force Full Width -->
    <style>
    /* FORCE FULL WIDTH - INLINE OVERRIDE */
    html, body, #page, #content, .site, .site-content, .content-area, 
    .hfeed, .site-inner, .wrap, .container, .wrapper, main, #main, 
    #main-content, .site-main {
        width: 100% !important;
        max-width: 100% !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        box-sizing: border-box !important;
    }
    
    /* HEADER FULL WIDTH */
    .site-header {
        width: 100vw !important;
        max-width: 100vw !important;
        margin-left: calc(-50vw + 50%) !important;
        margin-right: calc(-50vw + 50%) !important;
        padding: 0 !important;
        background: #fff !important;
        position: relative !important;
        left: 0 !important;
        right: 0 !important;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08) !important;
    }
    
    /* Header container layout */
    .header-container {
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        gap: 40px !important;
    }
    
    /* Logo spacing */
    .site-logo {
        flex-shrink: 0 !important;
    }
    
    /* Navigation spacing */
    .main-nav {
        flex: 1 !important;
    }
    
    .nav-menu {
        display: flex !important;
        align-items: center !important;
        gap: 30px !important;
        list-style: none !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    
    .nav-menu li a {
        padding: 10px 5px !important;
        white-space: nowrap !important;
    }
    
    /* Header CTA spacing */
    .header-cta {
        display: flex !important;
        align-items: center !important;
        gap: 25px !important;
        flex-shrink: 0 !important;
    }
    
    .header-phone {
        display: flex !important;
        align-items: center !important;
        gap: 8px !important;
        white-space: nowrap !important;
    }
    
    .header-phone i {
        margin-right: 0 !important;
    }
    
    /* FOOTER FULL WIDTH */
    .site-footer {
        width: 100vw !important;
        max-width: 100vw !important;
        margin-left: calc(-50vw + 50%) !important;
        margin-right: calc(-50vw + 50%) !important;
        padding: 60px 0 30px !important;
        background: #1e1666 !important;
        position: relative !important;
        left: 0 !important;
        right: 0 !important;
    }
    
    /* HIDE ALL HAMBURGER/MOBILE TOGGLES ON DESKTOP */
    @media (min-width: 769px) {
        .mobile-menu-toggle,
        .menu-toggle,
        .hamburger,
        .hamburger-menu,
        .mobile-toggle,
        .nav-toggle,
        .navbar-toggle,
        .toggle-menu,
        .menu-btn,
        .mobile-nav-toggle,
        .mobile-menu-btn,
        .burger,
        .burger-menu,
        .fa-bars,
        i.fa-bars,
        .fas.fa-bars,
        button[aria-label*="menu" i],
        button[aria-label*="Menu" i],
        button[aria-label*="toggle" i],
        button[aria-label*="Toggle" i],
        [class*="hamburger"],
        [class*="mobile-menu"],
        [class*="menu-toggle"],
        [class*="nav-toggle"],
        [class*="burger"],
        .header-container > button:last-of-type,
        .site-header button:not(.header-btn):not([type="submit"]) {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            width: 0 !important;
            height: 0 !important;
            max-width: 0 !important;
            max-height: 0 !important;
            overflow: hidden !important;
            pointer-events: none !important;
            position: absolute !important;
            left: -99999px !important;
            top: -99999px !important;
        }
    }
    
    /* HIDE DUDA CONTENT */
    [src*="lirp.cdn-website.com"],
    [data-src*="lirp.cdn-website.com"],
    iframe[src*="duda"],
    [class*="duda"],
    [id*="duda"],
    .dmBody, .dmContent, .dmFooter, .dmHeader, .dmNav {
        display: none !important;
        visibility: hidden !important;
        height: 0 !important;
        width: 0 !important;
    }
    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- JavaScript to forcibly remove hamburger on desktop -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    if (window.innerWidth > 768) {
        // Remove hamburger buttons
        var hamburgers = document.querySelectorAll('.mobile-menu-toggle, .menu-toggle, .hamburger, [class*="hamburger"], [class*="burger"], .fa-bars, button[aria-label*="menu" i], button[aria-label*="toggle" i]');
        hamburgers.forEach(function(el) {
            el.style.display = 'none';
            el.style.visibility = 'hidden';
            el.remove();
        });
        
        // Also target any button in header that's not the CTA
        var headerButtons = document.querySelectorAll('.site-header button, .header-container button');
        headerButtons.forEach(function(btn) {
            if (!btn.classList.contains('header-btn') && btn.type !== 'submit') {
                btn.style.display = 'none';
                btn.remove();
            }
        });
    }
});
</script>

<?php
// Check if Elementor Pro header is active
if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('header')) {
    // Fallback header
    ?>
    <!-- Top Bar -->
    <div class="site-topbar" style="background: #1e1666; padding: 8px 0; display: none;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center;">
            <div style="color: rgba(255,255,255,0.8); font-size: 14px;">
                <a href="tel:+441473563990" style="color: #ff6c26; text-decoration: none; font-weight: 500;">
                    <i class="fas fa-phone-alt" style="margin-right: 8px;"></i>01473 563 990
                </a>
                <span style="margin: 0 15px; color: rgba(255,255,255,0.3);">|</span>
                <a href="mailto:info@redrocket.digital" style="color: rgba(255,255,255,0.8); text-decoration: none;">
                    <i class="fas fa-envelope" style="margin-right: 8px;"></i>info@redrocket.digital
                </a>
            </div>
            <div>
                <a href="http://client.redrocket.digital" style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 14px;">
                    <i class="fas fa-user" style="margin-right: 8px;"></i>Client Login
                </a>
            </div>
        </div>
    </div>
    
    <!-- Main Header -->
    <header class="site-header" style="width: 100vw; max-width: 100vw; margin: 0; padding: 0; background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">
        <div class="header-container" style="max-width: 1200px; margin: 0 auto; padding: 15px 20px; display: flex; align-items: center; justify-content: space-between;">
            <div class="site-logo">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/redrockettransparentlogo-1.png" alt="<?php bloginfo('name'); ?>" style="height: 50px;">
                    </a>
                <?php endif; ?>
            </div>
            <nav class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav-menu',
                    'fallback_cb' => 'redrocket_fallback_menu',
                ));
                ?>
            </nav>
            <div class="header-cta" style="display: flex; align-items: center; gap: 20px;">
                <a href="tel:+441473563990" class="header-phone" style="color: #1e1666; text-decoration: none; font-weight: 600; font-size: 15px;">
                    <i class="fas fa-phone-alt" style="margin-right: 8px; color: #ff6c26;"></i>01473 563 990
                </a>
                <a href="<?php echo home_url('/contact-us/'); ?>" class="header-btn" style="background: linear-gradient(to right, #ff6c26, #ffa526); color: #fff; padding: 12px 25px; border-radius: 5px; text-decoration: none; font-weight: 600; font-size: 14px; transition: all 0.3s ease;">Get Started</a>
            </div>
            <!-- Mobile toggle hidden by default, shown via CSS on mobile -->
            <button class="mobile-menu-toggle" aria-label="Toggle Menu" style="display: none;">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>
    <?php
}
?>

<main id="main-content" class="site-main" style="width: 100%; max-width: 100%; margin: 0; padding: 0;">
