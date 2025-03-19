<?php
/**
 * Main Template File
 * @since v1.0.0
 * @package DarshanPatani Starter Theme
 */

get_header();
?>

<div class="row">
    <div class="col-md-8">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('mb-4 p-3 border rounded shadow-sm'); ?>>
                    <h2 class="h4">
                        <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <p class="text-muted small"><?php the_time('F j, Y'); ?> by <?php the_author(); ?></p>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm">Read More</a>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p class="alert alert-warning">No posts found.</p>
        <?php endif; ?>
    </div>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>