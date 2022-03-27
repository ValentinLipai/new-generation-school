<?php
/**
 * Template Name: Курс 1 (Диз. Почемучки)
 * Template Post Type: post, page, courses
 */

get_header(); ?>

<?php
    $course_fields = get_field('pochemuchki');

    $block1 = $course_fields['blok_1'];
    $block2 = $course_fields['blok_2'];
    $block3 = $course_fields['blok_3'];
    $block4 = $course_fields['blok_4'];
    $block5 = $course_fields['blok_5'];
    $block6 = $course_fields['blok_6'];
    $block7 = $course_fields['block_7'];
    $block8 = $course_fields['blok_8'];
?>
    <!-- Start page content -->
    <section class="section10">
        <div class="container">
            <div class="section10-row">
                <h5 class="section10-suptitle"><?= $block1['type']; ?></h5>
                <h2 class="section10-title"><?= the_title(); ?></h2>
                <i class="icon-daub-section7"></i>
                <i class="icon-book"></i>
                <div class="section10-wrapper">
                    <div class="section10__img-wrapper">
                        <img class="section10__img" src="<?= $block1['image']['sizes']['large']; ?>" alt="<?= the_title(); ?>">
                    </div>
                    <div class="section10-actions">
                        <button class="button-fill button-fill--green block-info__button section10-button" type="button" data-toggle="modal" data-target="#courseBlock1Form">Записаться</button>
                    </div>
                    <div class="section10__info-row">
                        <?php foreach ($block1['params'] as $key => $item) { ?>
                            <div class="section10__info-item">
                                <h3 class="section10__info-item-number"><?=  $item['value']; ?></h3>
                                <div class="section10__info-item-discr section10__info-item-discr_<?= $key + 1; ?>"><?=  $item['description']; ?></div>
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
                                            <?php if ($teacher_data['certificates']): ?>
                                            <button class="section5-info__link-certificate" type="button" data-toggle="modal"
                                                    data-target="#teacherCertificatesModal-<?= $key + 1; ?>">
                                                <i class="icon-certificate"></i>
                                                <span>Показать сертификаты</span>
                                            </button>
                                            <?php endif; ?>
                                        </div>
                                        <button class="button-fill button-fill--green block-info__button section11-button" type="button" data-toggle="modal" data-target="#courseBlock1Form">Записаться</button>
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
                                    <button class="button-fill button-fill--green block-info__button section11-button" type="button" data-toggle="modal" data-target="#courseBlock1Form">Записаться</button>
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
    <section class="section12">
        <div class="container">
            <h2 class="section12-title"><?= $block3['title']; ?></h2>
            <div class="section12-content">
                <?php foreach ($block3['elements'] as $key => $item) { ?>
                <div class="section12-content__item">
                    <div class="section12-content__number section12-content__number_1">
                        <i class="icon-cicle-empty-2"></i>
                        <span><?= $key + 1; ?></span>
                    </div>
                    <div class="section12-content__text"><?= $item['text']; ?></div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="section13">
        <div class="container">
            <div class="section13-title-wraper">
                <h2 class="section13-title"><?= $block4['title']; ?></h2>
                <i class="icon-section13-daub"></i>
            </div>
            <div class="section13-row">
                <i class="icon-dashed"></i>
                <?php foreach ($block4['elements'] as $key => $item) { ?>
                <div class="section13-item section13-item_<?= $key + 1; ?>">
                    <div class="section13-item__content">
                        <h3 class="section13-item__discr-title"><?= $item['title']; ?></h3>
                        <div class="section13-item-image section13-item-image_1">
                            <div class="section13-item-image__wrapper .section13-item-image__wrapper_1">
                                <img class="section13-item-image__image" src="<?= $item['image']['sizes']['large']; ?>" alt="<?= $item['image']['alt']; ?>">
                            </div>
                        </div>
                        <div class="section13-item__discr">
                            <?php
                                $pointsCount = count($item['points']);
                                $pointsHalf = ceil($pointsCount / 2);
                                foreach ($item['points'] as $key => $point) {
                                    if ($pointsHalf >= 3) {
                                        switch ($key + 1) {
                                            case 1:
                                                echo '<div class="section13-item__discr-row">';
                                                echo '<div class="section13-item__discr-left-colum">';
                                                break;
                                        }
                                    }

                                ?>
                                <div class="section13-item__discr-point">
                                    <i class="icon-<?= $point['type']; ?>"></i>
                                    <span><?= $point['text']; ?></span>
                                </div>
                            <?php
                                if ($pointsHalf >= 3) {
                                    switch ($key + 1) {
                                        case $pointsHalf:
                                            echo '</div>';
                                            echo '<div class="section13-item__discr-left-colum">';
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
    <section class="section14">
        <div class="container">
            <h2 class="section14-title"><?= $block5['title']; ?></h2>
            <div class="section14-row">
                <!-- Tabs -->
                <div class="tabs section-tabs__slider section14-tabs">
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
                        <?php foreach ($block5['galleries'] as $key => $item) { ?>
                            <li class="nav-item <?php echo $key === 0 ? 'nav-item-active' : ''; ?>">
                                <a class="tabs-nav__trigger <?php echo $key === 0 ? 'active' : ''; ?>"
                                   id="pills-block5_elem-<?= $key; ?>-tab"
                                   data-toggle="pill"
                                   href="#pills-block5_elem-<?= $key; ?>"
                                   role="tab"
                                   aria-controls="pills-block5_elem-<?= $key; ?>"
                                   aria-selected="true"><?= $item['title']; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <!-- Swiper -->
                    <div class="tabs-contents tab-content" id="pills-tabContent">
                        <?php foreach ($block5['galleries'] as $key => $item) { ?>
                            <div id="pills-block5_elem-<?= $key; ?>" class="tabs-contents__item <?php echo $key === 0 ? 'active' : ''; ?>" role="tabpanel"
                                 aria-labelledby="pills-block5_elem-<?= $key; ?>-tab">
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
                                                    <a href="<?= $image['url']; ?>" data-fancybox="gallery-block5_elem-<?= $key; ?>" class="section__img-wrapper">
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
                <div class="section14-info">
                    <span><?= $block5['text_bottom']; ?></span>
                    <i class="icon-childrens"></i>
                    <i class="icon-cicle-fill-1"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="section15">
        <div class="container">
            <h2 class="section15-title"><?= $block6['title']; ?></h2>
            <div class="section15-row">
                <?php foreach ($block6['feeds'] as $key => $feed) { ?>
                    <div class="section15-item">
                        <div class="section15-item__discr"><?= $feed['text']; ?></div>
                        <a class="red-button section15-item__button" href="https://youtu.be/<?= $feed['video']; ?>" target="_blank" data-fancybox="video-discription">
                            <i class="icon-triangle-play"></i>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <style>
        .colored-box[data-colored="color1"] {background-color: #4f75ff}
        .colored-box[data-colored="color2"] {background-color: #FAE57D}
        .colored-box[data-colored="color3"] {background-color: #ffffff}
        .colored-box[data-colored="color4"] {background-color: #D3A2FC}
        .colored-box[data-colored="color5"] {background-color: #ED887D}
        .colored-box[data-colored="color6"] {background-color: #25ff29}
        .colored-box[data-colored="color7"] {background-color: #ffdb25}
        .colored-box[data-colored="color8"] {background-color: #000000}
        .colored-box[data-colored="color9"] {background-color: #b2f6ff}
        .colored-box[data-colored="color10"] {background-color: #ff68c2}
        .colored-box[data-colored="color11"] {background-color: #25CBFF}
        .colored-box[data-colored="color12"] {background-color: #25CBFF}
    </style>

    <section class="section16" id="schedule">
        <div class="container">
            <h2 class="section16-title"><?= $block7['title']; ?></h2>
            <div class="section16-timetable__wrapper timetable__wrapper">
                <div class="section16-row">
                    <div class="tabs section-tabs__timetable section16-tabs">
                        <!-- SWIPE BUTTONS FOR TABS-->
                        <div class="nav-item__mobile-discr">
                            <div class="section__swipe-buttons">
                                <button class="section-tabs__mobile-trigger-prev section-tabs__mobile-trigger" data-move="prev">
                                    <i class="icon-arrow-left-bordered"></i>
                                </button>
                                <button class="section-tabs__mobile-trigger-next section-tabs__mobile-trigger" data-move="next">
                                    <i class="icon-arrow-right-bordered"></i>
                                </button>
                            </div>
                            <div class="nav-item__mobile-discr-title">Выберите преподователя</div>
                            <ul class="nav nav-tabs section-tabs__slider section16-nav-tabs" id="myTab" role="tablist">
                                <?php foreach ($block7['schedule'] as $key => $item) {
                                    $teacher_data = get_field('teachers', $item['teacher']->ID);
                                    ?>
                                    <li class="nav-item <?php echo $key === 0 ? 'nav-item-active' : ''; ?>">
                                        <a class="nav-link tabs-nav__trigger <?php echo $key === 0 ? 'active' : ''; ?>" id="schedule<?= $key + 1?>-tab" data-toggle="tab" href="#schedule<?= $key + 1?>" role="tab" aria-controls="schedule<?= $key + 1?>" aria-selected="true">
                                            <img src="<?= $teacher_data['image_schedule']['sizes']['thumbnail']; ?>" alt="<?= $teacher_data['image_schedule']['alt']; ?>" class="section16-nav-tab__img">
                                            <span><?= $teacher_data['fio']; ?></span>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="tab-content section16-tab-content" id="myTabContent">
                            <!-- 1st TAB -->
                            <div class="section16-tab-content__mobile-discr-tab">Выберите время и группу</div>


                            <?php foreach ($block7['schedule'] as $key => $item) { ?>
                            <div class="tab-pane fade <?php echo $key === 0 ? 'show active' : ''; ?>" id="schedule<?= $key + 1?>" role="tabpanel" aria-labelledby="schedule<?= $key + 1?>-tab">

                                <div class="section__swiper-row timetable-slide-row">
                                    <div class="swiper-button-wrapper">
                                        <div class="swiper-button-prev">
                                            <i class="icon-arrow-left-bordered"></i>
                                        </div>
                                        <div class="swiper-button-next">
                                            <i class="icon-arrow-right-bordered"></i>
                                        </div>
                                    </div>

                                    <div class="timetable">
                                        <div class="timetable__header">
                                            <div class="timetable__header-row">
                                                <div class="timetable__header-item"></div>
                                                <div class="timetable__header-item">Пн</div>
                                                <div class="timetable__header-item">Вт</div>
                                                <div class="timetable__header-item">Ср</div>
                                                <div class="timetable__header-item">Чт</div>
                                                <div class="timetable__header-item">Пт</div>
                                                <div class="timetable__header-item">Сб</div>
                                                <div class="timetable__header-item">Вс</div>
                                            </div>
                                        </div>
                                        <div class="swiper-container timetable-slider">
                                            <div class="swiper-wrapper">
                                                <?php foreach ($item['time'] as $tKey => $tValue) { ?>
                                                    <div class="swiper-slide">
                                                        <div class="timetable__body-row">
                                                            <div class="timetable__body-item">
                                                                <h3 class="tab-time"><?= $tValue['time']; ?></h3>
                                                            </div>
                                                            <div class="timetable__body-item">
                                                                <button class="colored-box schedule-form-trigger-btn <?= $tValue['mo'] === 'color3' ? 'colored-box--empty' : ''; ?>"
                                                                        data-colored="<?= $tValue['mo']; ?>"
                                                                        data-subject="<?= $item['teacher']->post_title . ' ' .$tValue['time']; ?> Понедельник"
                                                                        type="button"
                                                                        <?php if ($tValue['mo'] !== 'white') {echo 'data-toggle="modal" data-target="#scheduleModalForm"';} ?>
                                                                ></button>
                                                            </div>
                                                            <div class="timetable__body-item">
                                                                <button class="colored-box schedule-form-trigger-btn <?= $tValue['tu'] === 'color3' ? 'colored-box--empty' : ''; ?>"
                                                                        data-colored="<?= $tValue['tu']; ?>"
                                                                        data-subject="<?= $item['teacher']->post_title . ' ' .$tValue['time']; ?> Вторник"
                                                                        type="button"
                                                                        <?php if ($tValue['tu'] !== 'white') {echo 'data-toggle="modal" data-target="#scheduleModalForm"';} ?>
                                                                ></button>
                                                            </div>
                                                            <div class="timetable__body-item">
                                                                <button class="colored-box schedule-form-trigger-btn <?= $tValue['we'] === 'color3' ? 'colored-box--empty' : ''; ?>"
                                                                        data-colored="<?= $tValue['we']; ?>"
                                                                        data-subject="<?= $item['teacher']->post_title . ' ' .$tValue['time']; ?> Среда"
                                                                        type="button"
                                                                        <?php if ($tValue['we'] !== 'white') {echo 'data-toggle="modal" data-target="#scheduleModalForm"';} ?>
                                                                ></button>
                                                            </div>
                                                            <div class="timetable__body-item">
                                                                <button class="colored-box schedule-form-trigger-btn <?= $tValue['th'] === 'color3' ? 'colored-box--empty' : '';?>"
                                                                        data-colored="<?= $tValue['th']; ?>"
                                                                        data-subject="<?= $item['teacher']->post_title . ' ' .$tValue['time']; ?> Четверг"
                                                                        type="button"
                                                                        <?php if ($tValue['th'] !== 'white') {echo 'data-toggle="modal" data-target="#scheduleModalForm"';} ?>
                                                                ></button>
                                                            </div>
                                                            <div class="timetable__body-item">
                                                                <button class="colored-box schedule-form-trigger-btn <?= $tValue['fr'] === 'color3' ? 'colored-box--empty' : '';?>"
                                                                        data-colored="<?= $tValue['fr']; ?>"
                                                                        data-subject="<?= $item['teacher']->post_title . ' ' .$tValue['time']; ?> Пятница"
                                                                        type="button"
                                                                        <?php if ($tValue['fr'] !== 'white') {echo 'data-toggle="modal" data-target="#scheduleModalForm"';} ?>
                                                                ></button>
                                                            </div>
                                                            <div class="timetable__body-item">
                                                                <button class="colored-box schedule-form-trigger-btn <?= $tValue['sat'] === 'color3' ? 'colored-box--empty' : ''; ?>"
                                                                        data-colored="<?= $tValue['sat']; ?>"
                                                                        data-subject="<?= $item['teacher']->post_title . ' ' .$tValue['time']; ?> Суббота"
                                                                        type="button"
                                                                        <?php if ($tValue['sat'] !== 'white') {echo 'data-toggle="modal" data-target="#scheduleModalForm"';} ?>
                                                                ></button>
                                                            </div>
                                                            <div class="timetable__body-item">
                                                                <button class="colored-box schedule-form-trigger-btn <?= $tValue['sun'] === 'color3' ? 'colored-box--empty' : ''; ?>"
                                                                        data-colored="<?= $tValue['sun']; ?>"
                                                                        data-subject="<?= $item['teacher']->post_title . ' ' .$tValue['time']; ?> Воскресенье"
                                                                        type="button"
                                                                        <?php if ($tValue['sun'] !== 'white') {echo 'data-toggle="modal" data-target="#scheduleModalForm"';} ?>
                                                                ></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="modal fade modal-consultation" id="scheduleModalForm" tabindex="-1" role="dialog" aria-labelledby="scheduleModalFormTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-body">
                                    <div class="modal-consultation__wrapper">
                                        <h3 class="modal-title" id="scheduleModalFormTitle"><?= $block7['form_title']; ?></h3>
                                        <p><?= $block7['form_subtitle']; ?></p>
                                        <div class="modal-form">
                                            <?= do_shortcode($block7['form']); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section16-params">
                        <div class="section16-params__row">
                            <div class="section16-params__items-wrapper">
                                <div class="section16-params__item">
                                    <?php foreach ($block7['description']['left_col']['description'] as $item ) { ?>
                                    <div class="section16-params__item-point">
                                        <div class="colored-box schedule-form-trigger-btn"
                                             data-colored="<?= $item['color']; ?>"
                                             data-subject="<?= $item['text']; ?>"
                                             type="button"
                                            <?php if ($item['color'] !== 'white') {echo 'data-toggle="modal" data-target="#scheduleModalForm"';} ?>
                                        ></div>
                                        <span><?= $item['text']; ?></span>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="section16-params__item">
                                    <?php foreach ($block7['description']['right_col']['description'] as $item ) { ?>
                                        <div class="section16-params__item-point">
                                            <div class="colored-box schedule-form-trigger-btn"
                                                 data-colored="<?= $item['color']; ?>"
                                                 data-subject="<?= $item['text']; ?>"
                                                 type="button"
                                                <?php if ($item['color'] !== 'white') {echo 'data-toggle="modal" data-target="#scheduleModalForm"';} ?>
                                            ></div>
                                            <span><?= $item['text']; ?></span>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="section16-params__item section16-params__item-button">
                                <button class="button-fill button-fill--green block-info__button section11-button schedule-form-trigger-btn"
                                        type="button"
                                        data-toggle="modal"
                                        data-subject="Записаться на курс - курс и время не указаны"
                                        data-target="#scheduleModalForm"
                                ><?= $block7['btn_title']; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="button-fill button-fill--green block-info__button section11-button section16-button" type="button" data-toggle="modal" data-target="#modalConsultationFirst">Записаться</button>
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
                <h2 class="section17-title"><?= $block8['title']; ?></h2>
                <div class="section-accordion accordion">
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
        </div>
    </section>
    <!-- End page content -->



<?php get_footer(); ?>