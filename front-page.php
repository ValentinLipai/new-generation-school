<?php get_header(); ?>

<?php
    $fields = get_field('main_page');

    $block1 = $fields['blok_1'];
    $block2 = $fields['blok_2'];
    $block3 = $fields['blok_3'];
    $block4 = $fields['blok_4'];
    $block5 = $fields['blok_5'];
    $block6 = $fields['blok_6'];
    $block7 = $fields['blok_7'];
    $block8 = $fields['blok_8'];
    $block9 = $fields['blok_9'];
?>

<section class="section1">
    <div class="container">
        <div class="section1__wrapper">
            <h1 class="section1__title"><?= $block1['title']; ?></h1>
            <div class="section1-row">
                <div class="section1-left">
                    <div class="section1__text-area">
                        <div class="check-ic-text">
                            <div class="check-ic-text__icon">
                                    <span class="icon-checkMark1">
                                        <i class="path1"></i>
                                        <i class="path2"></i>
                                    </span>
                            </div>
                            <div class="check-ic-text__content">
                                <span><?= $block1['text_1']; ?></span>
                            </div>
                        </div>
                        <div class="check-ic-text">
                            <div class="check-ic-text__icon">
                                    <span class="icon-checkMark2">
                                        <i class="path1"></i>
                                        <i class="path2"></i>
                                    </span>
                            </div>
                            <div class="check-ic-text__content">
                                <span><?= $block1['text_2']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="section1-bottom">
                        <a class="button-fill button-fill--green button_section1" href="https://youtu.be/<?= $block1['video']; ?>"
                           target="_blank" data-fancybox="more-details">
                            <span><?= $block1['btn_text']; ?></span>
                            <i class="icon-triangle-play"></i>
                        </a>
                    </div>
                </div>
                <div class="section1-right">
                    <div class="img-block">
                        <img src="<?= $block1['side_image']['sizes']['medium_large']; ?>" alt="<?= $block1['side_image']['alt']; ?>" class="section1-img">
                        <i class="icon-section1-paint"></i>
                        <i class="icon-section1-globus"></i>
                        <i class="icon-section1-circleMiddle"></i>
                        <i class="icon-section1-circleBig"></i>
                        <i class="icon-section1-circleSmall"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section2">
    <div class="container">
        <div class="section2-row">
            <h2 class="section2-title"><?= $block2['title']; ?></h2>
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
                    <?php foreach ($block2['galeries'] as $key => $item) { ?>
                        <li class="nav-item">
                            <a class="tabs-nav__trigger <?php echo $key === 0 ? 'active' : ''; ?>" id="pills-block2_elem-<?= $key; ?>-tab" data-toggle="pill"
                               href="#pills-block2_elem-<?= $key; ?>" role="tab" aria-controls="pills-block2_elem-<?= $key; ?>" aria-selected="true"><?= $item['title']; ?></a>
                        </li>
                    <?php } ?>
                </ul>

                <div class="tabs-contents tab-content" id="pills-tabContent">
                    <?php foreach ($block2['galeries'] as $key => $item) { ?>
                        <div id="pills-block2_elem-<?= $key; ?>" class="tabs-contents__item <?php echo $key === 0 ? 'active' : ''; ?>" role="tabpanel"
                             aria-labelledby="pills-block2_elem-<?= $key; ?>-tab">
                            <div class="section__swiper-row">
                                <!-- DECORATING IMAGES -->
                                <i class="icon-slider-daub-1"></i>
                                <i class="icon-slider-daub-2"></i>
                                <i class="icon-triple-xxx"></i>
                                <!-- SWIPER PAGITAION -->
                                <div class="swiper-container section-tabs-slider">
                                    <!-- SLIDER WRAPPER -->
                                    <div class="swiper-wrapper">
                                        <?php foreach ($item['images'] as $image) {?>
                                        <div class="swiper-slide">
                                            <a href="<?= $image['url']; ?>" data-fancybox="gallery-block2_elem-<?= $key; ?>" class="section2__img-wrapper">
                                                <img src="<?= $image['sizes']['medium_large']; ?>" alt="<?= $image['alt']; ?>"/>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section3">
    <div class="container">
        <div class="section3__content">
            <h2><?= $block3['title']; ?></h2>
            <i class="icon-sun"></i>
            <div class="section3-items-row">

                <?php foreach ($block3['courses'] as $key => $item) {
                    $course_data = get_field('courses', $item->ID);
                    $course_fields = $course_data['main'];
                    if ($course_fields['not_for_main_page']) continue;
                ?>
                <div class="section3-item section3-item_<?= $key + 1; ?>">
                    <?php
                        switch ($key) {
                            case 1:
                                echo '<i class="icon-wawes"></i>';
                                break;
                            case 2:
                                echo '<i class="icon-dashed"></i>';
                                break;
                        }
                    ?>
                    <div class="section3-item__content">
                        <h5><?= $course_fields['type']; ?></h5>
                        <h3><?= get_the_title($item->ID); ?></h3>
                        <div class="section3-item-image section3-item-image_<?= $key + 1; ?>">
                            <div class="section3-item-image__wrapper">
                                <img class="section3-item-image__image"
                                     src="<?= $course_fields['image']['url']; ?>"
                                     alt="">
                            </div>
                        </div>
                        <p class="section3-item__discr"><?= $course_fields['description']; ?></p>
                        <div class="section3-item__info">
                            <div class="section3-item-params">
                                <?php foreach ($course_fields['params'] as $param) {?>
                                    <div class="section3-item-params-item">
                                        <div class="section3-item-params-item__title"><?= $param['value']; ?></div>
                                        <div class="section3-item-params-item__text"><?= $param['description']; ?></div>
                                    </div>
                                <?php } ?>
                                <div class="section3-item-params-item section3-item-params-item_center">
                                    <div class="section3-item-params-item__text">
                                        <a href="<?= the_permalink($item->ID); ?>/#schedule" class="timetable">
                                            <i class="icon-calendar"></i>
                                            <?= $course_fields['schedule_link_title']; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info__buttons">
                                <button class="button-fill button-fill--green block-info__button" type="button"
                                        data-toggle="modal" data-target="#modalCurseForm<?= $key; ?>">
                                    <?= $course_fields['form_btn_title']; ?>
                                </button>
                                <a href="<?= the_permalink($item->ID); ?>" class="button-bordered block-info__button_about"><?= $course_fields['course_link_title']; ?></a>
                            </div>
                        </div>
                    </div>

                    <!-- - Почемучки (4-5 лет) гр. №1 -->
                    <div class="modal fade modal-consultation" id="modalCurseForm<?= $key; ?>" tabindex="-1" role="dialog" aria-labelledby="modalCurseForm<?= $key; ?>Title" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-body">
                                    <div class="modal-consultation__wrapper">
                                        <h3 class="modal-title"><?= $course_fields['form_title']; ?></h3>
                                        <p><?= $course_fields['form_subtitle']; ?></p>
                                        <div class="modal-form">
                                            <?= do_shortcode($course_fields['form']); ?>
                                        </div>
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
</section>
<section class="section4">
    <div class="container">
        <div class="section4-wrapper">
            <h2><?= $block4['title']; ?></h2>
            <div class="section4-row">
                <?php foreach ($block4['courses'] as $key =>  $item) { ?>
                    <div class="section4-item section4-item_<?= $key + 1; ?>">
                        <span><?= get_the_title($item->ID) ?></span>
                        <a href="<?= the_permalink($item->ID); ?>">Подробнее</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="section5">
    <div class="container">
        <h2 class="section5-title"><?= $block5['title']; ?></h2>
        <div class="section5-suptitle-wrapper">
            <i class="icon-blot"></i>
            <h5 class="section5-suptitle"><?= $block5['subtitle']; ?></h5>
        </div>
        <div class="section5-wrapper">
            <div class="section5-row">
                <?php foreach ($block5['teachers'] as $key => $item) {
                    $teacher_data = get_field('teachers', $item->ID);
                ?>
                    <div class="section5__item section5__item_<?= $teacher_data['icon_type']; ?>">
                        <div class="section5__img-wrapper">
                            <img src="<?= $teacher_data['image']['sizes']['medium']; ?>" alt="<?= $teacher_data['fio']; ?>" class="section5-img">
                            <?php
                                switch ($teacher_data['icon_type']) {
                                    case '1':
                                        echo '<i class="icon-wawes"></i>';
                                        break;
                                    case '2':
                                        echo '<i class="icon-roundels"></i>';
                                        break;
                                    case '3':
                                        echo '<i class="icon-dashed-rainbow"></i>';
                                        break;
                                    case '4':
                                        echo '<i class="icon-double-empty-circles"></i>';
                                        echo '<i class="icon-item_4-fill-circle"></i>';
                                        break;
                                    case '5':
                                        echo '<i class="icon-item_5-fill-circle icon-item_5-fill-circle_1"></i>';
                                        echo '<i class="icon-item_5-fill-circle icon-item_5-fill-circle_2"></i>';
                                        break;
                                }
                            ?>
                        </div>
                        <div class="section5__item-info">
                            <h3 class="item-info__name"><?= $teacher_data['fio']; ?></h3>
                            <h5 class="item-info__discr"><?= $teacher_data['specialization']; ?></h5>
                            <div class="section5__links-info">
                                <button class="section5-info__link-about" type="button" data-toggle="modal"
                                   data-target="#teacherDescription-<?= $key + 1; ?>">
                                    <i class="icon-ellipsis"></i>
                                    <span>
                                        Об учителе
                                    </span>
                                </button>
                                <button class="section5-info__link-certificate" type="button" data-toggle="modal"
                                   data-target="#teacherCertificatesModal-<?= $key + 1; ?>">
                                    <i class="icon-certificate"></i>
                                    <span>
                                        Сертификаты
                                    </span>
                                </button>
                            </div>
                        </div>

                        <!-- Modal Description Text -->
                        <div class="modal fade about-teacher__modal" id="teacherDescription-<?= $key + 1; ?>" tabindex="-1" role="dialog" aria-labelledby="teacherDescriptionTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close about-teacher__modal-button button-close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="page-text-content section6__item-1">
                                            <?php if ($teacher_data['has_about_video']) { ?>
                                                <div class="section6-video">
                                                    <img class="section6-video__poster" src="<?= $teacher_data['video_about_placeholder']['sizes']['medium']; ?>" alt="<?= $teacher_data['video_about_placeholder']['alt']; ?>">
                                                    <a class="red-button section6-button"  href="https://youtu.be/<?= $teacher_data['video_about']; ?>" target="_blank" data-fancybox="video-discription">
                                                        <i class="icon-triangle-play"></i>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                            <div>
                                                <?= $teacher_data['about']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Certificates -->
                        <div class="modal fade teacher-certificates__modal" id="teacherCertificatesModal-<?= $key + 1; ?>" tabindex="-1" role="dialog" aria-labelledby="teacherCertificatesModal-<?= $key + 1; ?>-Title" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="swiper-container mySwiper teacher-certificates-slider">
                                            <div class="swiper-wrapper">
                                                <?php foreach ($teacher_data['certificates'] as $certificate) { ?>
                                                    <div class="swiper-slide">
                                                        <img src="<?= $certificate['sizes']['medium_large']; ?>" alt="<?= $certificate['alt']; ?>">
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                            <div class="swiper-button-wrapper">
                                                <div class="swiper-button-prev">
                                                    <i class="icon-arrow-left-bordered"></i>
                                                </div>
                                                <div class="swiper-button-next">
                                                    <i class="icon-arrow-right-bordered"></i>
                                                </div>
                                            </div>
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
</section>
<section class="section6">
    <div class="container">
        <div class="section6-wrapper">
            <h2 class="section6-title"><?= $block6['title']; ?></h2>
            <i class="icon-glasses"></i>
            <i class="icon-palette"></i>
            <i class="icon-icon-cicle-fill-sec5"></i>
            <div class="section6-row">
                <?php foreach ($block6['vodes'] as $key => $video) { ?>
                    <div class="section6__item section6__item-<?= $key + 1; ?>">
                        <div class="section6-video">
                            <img class="section6-video__poster"
                                 src="<?= $video['image']['sizes']['medium']; ?>" alt="<?= $video['image']['alt']; ?>">
                            <a class="red-button section6-button" href="https://youtu.be/<?= $video['video_id']; ?>" target="_blank"
                               data-fancybox="video-discription">
                                <i class="icon-triangle-play"></i>
                            </a>
                        </div>
                        <div class="section6__item-discr">
                            <span><?= $video['description']; ?></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="section7">
    <div class="container">
        <div class="section7-wrapper">
            <i class="icon-daub-section7"></i>
            <i class="icon-sun"></i>
            <h2 class="section7-title"><?= $block7['title']; ?></h2>
            <div class="section7-row">
                <?php foreach ($block7['elements'] as $key => $item) { ?>
                    <div class="section7-item section7-item-<?= $key + 1; ?>">
                        <div class="section7-item__discr">
                            <h3><?= $item['title']; ?></h3>
                            <p><?= $item['text']; ?></p>
                        </div>
                        <i class="icon-cicle-fill-<?= $key + 1; ?>"></i>
                        <?php
                        switch ($key % 6) {
                            case 0:
                                echo '<i class="icon-cicle-empty-1"></i>';
                                echo '<i class="icon-childrens"></i>';
                                break;
                            case 1:
                                echo '<i class="icon-cicle-empty-2"></i>';
                                echo '<i class="icon-backpack"></i>';
                                break;
                            case 2:
                                echo '<i class="icon-cicle-empty-3"></i>';
                                echo '<i class="icon-rocet"></i>';
                                break;
                            case 3:
                                echo '<i class="icon-cicle-empty-2"></i>';
                                echo '<i class="icon-hat"></i>';
                                break;
                            case 4:
                                echo '<i class="icon-cicle-empty-3"></i>';
                                echo '<i class="icon-paper-boat"></i>';
                                break;
                            case 5:
                                echo '<i class="icon-cicle-empty-2"></i>';
                                echo '<i class="icon-magnifier"></i>';
                                break;
                        }
                        ?>
                        <span class="item__number item__number-<?= $key + 1; ?>"><?= $key + 1; ?></span>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="section8">
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
            <h2 class="section8-title"><?= $block8['title']; ?></h2>
            <div class="section8-accordion accordion">
                <?php
                    $questions_count = count($block8['faq']);
                    foreach ($block8['faq'] as $key => $item) {

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
</section>
<section class="section9">
    <div class="container">
        <div class="section9-wrapper">
            <div class="section9-header">
                <h2><?= $block9['title']; ?></h2>
                <a href="#" class="button-fill button-fill--sm header-button section9-button"><?= $block9['btn_title']; ?></a>
            </div>
            <div class="section9-row">
                <?php

                    $args = array(
                        'post__not_in' => $block9['exclude'],
                        'post_type' => 'post',
                        'order' => 'DESC',
                        'orderby' => 'date',
                        'posts_per_page' => 3
                    );

                    $block9_wp_query = new WP_Query($args);
                ?>
                <?php while ($block9_wp_query->have_posts()): $block9_wp_query->the_post(); ?>
                    <div class="section9__item">
                        <div class="section9__item-img-wrapper">
                            <a href="<?= the_permalink(); ?>">
                                <?= the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="section9__item-about-wrapper">
                            <a href="<?= the_permalink(); ?>" class="section9__item-link">
                                <span class="section9__item-discr"><?= the_title(); ?></span>
                            </a>
                        </div>
                        <div class="section9__item-count">
                            <div class="section9__item-show-counter">
                                <i class="icon-eye"></i>
                                <p><?= gt_get_post_view(); ?></p>
                            </div>
                            <div class="section9__item-show-counter-start"><?= new_generation_posted_on(); ?></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <!-- section9__mobile mobile button -->
            <div class="section9__mobile">
                <button class="button-fill button-fill--sm section9__mobile-button">Все новости</button>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>