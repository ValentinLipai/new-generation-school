<?php
/**
 * Template Name: О нас говорят
 * Template Post Type: post, page, courses
 */

get_header(); ?>

<?php
    $feeds_fields = get_field('feeds');
    $buttons = $feeds_fields['btn_titles'];

    $parents = $feeds_fields['parents'];
    $childrens = $feeds_fields['childrens'];
    $graduation = $feeds_fields['graduation'];
    $meeting = $feeds_fields['meeting'];
    $side_sites = $feeds_fields['side_sites'];
    $leave_feedback = $feeds_fields['leave_feedback'];
?>

    <section class="section32">
        <div class="container">
            <div class="section32-wrapper">
                <div class="section32-title-wrapper">
                    <h2 class="section32-title"><?= $feeds_fields['title']; ?></h2>
                    <i class="icon-daub-section7"></i>
                </div>
                <div class="section32-mobile-actions">
                    <button class="button-fill make-feedback-btn"><?= $buttons['btn_6']; ?></button>
                </div>
                <div class="section32-tabs-wrapper section-tabs">
                    <div class="section__swipe-buttons">
                        <button class="section-tabs__mobile-trigger-prev section-tabs__mobile-trigger" data-move="prev">
                            <i class="icon-arrow-left-bordered"></i>
                        </button>
                        <button class="section-tabs__mobile-trigger-next section-tabs__mobile-trigger" data-move="next">
                            <i class="icon-arrow-right-bordered"></i>
                        </button>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills flex-column" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="tabs-nav__trigger active" id="pills-parents-tab" data-toggle="pill" href="#pills-parents" role="tab" aria-controls="pills-parents" aria-selected="true"><?= $buttons['btn_1']; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="tabs-nav__trigger" id="pills-childrens-tab" data-toggle="pill" href="#pills-childrens" role="tab" aria-controls="pills-childrens" aria-selected="false"><?= $buttons['btn_2']; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="tabs-nav__trigger" id="pills-graduation-tab" data-toggle="pill" href="#pills-graduation" role="tab" aria-controls="pills-graduation" aria-selected="false"><?= $buttons['btn_3']; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="tabs-nav__trigger" id="pills-meeting-tab" data-toggle="pill" href="#pills-meeting" role="tab" aria-controls="pills-meeting" aria-selected="false"><?= $buttons['btn_4']; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="tabs-nav__trigger" id="pills-other-feedbacks-tab" data-toggle="pill" href="#pills-other-feedbacks" role="tab" aria-controls="pills-other-feedbacks" aria-selected="false"><?= $buttons['btn_5']; ?></a>
                        </li>
                        <li class="nav-item nav-item-make-feedback">
                            <a class="tabs-nav__trigger make-feedback-tab" id="pills-make-feedback-tab" data-toggle="pill" href="#pills-make-feedback" role="tab" aria-controls="pills-make-feedback" aria-selected="false"><?= $buttons['btn_6']; ?></a>
                        </li>
                    </ul>
                    <!-- Nav content -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-parents" role="tabpanel" aria-labelledby="pills-parents-tab">
                            <div class="section32-tab-content-row">
                                <?php foreach ($parents['videos'] as $key => $item) { ?>
                                <div class="section32__item section32__item-<?= $key + 1; ?>">
                                    <div class="section32-video">
                                        <img class="section32-video__poster" src="<?= $item['image']['sizes']['medium']; ?>" alt="<?= $item['image']['alt']; ?>">
                                        <a class="red-button section32-button"  href="https://youtu.be/<?= $item['video_id']; ?>" target="_blank" data-fancybox="video-discription">
                                            <i class="icon-triangle-play"></i>
                                        </a>
                                    </div>
                                    <div class="section32__item-discr">
                                        <span><?= $item['description']; ?></span>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-childrens" role="tabpanel" aria-labelledby="pills-childrens-tab">
                            <div class="section32-tab-content-row">
                                <?php foreach ($childrens['videos'] as $key => $item) { ?>
                                    <div class="section32__item section32__item-<?= $key + 1; ?>">
                                        <div class="section32-video">
                                            <img class="section32-video__poster" src="<?= $item['image']['sizes']['medium']; ?>" alt="<?= $item['image']['alt']; ?>">
                                            <a class="red-button section32-button"  href="https://youtu.be/<?= $item['video_id']; ?>" target="_blank" data-fancybox="video-discription">
                                                <i class="icon-triangle-play"></i>
                                            </a>
                                        </div>
                                        <div class="section32__item-discr">
                                            <span><?= $item['description']; ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-graduation" role="tabpanel" aria-labelledby="pills-graduation-tab">
                            <div class="section32-tab-content-row">
                                <?php foreach ($graduation['videos'] as $key => $item) { ?>
                                    <div class="section32__item section32__item-<?= $key + 1; ?>">
                                        <div class="section32-video">
                                            <img class="section32-video__poster" src="<?= $item['image']['sizes']['medium']; ?>" alt="<?= $item['image']['alt']; ?>">
                                            <a class="red-button section32-button"  href="https://youtu.be/<?= $item['video_id']; ?>" target="_blank" data-fancybox="video-discription">
                                                <i class="icon-triangle-play"></i>
                                            </a>
                                        </div>
                                        <div class="section32__item-discr">
                                            <span><?= $item['description']; ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-meeting" role="tabpanel" aria-labelledby="pills-meeting-tab">
                            <div class="section32-tab-content-row">
                                <?php foreach ($meeting['videos'] as $key => $item) { ?>
                                    <div class="section32__item section32__item-<?= $key + 1; ?>">
                                        <div class="section32-video">
                                            <img class="section32-video__poster" src="<?= $item['image']['sizes']['medium']; ?>" alt="<?= $item['image']['alt']; ?>">
                                            <a class="red-button section32-button"  href="https://youtu.be/<?= $item['video_id']; ?>" target="_blank" data-fancybox="video-discription">
                                                <i class="icon-triangle-play"></i>
                                            </a>
                                        </div>
                                        <div class="section32__item-discr">
                                            <span><?= $item['description']; ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane tab-pane-other-feedbacks fade" id="pills-other-feedbacks" role="tabpanel" aria-labelledby="pills-other-feedbacks-tab">
                            <div class="section32-tab-content-row section32-other-feedbacks grid">
                                <?php foreach ($side_sites['feedbacks'] as $key => $item) { ?>
                                    <div class="section32__item section32__item-<?= $key + 1; ?> grid-item">
                                        <div class="section32__item-discr">
                                            <div class="section32__item-discr-text">
                                                <strong><?= $item['name']; ?> </strong>
                                                <?= $item['text']; ?>
                                            </div>
                                            <a href="<?= $item['link']; ?>" target="_blank" class="section32__item-discr-link">
                                                <span><?= $item['site_name']; ?></span>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane make-feedback-content fade" id="pills-make-feedback" role="tabpanel" aria-labelledby="pills-make-feedback-tab">
                            <div class="section32-tab-content-row">
                                <div class="section32-feedback-discr"><?= $leave_feedback['text_before']; ?></div>
                                <?php foreach ($leave_feedback['instructions'] as $key => $item) { ?>
                                    <div class="section32__item section32__item-<?= $key + 1; ?>">
                                        <div class="section32__item-hidden-block">
                                            <button class="button-fill button-fill--green section32-hidden-btn" type="button" data-toggle="modal" data-target="#howToMakeFeedbackModal<?= $key; ?>">
                                                <span class="desctop"> Оставить отзыв</span>
                                                <span class="mobile"> Оставить отзыв на <?= $item['name']; ?></span>
                                            </button>
                                        </div>
                                        <div class="section32-video">
                                            <img class="section32-video__poster" src="<?= $item['logo']['sizes']['medium']; ?>" alt="<?= $item['logo']['alt']; ?>">
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php foreach ($leave_feedback['instructions'] as $key => $item) { ?>
                                <div class="modal fade how-to-make-feedback__modal " id="howToMakeFeedbackModal<?= $key; ?>" tabindex="-1" role="dialog" aria-labelledby="howToMakeFeedbackModal<?= $key; ?>Title" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="swiper-container how-to-make-feedback__modal-swiper mySwiper">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="slide-img-wrapper">
                                                                <img src="<?= $item['step_1']['image']['sizes']['large']; ?>" alt="<?= $item['step_1']['image']['alt'] ?>">
                                                            </div>
                                                            <div class="slide-discr">
                                                                <h3 class="slide-title">Как оставить отзыв на сайте <?= $item['name']; ?></h3>
                                                                <div class="slide-text">
                                                                    <strong>1-й шаг:</strong>
                                                                    <?= $item['step_1']['text']; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="slide-img-wrapper">
                                                                <img src="<?= $item['step_2']['image']['sizes']['large']; ?>" alt="<?= $item['step_2']['image']['alt'] ?>">
                                                            </div>
                                                            <div class="slide-discr">
                                                                <h3 class="slide-title">Как оставить отзыв на сайте <?= $item['name']; ?></h3>
                                                                <div class="slide-text">
                                                                    <strong>2-й шаг:</strong>
                                                                    <?= $item['step_2']['text']; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="slide-img-wrapper">
                                                                <img src="<?= $item['step_3']['image']['sizes']['large']; ?>" alt="<?= $item['step_3']['image']['alt'] ?>">
                                                            </div>
                                                            <div class="slide-discr">
                                                                <h3 class="slide-title">Как оставить отзыв на сайте <?= $item['name']; ?></h3>
                                                                <div class="slide-text">
                                                                    <strong>3-й шаг:</strong>
                                                                    <?= $item['step_3']['text']; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-pagination"></div>
                                                    <div class="swiper-button-wrapper">
                                                        <div class="swiper-button-prev">
                                                            <button class="button-bordered block-info__button_about feedback-button feedback-button-prev">Назад</button>
                                                        </div>
                                                        <div class="swiper-button-next">
                                                            <button
                                                                    class="button-fill button-fill--green block-info__button feedback-button feedback-button-next"
                                                                    type="button"
                                                                    data-isactive="false"
                                                                    data-activetitle="Оставить отзыв"
                                                                    data-deactivetitle="Понятно, дальшe"
                                                            >
                                                                Понятно, дальше
                                                            </button>
                                                        </div>
                                                        <a href="<?= $item['link']; ?>" target="_blank" class="swiper-modal-link button-fill button-fill--green block-info__button feedback-button feedback-button-next">Оставить отзыв</a>
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

<?php get_footer(); ?>