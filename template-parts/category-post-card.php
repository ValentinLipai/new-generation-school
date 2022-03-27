<div class="section31__item">
    <a href="<?= the_permalink(); ?>" class="section31__item-link"></a>
    <div class="section31__item-img-wrapper">
        <?= the_post_thumbnail(); ?>
    </div>
    <div class="section31__item-about-wrapper">
        <div class="section31__item-discr">
            <h3 class="section31__item-disc-title"><?= the_title(); ?></h3>
            <div class="section31__item-discr-excerpt"><?= strip_tags(get_the_excerpt()); ?></div>
        </div>
        <div class="section31__item-count">
            <div class="section31__item-show-counter">
                <i class="icon-eye"></i>
                <p><?= gt_get_post_view(); ?></p>
            </div>
            <div class="section31__item-counter-date"><?= new_generation_posted_on(); ?></div>
        </div>
    </div>
</div>