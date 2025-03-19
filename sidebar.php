<?php

/**
 * Sidebar Template
 * @since v1.0.0
 * @package DarshanPatani Starter Theme
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}
?>
<?php if (is_active_sidebar('sidebar-1')) : ?>
    <aside id="secondary" class="col-md-4">
        <div class="sidebar">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
    </aside>
<?php endif; ?>