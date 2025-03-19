<?php
/**
 * Page Template
 * @since v1.0.0
 * @package DarshanPatani Starter Theme
 */

get_header();
?>

<div class="container my-5">
    <div class="row">
        <!-- Main Content Area -->
        <main class="col-md-8">
            <?php
            while (have_posts()) :
                the_post();
            ?>
                <!-- Page Title -->
                <h1 class="mb-4"><?php the_title(); ?></h1>

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="mb-4">
                        <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid rounded" alt="<?php the_title(); ?>">
                    </div>
                <?php endif; ?>

                <!-- Page Content -->
                <div class="page-content">
                    <?php the_content(); ?>
                </div>

                <!-- Page Pagination (if content is paginated) -->
                <div class="mt-4">
                    <?php wp_link_pages(['before' => '<nav class="pagination">', 'after' => '</nav>']); ?>
                </div>

                <!-- Comments Section -->
                <?php
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
                ?>
            <?php endwhile; ?>
        </main>

        <!-- Sidebar -->
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>