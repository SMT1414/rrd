<?php
/**
 * Single Post Template
 */
get_header();
?>

<div class="single-post-container" style="max-width: 800px; margin: 0 auto; padding: 80px 20px;">
    <?php while (have_posts()): the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 style="color: #1e1666; margin-bottom: 15px;"><?php the_title(); ?></h1>
                <div class="entry-meta" style="color: #6a7c92; margin-bottom: 30px;">
                    <span class="posted-on"><?php echo get_the_date(); ?></span>
                    <?php if (has_category()): ?>
                        <span class="cat-links"> | <?php the_category(', '); ?></span>
                    <?php endif; ?>
                </div>
            </header>
            
            <?php if (has_post_thumbnail()): ?>
                <div class="post-thumbnail" style="margin-bottom: 30px;">
                    <?php the_post_thumbnail('large', array('style' => 'width: 100%; border-radius: 10px;')); ?>
                </div>
            <?php endif; ?>
            
            <div class="entry-content" style="font-size: 1.1rem; line-height: 1.8; color: #6a7c92;">
                <?php the_content(); ?>
            </div>
            
            <footer class="entry-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid #e0e0e0;">
                <?php if (has_tag()): ?>
                    <div class="tags-links">
                        <strong>Tags:</strong> <?php the_tags('', ', '); ?>
                    </div>
                <?php endif; ?>
            </footer>
        </article>
        
        <nav class="post-navigation" style="margin-top: 50px; display: flex; justify-content: space-between;">
            <div class="nav-previous">
                <?php previous_post_link('%link', '← Previous Post'); ?>
            </div>
            <div class="nav-next">
                <?php next_post_link('%link', 'Next Post →'); ?>
            </div>
        </nav>
        
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
