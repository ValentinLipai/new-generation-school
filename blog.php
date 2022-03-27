<?php
/**
 * Template Name: Blog
 * Template Post Type: page
 */

get_header(); ?>

<?php
    $blog_fields = get_field('blog');
?>
<?php
$args = array(
    'post__not_in' => $blog_fields['exclude'],
    'post_type' => 'post',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => $blog_fields['posts_per_page']
);

$wp_query = new WP_Query($args);
?>
    <section class="section31">
        <div class="container">
            <div class="section31-wrapper">
                <div class="section31-title-wrapper">
                    <h5 class="section31-suptitle"><?= $blog_fields['text_before_title']; ?></h5>
                    <h2 class="section31-title"><?= $blog_fields['title']; ?></h2>
                    <i class="icon-daub-section7"></i>
                </div>
                <div class="section31-row">
                    <?php
                    while ($wp_query->have_posts()): $wp_query->the_post();
                        get_template_part( 'template-parts/category-post-card', get_post_format() );
                    endwhile;
                    ?>
                </div>
                <?php if ($wp_query->max_num_pages > 1) { ?>
                <div class="section31-actions">
                    <button class="button-fill button-fill--green block-info__button section31-button blog-load-more"
                            data-page="<?= get_query_var( 'paged' ) ? get_query_var('paged') : 1; ?>"
                            data-max="<?= $wp_query->max_num_pages; ?>"
                            data-query="<?= htmlspecialchars(json_encode($args), ENT_QUOTES, 'UTF-8'); ?>">Показать еще</button>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>