<?php
/**
 * Template Name: СМИ о Нас
 * Template Post Type: post, page, courses
 */

get_header(); ?>

<?php
    $smi_fields = get_field('smi');

    $block1 = $smi_fields['blok_1'];
    $block2 = $smi_fields['blok_2'];
?>

    <section class="section29">
        <div class="container">
            <div class="section29-wrapper">
                <div class="section29-title-wrapper">
                    <h2 class="section29-title"><?= $block1['title']; ?></h2>
                    <i class="icon-daub-section7"></i>
                </div>
                <div class="section29-row">
                    <?php foreach($block1['video'] as $key => $item) { ?>
                    <div class="section29__item section29__item-1">
                        <img src="<?= $item['tv_logo']['sizes']['medium']; ?>" alt="><?= $item['description']; ?>" class="label-belarus1">
                        <div class="section29-video">
                            <img class="section29-video__poster" src="<?= $item['video_image']['sizes']['medium']; ?>" alt="">
                            <a class="red-button section29-button"  href="https://youtu.be/<?= $item['video_id']; ?>" target="_blank" data-fancybox="video-discription">
                                <i class="icon-triangle-play"></i>
                            </a>
                        </div>
                        <div class="section29__item-discr">
                            <h3 class="section29__item-discr-title"><?= $item['title']; ?></h3>
                            <span><?= $item['description']; ?></span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section30">
        <div class="container">
            <div class="section30-wrapper">
                <h2 class="section30-title"><?= $block2['title']; ?></h2>
                <div class="section30-row">
                    <?php foreach($block2['posts'] as $key => $item) { ?>
                    <div class="section30__item">
                        <a href="<?= $item['link']; ?>" target="_blank" class="section30__item-link"></a>
                        <div class="section30__item-label"><?= $item['domain']; ?></div>
                        <div class="section30__item-img-wrapper">
                            <img src="<?= $item['image']['sizes']['medium']; ?>" alt="<?= $item['description']; ?>">
                        </div>
                        <div class="section30__item-about-wrapper">
                            <span class="section30__item-discr"><?= $item['description']; ?></span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>