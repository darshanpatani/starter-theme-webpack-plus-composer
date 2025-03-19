<?php
/**
 * Footer Template
 * @since v1.0.0
 * @package DarshanPatani Starter Theme
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
</main>

<footer class="bg-dark text-white text-center py-3 mt-4">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
