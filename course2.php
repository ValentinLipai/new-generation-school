<?php
/**
 * Template Name: Курс 2 (Диз. Логопед)
 * Template Post Type: post, page, courses
 */

get_header(); ?>

<?php
    $course_fields = get_field('logoped');

    $block1 = $course_fields['blok_1'];
    $block2 = $course_fields['blok_2'];
    $block3 = $course_fields['blok_3'];
    $block4 = $course_fields['blok_4'];
    $block5 = $course_fields['blok_5'];
    $block6 = $course_fields['blok_6'];
    $block7 = $course_fields['blok_7'];
?>
    <!-- Start page content -->
    <section class="section18">
        <div class="container">
            <div class="section18-row">
                <h5 class="section18-suptitle"><?= $block1['type']; ?></h5>
                <h2 class="section18-title"><?= the_title(); ?></h2>
                <i class="icon-daub-section7"></i>
                <i class="icon-book"></i>
                <div class="section18-wrapper">
                    <div class="section18__img-wrapper">
                        <img class="section18__img" src="<?= $block1['image']['sizes']['large']; ?>" alt="<?= the_title(); ?>">
                    </div>
                    <div class="section18-actions">
                        <button class="button-fill button-fill--green block-info__button section18-button" type="button" data-toggle="modal" data-target="#courseBlock1Form">Записаться</button>
                    </div>
                    <div class="section18__info-row">
                        <?php foreach ($block1['params'] as $key => $item) { ?>
                        <div class="section18__info-item">
                            <h3 class="section18__info-item-number"><?=  $item['value']; ?></h3>
                            <div class="section18__info-item-discr section18__info-item-discr_<?= $key + 1; ?>"><?=  $item['description']; ?></div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- - Потомучки" (5-6 лет) гр. №3 -->
        <div class="modal fade modal-consultation" id="courseBlock1Form" tabindex="-1" role="dialog" aria-labelledby="courseBlock1FormTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="modal-consultation__wrapper">
                            <h3 class="modal-title" id="courseBlock1FormTitle"><?= $block1['form_title']; ?></h3>
                            <p><?= $block1['form_subtitle']; ?></p>
                            <div class="modal-form">
                                <?= do_shortcode($block1['form']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section11">
        <div class="container">
            <div class="section11-title-wrapper">
                <h2 class="section11-title"><?= $block2['title']; ?></h2>
                <i class="icon-sun"></i>
            </div>
            <?php
                if (count($block2['teachers']) > 1): // Если преподавателей несколько, делаем табы
            ?>
                <div class="tabs section-tabs section11-tabs">
                <div class="section__swipe-buttons">
                    <button class="section-tabs__mobile-trigger-prev section-tabs__mobile-trigger" data-move="prev">
                        <i class="icon-arrow-left-bordered"></i>
                    </button>
                    <button class="section-tabs__mobile-trigger-next section-tabs__mobile-trigger" data-move="next">
                        <i class="icon-arrow-right-bordered"></i>
                    </button>
                </div>
                <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
                    <?php foreach ( $block2['teachers'] as $key => $item ) { ?>
                    <li class="nav-item">
                        <a class="tabs-nav__trigger <?= $key === 0 ? 'active' : ''; ?>" id="pills-teacher<?= $key + 1; ?>-tab" data-toggle="pill" href="#pills-teacher<?= $key + 1; ?>" role="tab" aria-controls="pills-teacher<?= $key + 1; ?>" aria-selected="true"><?= $item->post_title; ?></a>
                    </li>
                    <?php } ?>
                </ul>
                <div class="tabs-contents tab-content" id="pills-tabContent">
                    <?php foreach ( $block2['teachers'] as $key => $item ) {
                        $teacher_data = get_field('teachers', $item->ID);
                    ?>
                        <div class="tabs-contents__item <?= $key === 0 ? 'show active' : ''; ?>" id="pills-teacher<?= $key + 1; ?>" role="tabpanel" aria-labelledby="pills-teacher<?= $key + 1; ?>-tab">
                            <div class="section11-tabs-content">
                                <div class="section11-tabs-content__left">
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
                                            <h3 class="item-info__name"><?= $item->post_title; ?></h3>
                                            <h5 class="item-info__discr"><?= $teacher_data['specialization']; ?></h5>
                                            <button class="section5-info__link-certificate" type="button" data-toggle="modal"
                                                    data-target="#teacherCertificatesModal-<?= $key + 1; ?>">
                                                <i class="icon-certificate"></i>
                                                <span>Показать сертификаты</span>
                                            </button>
                                        </div>
                                        <button class="button-fill button-fill--green block-info__button section11-button" type="button" data-toggle="modal" data-target="#scheduleModalFormSimple"><?= $block6['btn_title']; ?></button>
                                    </div>
                                </div>
                                <div class="section11-tabs-content__right">
                                    <div class="page-text-content content_block section6__item section6__item-1">
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
                                    <a class="content_toggle">Показать все описание</a>
                                    <button class="button-fill button-fill--green block-info__button section11-button" type="button" data-toggle="modal" data-target="#scheduleModalFormSimple"><?= $block6['btn_title']; ?></button>
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
            <?php else: // Если преподаватель один, то выводим без табов ?>
                <?php
                    $single_teacher = $block2['teachers'][0];
                    $teacher_data = get_field('teachers', $single_teacher->ID);
                ?>
                <div class="section19-content">
                    <div class="section19-content__left">
                        <div class="section5__item section5__item_3">
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
                                    <a href="" class="section5-info__link-certificate" type="button" data-toggle="modal" data-target="#teacherCertificatesModal-Single">
                                        <i class="icon-certificate"></i>
                                        <span>Показать сертификаты</span>
                                    </a>
                                </div>
                            </div>
                            <button class="button-fill button-fill--green block-info__button section19-button" type="button" data-toggle="modal" data-target="#courseBlock1Form">Записаться</button>
                        </div>
                    </div>
                    <div class="section19-content__right">
                        <div class="page-text-content">
                            <div class="section6__item section6__item-1">
                                <?php if ($teacher_data['has_about_video']) { ?>
                                <div class="section6-video">
                                    <img class="section6-video__poster" src="<?= $teacher_data['video_about_placeholder']['sizes']['medium']; ?>" alt="<?= $teacher_data['video_about_placeholder']['alt']; ?>">
                                    <a class="red-button section6-button"  href="https://youtu.be/<?= $teacher_data['video_about']; ?>" target="_blank" data-fancybox="video-discription">
                                        <i class="icon-triangle-play"></i>
                                    </a>
                                </div>
                                <?php } ?>
                                <div class="section6__item-discr"><?= $teacher_data['about']; ?></div>
                            </div>
                        </div>
                        <button class="button-fill button-fill--green block-info__button section19-button" type="button" data-toggle="modal" data-target="#teacherCertificatesModal-Single">Записаться</button>
                    </div>

                    <!-- Modal Certificates -->
                    <div class="modal fade teacher-certificates__modal" id="teacherCertificatesModal-Single" tabindex="-1" role="dialog" aria-labelledby="teacherCertificatesModal-Single-Title" aria-hidden="true">
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
            <?php endif; ?>
        </div>
    </section>
    <section class="section12 section20">
        <div class="container">
            <h2 class="section12-title"><?= $block3['title']; ?></h2>
            <div class="section20-content">
                <?php foreach ($block3['elements'] as $key => $item) { ?>
                <div class="section12-content__item">
                    <div class="section12-content__number section12-content__number_1">
                        <i class="icon-cicle-empty-2"></i>
                        <span><?= $key + 1; ?></span>
                    </div>
                    <div class="section12-content__text">
                        <?= $item['text']; ?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="section20-info">
                <div class="section20-info__icons-wrapper">
                    <i class="icon-childrens"></i>
                    <i class="icon-cicle-fill-1"></i>
                </div>
                <span><?= $block3['text_bottom']; ?></span>
            </div>
        </div>
    </section>
    <section class="section21">
        <div class="container">
            <div class="section21-title-wraper">
                <h2 class="section21-title"><?= $block4['title']; ?></h2>
                <i class="icon-section13-daub"></i>
            </div>
            <div class="section21-row">
                <i class="icon-dashed"></i>
                <?php foreach ($block4['elements'] as $key => $item) { ?>
                <div class="section21-item section21-item_<?= $key + 1; ?>">
                    <div class="section21-item__content">
                        <h3 class="section21-item__discr-title"><?= $item['title']; ?></h3>
                        <div class="section21-item-image section21-item-image_1">
                            <div class="section21-item-image__wrapper .section21-item-image__wrapper_1">
                                <img class="section21-item-image__image" src="<?= $item['image']['sizes']['large']; ?>" alt="<?= $item['image']['alt']; ?>">
                            </div>
                        </div>
                        <div class="section21-item__discr">
                            <?php
                                $pointsCount = count($item['points']);
                                $pointsHalf = ceil($pointsCount / 2);
                                foreach ($item['points'] as $key => $point) {
                                    if ($pointsHalf >= 3) {
                                        switch ($key + 1) {
                                            case 1:
                                                echo '<div class="section21-item__discr-row">';
                                                echo '<div class="section21-item__discr-left-colum">';
                                                break;
                                        }
                                    }

                                ?>
                                <div class="section21-item__discr-point">
                                    <i class="icon-<?= $point['type']; ?>"></i>
                                    <span><?= $point['text']; ?></span>
                                </div>
                            <?php
                                if ($pointsHalf >= 3) {
                                    switch ($key + 1) {
                                        case $pointsHalf:
                                            echo '</div>';
                                            echo '<div class="section21-item__discr-left-colum">';
                                            break;
                                        case ($key + 1) === $pointsCount:
                                            echo '</div>';
                                            echo '</div>';
                                    }
                                }
                            } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="section22">
        <div class="container">
            <div class="section22-wrapper">
                <h2 class="section22-title"><?= $block5['title']; ?></h2>
                <div class="section22-row">
                    <?php foreach ($block5['feeds'] as $key => $feed) { ?>
                        <div class="section22__item section22__item-1">
                            <div class="section22-video">
                                <img class="section22-video__poster" src="<?= $feed['video_image']['sizes']['medium']; ?>" alt="<?= $feed['video_image']['alt']; ?>">
                                <a class="red-button section22-button"  href="https://youtu.be/<?= $feed['video']; ?>" target="_blank" data-fancybox="video-section22-discription">
                                    <i class="icon-triangle-play"></i>
                                </a>
                            </div>
                            <div class="section22__item-discr">
                                <span><?= $feed['text']; ?></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section23" id="schedule">
        <div class="container">
            <h2 class="section23-title"><?= $block6['title']; ?></h2>
            <div class="section23-timetable__wrapper timetable__wrapper timetable__wrapper-simple">
                <div class="section23-row">
                    <div class="tabs section-tabs__slider section23-tabs">
                        <!-- SWIPE BUTTONS FOR TABS-->
                        <div class="section23-tabs-buttons-wrapper">
                            <div class="section__swipe-buttons">
                                <button class="section-tabs__mobile-trigger-prev section-tabs__mobile-trigger" data-move="prev">
                                    <i class="icon-arrow-left-bordered"></i>
                                </button>
                                <button class="section-tabs__mobile-trigger-next section-tabs__mobile-trigger" data-move="next">
                                    <i class="icon-arrow-right-bordered"></i>
                                </button>
                            </div>
                            <ul class="nav nav-tabs section23-nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item nav-item-active">
                                    <a class="nav-link tabs-nav__trigger active" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday" aria-selected="true">
                                        <span>Понедельник</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tabs-nav__trigger" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday" aria-selected="false">
                                        <span>Вторник</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tabs-nav__trigger" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday" aria-selected="false">
                                        <span>Среда</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tabs-nav__trigger" id="thursday-tab" data-toggle="tab" href="#thursday" role="tab" aria-controls="thursday" aria-selected="false">
                                        <span>Четверг</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tabs-nav__trigger" id="friday-tab" data-toggle="tab" href="#friday" role="tab" aria-controls="friday" aria-selected="false">
                                        <span>Пятница</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tabs-nav__trigger" id="saturday-tab" data-toggle="tab" href="#saturday" role="tab" aria-controls="saturday" aria-selected="false">
                                        <span>Суббота</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content section23-tab-content" id="myTabContent">
                            <!-- 1st TAB -->
                            <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
                                <div class="timetable">
                                    <div class="timetable__header">
                                        <div class="timetable__header-row">
                                            <?php foreach ($block6['schedule']['mo'] as $time) { ?>
                                                <div class="timetable__header-item"><?= $time['time']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="timetable__body">
                                        <div class="timetable__body-row">
                                            <div class="timetable__body-item">
                                                <button class="button-fill button-fill--green block-info__button section11-button" type="button" data-toggle="modal" data-target="#scheduleModalFormSimple"><?= $block6['btn_title']; ?></button>
                                            </div>
                                            <div class="timetable__body-item">
                                                <div><?= $block6['btn_side_text']; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 2 TAB -->
                            <div class="tab-pane fade show" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
                                <div class="timetable">
                                    <div class="timetable__header">
                                        <div class="timetable__header-row">
                                            <?php foreach ($block6['schedule']['tu'] as $time) { ?>
                                                <div class="timetable__header-item"><?= $time['time']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="timetable__body">
                                        <div class="timetable__body-row">
                                            <div class="timetable__body-item">
                                                <button class="button-fill button-fill--green block-info__button section11-button" type="button" data-toggle="modal" data-target="#scheduleModalFormSimple"><?= $block6['btn_title']; ?></button>
                                            </div>
                                            <div class="timetable__body-item">
                                                <div><?= $block6['btn_side_text']; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 3 TAB -->
                            <div class="tab-pane fade show" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
                                <div class="timetable">
                                    <div class="timetable__header">
                                        <div class="timetable__header-row">
                                            <?php foreach ($block6['schedule']['we'] as $time) { ?>
                                                <div class="timetable__header-item"><?= $time['time']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="timetable__body">
                                        <div class="timetable__body-row">
                                            <div class="timetable__body-item">
                                                <button class="button-fill button-fill--green block-info__button section11-button" type="button" data-toggle="modal" data-target="#scheduleModalFormSimple"><?= $block6['btn_title']; ?></button>
                                            </div>
                                            <div class="timetable__body-item">
                                                <div><?= $block6['btn_side_text']; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 4 TAB -->
                            <div class="tab-pane fade show" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
                                <div class="timetable">
                                    <div class="timetable__header">
                                        <div class="timetable__header-row">
                                            <?php foreach ($block6['schedule']['th'] as $time) { ?>
                                                <div class="timetable__header-item"><?= $time['time']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="timetable__body">
                                        <div class="timetable__body-row">
                                            <div class="timetable__body-item">
                                                <button class="button-fill button-fill--green block-info__button section11-button" type="button" data-toggle="modal" data-target="#scheduleModalFormSimple"><?= $block6['btn_title']; ?></button>
                                            </div>
                                            <div class="timetable__body-item">
                                                <div><?= $block6['btn_side_text']; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 5 TAB -->
                            <div class="tab-pane fade show" id="friday" role="tabpanel" aria-labelledby="friday-tab">
                                <div class="timetable">
                                    <div class="timetable__header">
                                        <div class="timetable__header-row">
                                            <?php foreach ($block6['schedule']['fr'] as $time) { ?>
                                                <div class="timetable__header-item"><?= $time['time']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="timetable__body">
                                        <div class="timetable__body-row">
                                            <div class="timetable__body-item">
                                                <button class="button-fill button-fill--green block-info__button section11-button" type="button" data-toggle="modal" data-target="#scheduleModalFormSimple"><?= $block6['btn_title']; ?></button>
                                            </div>
                                            <div class="timetable__body-item">
                                                <div><?= $block6['btn_side_text']; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 6 TAB -->
                            <div class="tab-pane fade show" id="saturday" role="tabpanel" aria-labelledby="saturday-tab">
                                <div class="timetable">
                                    <div class="timetable__header">
                                        <div class="timetable__header-row">
                                            <?php foreach ($block6['schedule']['sat'] as $time) { ?>
                                                <div class="timetable__header-item"><?= $time['time']; ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="timetable__body">
                                        <div class="timetable__body-row">
                                            <div class="timetable__body-item">
                                                <button class="button-fill button-fill--green block-info__button section11-button" type="button" data-toggle="modal" data-target="#scheduleModalFormSimple"><?= $block6['btn_title']; ?></button>
                                            </div>
                                            <div class="timetable__body-item">
                                                <div><?= $block6['btn_side_text']; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modal-consultation" id="scheduleModalFormSimple" tabindex="-1" role="dialog" aria-labelledby="scheduleModalFormSimpleTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="modal-consultation__wrapper">
                            <h3 class="modal-title" id="scheduleModalFormSimpleTitle"><?= $block6['form_title']; ?></h3>
                            <p><?= $block6['form_subtitle']; ?></p>
                            <div class="modal-form">
                                <?= do_shortcode($block6['form']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section17">
        <div class="container">
            <div class="section17-wrapper">
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
                <h2 class="section17-title"><?= $block7['title']; ?></h2>
                <div class="section-accordion accordion">
                    <?php
                    $questions_count = count($block7['faq']);
                    foreach ($block7['faq'] as $key => $item) {

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
    <!-- End page content -->



<?php get_footer(); ?>