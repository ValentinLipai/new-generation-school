<?php
/**
 * Template Name: ТРИЗ
 * Template Post Type: post, page, courses
 */

get_header(); ?>

<?php
    $triz_fields = get_field('triz');

    $block1 = $triz_fields['blok_1'];
    $block2 = $triz_fields['blok_2'];
    $block3 = $triz_fields['blok_3'];
    $block4 = $triz_fields['blok_4'];
    $block5 = $triz_fields['blok_5'];
?>

    <section class="section25">
        <div class="container">
            <div class="section25-row">
                <h5 class="section25-suptitle"><?= $block1['upper_title']; ?></h5>
                <h2 class="section25-title"><?= $block1['title']; ?></h2>
                <i class="icon-daub-section7"></i>
                <i class="icon-book"></i>
                <div class="section25-wrapper">
                    <div class="section25__img-wrapper">
                        <i class="icon-sun"></i>
                        <img class="section25__img" src="<?= $block1['image']['url']; ?>" alt="<?= $block1['title']; ?>">
                    </div>
                    <div class="section25-info1"><?= $block1['text_after_image']; ?></div>
                    <div class="section25-content">
                        <?php foreach ($block1['elements'] as $key => $item) { ?>
                            <div class="section25-content__item">
                                <div class="section25-content__number section25-content__number_<?= $key + 1; ?>">
                                    <i class="icon-cicle-empty-2"></i>
                                    <span><?= $key + 1; ?></span>
                                </div>
                                <div class="section25-content__text"><?= $item['text']; ?></div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="section25-info2"><?= $block1['text_after_elements']; ?></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section26">
        <div class="container">
            <div class="section26-wrapper">
                <h2 class="section26-title"><?= $block2['title']; ?></h2>
                <h5 class="section26-suptitle"><?= $block2['subtitle']; ?></h5>
                <div class="section26-row">
                    <?php foreach ($block2['video'] as $key => $item) { ?>
                        <div class="section26__item section26__item-<?= $key + 1; ?>">
                            <div class="section26-video">
                                <img class="section26-video__poster" src="<?= $item['image']['sizes']['medium']; ?>" alt="<?= $item['image']['alt']; ?>">
                                <a class="red-button section26-button"  href="https://youtu.be/<?= $item['video']; ?>" target="_blank" data-fancybox="video-discription">
                                    <i class="icon-triangle-play"></i>
                                </a>
                            </div>
                            <div class="section26__item-discr"><?= $item['description']; ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section27">
        <div class="container">
            <div class="section27-wrapper">
                <i class="icon-wawes"></i>
                <i class="icon-book"></i>
                <h2 class="section27-title"><?= $block3['title']; ?></h2>
                <h5 class="section27-suptitle"><?= $block3['subtitle']; ?></h5>
                <div class="section27-row">
                    <?php foreach ($block3['posts'] as $key => $item) { ?>
                    <div class="section27__item">
                        <a href="<?= the_permalink($item->ID); ?>" class="section27__item-link"></a>
                        <div class="section27__item-img-wrapper">
                            <div class="hiden-hovered-block">Читать в источнике</div>
                            <img src="<?= wp_get_attachment_image_src( get_post_thumbnail_id( $item->ID ), 'single-post-thumbnail' )[0]; ?>" alt="">
                        </div>
                        <div class="section27__item-about-wrapper">
                            <div class="section27__item-discr"><?= $item->post_title?></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section28">
        <div class="container">
            <div class="section28-row">
                <h2 class="section28-title"><?= $block4['title']; ?></h2>
                <h5 class="section28-suptitle"><?= $block4['subtitle']; ?></h5>
                <!-- Tabs -->
                <div class="tabs section-tabs">
                    <!-- SWIPE BUTTONS FOR TABS-->
                    <div class="section__swipe-buttons">
                        <button class="section-tabs__mobile-trigger-prev section-tabs__mobile-trigger" data-move="prev">
                            <i class="icon-arrow-left-bordered"></i>
                        </button>
                        <button class="section-tabs__mobile-trigger-next section-tabs__mobile-trigger" data-move="next">
                            <i class="icon-arrow-right-bordered"></i>
                        </button>
                    </div>
                    <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
                        <?php foreach ($block4['examples'] as $key => $item ) { ?>
                            <li class="nav-item">
                                <a class="tabs-nav__trigger <?= $key === 0 ? 'active' : ''; ?>" id="pills-task<?= $key + 1; ?>-tab" data-toggle="pill" href="#pills-task<?= $key + 1; ?>" role="tab" aria-controls="pills-task1" aria-selected="true"><?= $item['title']; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="tabs-contents tab-content" id="pills-tabContent">
                        <!-- 1st TAB -->
                        <?php foreach ($block4['examples'] as $key => $item ) { ?>
                            <div  class="tabs-contents__item <?= $key === 0 ? 'show active' : ''; ?>" id="pills-task<?= $key + 1; ?>" role="tabpanel" aria-labelledby="pills-task<?= $key + 1; ?>-tab">
                                <div class="section28-tabs-content">
                                    <div class="section28-tabs-content__left">
                                        <div class="section28-tabs-content__left-hiden-block">
                                            <h3>Ответы</h3>
                                            <div class="page-text-content"><?= $item['answer']; ?></div>
                                        </div>
                                        <div class="section28-tabs-content__img-wrapper">
                                            <img src="<?= $item['image']['sizes']['medium']; ?>" alt="<?= $item['image']['alt']; ?>" class="section28-tabs-img">
                                        </div>
                                    </div>
                                    <div class="section28-tabs-content__right">
                                        <div class="page-text-content"><?= $item['text']; ?></div>
                                        <div class="section28-tabs-content__right-actions">
                                            <button
                                                    data-toggle="modal"
                                                    data-target="#answerQuestionModal-<?= $key + 1; ?>"
                                                    type="button"
                                                    class="button-fill button-fill--green block-info__button section28-button section28-button_mobile">
                                                <?= $block4['btn_title_show']; ?>
                                            </button>
                                            <button
                                                    class="button-fill button-fill--green block-info__button section28-button section28-button_desctop"
                                                    type="button"
                                                    data-isactive="false"
                                                    data-activetitle="<?= $block4['btn_title_hide']; ?>"
                                                    data-deactivetitle="<?= $block4['btn_title_show']; ?>"
                                            ><?= $block4['btn_title_show']; ?></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade answer-question" id="answerQuestionModal-<?= $key + 1; ?>" tabindex="-1" role="dialog" aria-labelledby="answerQuestionModal-<?= $key + 1; ?>Title" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close answer-question-button button-close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="page-text-content">
                                                    <h3>Ответ:</h3>
                                                    <div><?= $item['answer']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section8 triz-accordions">
        <div class="container">
            <div class="section8-wrapper">
                <div class="section-questions-accordion">
                    <i class="icon-daub-questions"></i>
                    <i class="icon-letters-questions"></i>
                    <i class="icon-mobile-phone"></i>
                    <i class="icon-tune-questions icon-tune-questions_1"></i>
                    <i class="icon-tune-questions icon-tune-questions_2"></i>
                    <i class="icon-ruler"></i>
                    <i class="icon-notebook-questions"></i>
                    <i class="icon-scattered icon-scattered_1"></i>
                    <i class="icon-scattered icon-scattered_2"></i>
                    <i class="icon-magnifier"></i>
                </div>
                <h2 class="section8-title"><?= $block5['title']; ?></h2>
                <div class="section-accordion accordion">
                    <?php
                    $questions_count = count($block5['faq']);
                    foreach ($block5['faq'] as $key => $item) {

                        if ($key === 5) echo '<div class="hiden-accordion-items hiden-items hide">';
                        ?>
                        <div class="accordion-item">
                            <div class="accordion-item__header">
                                <span><?= $item->post_title; ?></span>
                            </div>
                            <div class="accordion-item__body">
                                <div class="accordion-item__body-content"><?= $item->post_content; ?></div>
                            </div>
                        </div>
                        <?php
                        if ($key > 5 && $key + 1 === $questions_count) echo '</div>';
                    }
                    ?>
                </div>
                <?php if ($questions_count > 5): ?>
                    <div class="section8-bottom">
                        <button type="button" class="section8-bottom__btn-toggle show-more-btn">Показать ещё вопросы</button>
                    </div>
                <?php endif; ?>
            </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>