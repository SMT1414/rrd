<?php
/**
 * Main template file
 */
get_header();
?>

<div class="content-area" style="max-width: 1200px; margin: 0 auto; padding: 80px 20px;">
    <?php if (have_posts()): ?>
        <div class="posts-container">
            <?php while (have_posts()): the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 40px;">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-meta" style="color: #6a7c92; margin-bottom: 15px;">
                        <?php echo get_the_date(); ?>
                    </div>
                    <div class="entry-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" style="color: #ec5d49; font-weight: 500;">Read More →</a>
                </article>
            <?php endwhile; ?>
        </div>
        
        <?php the_posts_pagination(); ?>
        
    <?php else: ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
