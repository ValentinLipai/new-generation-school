<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package new-generation
 */

$fields = get_field('post_fields');

?>
<section class="section33">
    <div class="container">
        <div class="section33-row">
            <div class="section33-counter">
                <div class="section33-date"><?php new_generation_posted_on() ?></div>
                <div class="section33-views">
                    <i class="icon-eye"></i>
                    <span><?= gt_get_post_view(); ?></span>
                </div>
                <div class="section33-comments">
                    <i class="icon-comments"></i>
                    <span><?= get_comments_number(); ?></span>
                </div>
            </div>
            <h2 class="section33-title"><?= the_title(); ?></h2>
            <div class="section33__img-wrapper">
                <img class="section33__img" src="<?= $fields['image']['sizes']['large']; ?>" alt="заглавное изображение">
            </div>
            <div class="section33-info"><?= $fields['content_before']; ?></div>
            <?php if ($fields['post_in_content']):
                $post_data = $fields['post_in_content'];
                ?>
                <div class="section33-info__box section33-info__box-link">
                    <a href="#" class="section33-info-link"></a>
                    <div class="section33-info__box-link-img">
                        <div class="img-wrapper">
                            <?= get_the_post_thumbnail($post_data->ID); ?>
                        </div>
                    </div>
                    <p class="gray-text">Читайте так же:</p>
                    <h3><?= $post_data->post_title; ?></h3>
                </div>
            <?php endif; ?>
            <div class="section33-info"><?= $fields['content_after']; ?></div>

</section>

<section class="share-and-comments">
    <div class="container">
        <div class="content">
            <div class="share-links">
                <div class="share-links-title">
                    Поделиться:
                </div>
                <div class="share-links__row">
                    <a href="#" class="vk-link">
                        <i class="icon-vk"></i>
                    </a>
                    <a href="#" class="tg-link">
                        <i class="icon-telegram"></i>
                    </a>
                    <a href="#" class="twitter-link">
                        <i class="icon-twitter"></i>
                    </a>
                    <a href="#" class="facebook-link">
                        <i class="icon-facebook"></i>
                    </a>
                    <a href="#" class="ok-link">
                        <i class="icon-ok"></i>
                    </a>
                    <a href="#" class="viber-link">
                        <i class="icon-viber"></i>
                    </a>
                    <a href="#" class="pinterest-link">
                        <i class="icon-pinterest"></i>
                    </a>
                </div>
            </div>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>

        </div>
    </div>
</section>

<?php if ($fields['recommended']): ?>
<section class="section34">
    <div class="container">
        <div class="section31-wrapper">
            <div class="section31-title-wrapper">
                <h2 class="section31-title">Рекомендуем статьи:</h2>
            </div>
            <div class="section31-row">
                <?php foreach ($fields['recommended'] as $key => $item): ?>
                <div class="section31__item">
                    <a href="<?= get_the_permalink($item->ID); ?>" class="section31__item-link"></a>
                    <div class="section31__item-img-wrapper">
                        <?= get_the_post_thumbnail($item->ID); ?>
                    </div>

                    <div class="section31__item-about-wrapper">
                        <div class="section31__item-discr">
                            <h3 class="section31__item-disc-title"><?= $item->post_title; ?></h3>
                            <div class="section31__item-discr-excerpt"><?= strip_tags($item->post_excerpt); ?></div>
                        </div>
                        <div class="section31__item-count">
                            <div class="section31__item-show-counter">
                                <i class="icon-eye"></i>
                                <p><?= gt_get_post_view($item->ID); ?></p>
                            </div>
                            <div class="section31__item-counter-date"><?= new_generation_posted_on($item->ID); ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>