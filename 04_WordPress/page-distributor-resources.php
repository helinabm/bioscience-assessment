<?php
/**
 * Template Name: Distributor Resources
 * Template Post Type: page
 * Description: Custom page template for distributor resources
 */

get_header(); ?>

<div class="dr-wrapper">
    <?php 

    if (post_password_required()) : 
        echo '<div style="max-width: 500px; margin: 60px auto; background: white; padding: 40px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.08);">';
        echo get_the_password_form();
        echo '</div>';
    else : 
    ?>

        <h1 style="text-align: center; margin-bottom: 50px;">
            <?php echo esc_html(str_replace('Protected: ', '', get_the_title())); ?>
        </h1>

        <?php
        $query = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ));

        if ($query->have_posts()) : ?>
            <div class="dr-grid">
                <?php while ($query->have_posts()) : $query->the_post(); 
                    
                    // Safely extract field value strings or array elements
                    $file = get_field('file_url');
                    $file_url = '';
                    if (is_array($file) && !empty($file['url'])) {
                        $file_url = $file['url'];
                    } elseif (is_string($file) && !empty($file)) {
                        $file_url = $file;
                    }

                    $cats = get_the_category();
                    $cat_name = !empty($cats) ? esc_html($cats[0]->name) : 'General';
                ?>
                    <div class="dr-card">
                        <div>
                            <h3 class="dr-title"><?php the_title(); ?></h3>
                            <p class="dr-meta"><strong>Category:</strong> <?php echo $cat_name; ?></p>
                            <p class="dr-meta"><strong>Uploaded:</strong> <?php echo get_the_date('F j, Y'); ?></p>
                        </div>
                        
                        <div>
                            <?php if (!empty($file_url)) : ?>
                                <a href="<?php echo esc_url($file_url); ?>" class="dr-download-btn" download>
                                    📥 Download File
                                </a>
                            <?php else : ?>
                                <p class="dr-meta" style="color:#b02a37; margin-top:20px; font-weight: 500;">
                                    No file available
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <div class="dr-empty-notice">
                <p>No distributor resources found at the moment.</p>
            </div>
        <?php endif; 
        wp_reset_postdata(); ?>

    <?php endif; ?>
</div>

<?php get_footer(); ?>
