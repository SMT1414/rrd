<?php
/**
 * 404 Error Page
 */
get_header();
?>

<div class="error-404" style="max-width: 800px; margin: 0 auto; padding: 100px 20px; text-align: center;">
    <h1 style="font-size: 120px; color: #ec5d49; margin-bottom: 20px;">404</h1>
    <h2 style="color: #1e1666; margin-bottom: 20px;">Page Not Found</h2>
    <p style="color: #6a7c92; font-size: 1.1rem; margin-bottom: 30px;">The page you're looking for doesn't exist or has been moved.</p>
    <a href="<?php echo home_url(); ?>" style="display: inline-block; background: linear-gradient(to right, #ff6c26, #ffa526); color: #fff; padding: 14px 35px; border-radius: 5px; font-weight: 500;">Back to Homepage</a>
</div>

<?php get_footer(); ?>
