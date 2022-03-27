<?php
    $settings_fields = get_field('settings', 'option');

    $other_fields = $settings_fields['other'];
?>

<!-- ORDER CONSULTATIONS modals start -->


<!-- Thanks Modal start-->
<div class="modal fade modal-consultation modal-consultation_2" id="thanksModal" data-timeout="3000" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="thanksModalTitle"><?= $other_fields['thanks_modal']['title']; ?></h3>
            </div>
            <div class="modal-body">
                <?= $other_fields['thanks_modal']['subtitle']; ?>
            </div>
        </div>
    </div>
</div>
<!-- Thanks Modal end-->


<!--  -->
<!-- - Почемучки (4-5 лет) гр. №1 -->
<div class="modal fade modal-consultation" id="modalConsultationPochemuchki-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="modal-consultation__wrapper">
                    <h3 class="modal-title" id="modalConsultationFirstlTitle">Заказать консультацию</h3>
                    <p>Оставьте свои контактные данные и мы очень скоро перезвоним вам :)</p>
                    <div class="modal-form">
                        <form action="">
                            <input class="modal-body__input-name" name="name" type="text" placeholder="Как вас зовут?">
                            <input class="modal-body__input-phone" name="phone" type="text" placeholder="Ваш номер телефона">
                            <button  type="submit" class="btn btn-primary modal-consultation-button button-fill button-fill--green" >
                                <span>Записаться</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- - Почемучки (4-5 лет) гр. №2  -->
<div class="modal fade modal-consultation" id="modalConsultationPochemuchki-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="modal-consultation__wrapper">
                    <h3 class="modal-title" id="modalConsultationFirstlTitle">Заказать консультацию</h3>
                    <p>Оставьте свои контактные данные и мы очень скоро перезвоним вам :)</p>
                    <div class="modal-form">
                        <form action="">
                            <input class="modal-body__input-name" name="name" type="text" placeholder="Как вас зовут?">
                            <input class="modal-body__input-phone" name="phone" type="text" placeholder="Ваш номер телефона">
                            <button  type="submit" class="btn btn-primary modal-consultation-button button-fill button-fill--green" >
                                <span>Записаться</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- - Потомучки (5-6 лет) гр. №1  -->
<div class="modal fade modal-consultation" id="modalConsultationPotomuchki-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="modal-consultation__wrapper">
                    <h3 class="modal-title" id="modalConsultationFirstlTitle">Заказать консультацию</h3>
                    <p>Оставьте свои контактные данные и мы очень скоро перезвоним вам :)</p>
                    <div class="modal-form">
                        <form action="">
                            <input class="modal-body__input-name" name="name" type="text" placeholder="Как вас зовут?">
                            <input class="modal-body__input-phone" name="phone" type="text" placeholder="Ваш номер телефона">
                            <button  type="submit" class="btn btn-primary modal-consultation-button button-fill button-fill--green" >
                                <span>Записаться</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- - Потомучки (5-6 лет) гр. №2 -->
<div class="modal fade modal-consultation" id="modalConsultationPotomuchki-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="modal-consultation__wrapper">
                    <h3 class="modal-title" id="modalConsultationFirstlTitle">Заказать консультацию</h3>
                    <p>Оставьте свои контактные данные и мы очень скоро перезвоним вам :)</p>
                    <div class="modal-form">
                        <form action="">
                            <input class="modal-body__input-name" name="name" type="text" placeholder="Как вас зовут?">
                            <input class="modal-body__input-phone" name="phone" type="text" placeholder="Ваш номер телефона">
                            <button  type="submit" class="btn btn-primary modal-consultation-button button-fill button-fill--green" >
                                <span>Записаться</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- - Потомучки" (5-6 лет) гр. №3 -->
<div class="modal fade modal-consultation" id="modalConsultationPotomuchki-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="modal-consultation__wrapper">
                    <h3 class="modal-title" id="modalConsultationFirstlTitle">Заказать консультацию</h3>
                    <p>Оставьте свои контактные данные и мы очень скоро перезвоним вам :)</p>
                    <div class="modal-form">
                        <form action="">
                            <input class="modal-body__input-name" name="name" type="text" placeholder="Как вас зовут?">
                            <input class="modal-body__input-phone" name="phone" type="text" placeholder="Ваш номер телефона">
                            <button  type="submit" class="btn btn-primary modal-consultation-button button-fill button-fill--green" >
                                <span>Записаться</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<!-- ORDER CONSULTATIONS modals end -->



<!-- ABOUT TEACHER modals start -->
<!-- Таипова Марина Евгеньевна -->
<div class="modal fade about-teacher__modal" id="aboutTeacherModal-1" tabindex="-1" role="dialog" aria-labelledby="aboutTeacherModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close about-teacher__modal-button button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="page-text-content">
                    <p>Более 20 лет работала учителем начальных классов в средних специализированных учебных заведениях России и Беларуси.</p>
                    <p>Имеет публикации методических разработок по проведению уроков в российских периодических печатных образовательных изданиях. В 2000 и 2005 годах повышала свою квалификацию в Минском городском институте развития образования и Академии последипломного образования. Ежегодно в 2006-2009 годах проходила обучение в информационно-образовательном центре "Наставник" Минского городского института развития образования по курсу А.А. Нестеренко "Использование ОТСМ-ТРИЗ педагогики в начальной школе".</p>
                    <p>В 2004 - 2007 годах, будучи методистом Минского городского института развития образования, была направлена в Управление образования Ленинского района города Минска и занималась оказанием методической помощи учреждениям образования района, содействовала распространению передового педагогического опыта.</p>
                    <p>С 2007 года на базе начальной школы минской гимназии применяет в учебном процессе инновационные методики развивающего обучения, в том числе ТРИЗ-педагогику.</p>
                    <p>Неоднократно поощрялась комитетом по образованию Мингорисполкома, Управленииями образования Московского и Ленинского районов города Минска за достижения в работе. В 2010 году удостоена диплома и гранта Мингорисполкома за разработку образовательного проекта "Развитие творческого мышления младших школьников посредством использования инструментов технологии ОТСМ-ТРИЗ".</p>
                    <p>С 2011 года систематически приглашается в Минский городской институт развития образования для чтения лекций и ознакомления учителей начальных классов города Минска с практическим опытом применения ТРИЗ-технологии в начальной школе.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Чапего Наталья Николаевна -->
<div class="modal fade about-teacher__modal" id="aboutTeacherModal-2" tabindex="-1" role="dialog" aria-labelledby="aboutTeacherModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close about-teacher__modal-button button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="page-text-content">
                    <p>Более 20 лет работала учителем начальных классов в средних специализированных учебных заведениях России и Беларуси.</p>
                    <p>Имеет публикации методических разработок по проведению уроков в российских периодических печатных образовательных изданиях. В 2000 и 2005 годах повышала свою квалификацию в Минском городском институте развития образования и Академии последипломного образования. Ежегодно в 2006-2009 годах проходила обучение в информационно-образовательном центре "Наставник" Минского городского института развития образования по курсу А.А. Нестеренко "Использование ОТСМ-ТРИЗ педагогики в начальной школе".</p>
                    <p>В 2004 - 2007 годах, будучи методистом Минского городского института развития образования, была направлена в Управление образования Ленинского района города Минска и занималась оказанием методической помощи учреждениям образования района, содействовала распространению передового педагогического опыта.</p>
                    <p>С 2007 года на базе начальной школы минской гимназии применяет в учебном процессе инновационные методики развивающего обучения, в том числе ТРИЗ-педагогику.</p>
                    <p>Неоднократно поощрялась комитетом по образованию Мингорисполкома, Управленииями образования Московского и Ленинского районов города Минска за достижения в работе. В 2010 году удостоена диплома и гранта Мингорисполкома за разработку образовательного проекта "Развитие творческого мышления младших школьников посредством использования инструментов технологии ОТСМ-ТРИЗ".</p>
                    <p>С 2011 года систематически приглашается в Минский городской институт развития образования для чтения лекций и ознакомления учителей начальных классов города Минска с практическим опытом применения ТРИЗ-технологии в начальной школе.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Косович Дарья Сергеевна -->
<div class="modal fade about-teacher__modal" id="aboutTeacherModal-3" tabindex="-1" role="dialog" aria-labelledby="aboutTeacherModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close about-teacher__modal-button button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="page-text-content">
                    <p>Более 20 лет работала учителем начальных классов в средних специализированных учебных заведениях России и Беларуси.</p>
                    <p>Имеет публикации методических разработок по проведению уроков в российских периодических печатных образовательных изданиях. В 2000 и 2005 годах повышала свою квалификацию в Минском городском институте развития образования и Академии последипломного образования. Ежегодно в 2006-2009 годах проходила обучение в информационно-образовательном центре "Наставник" Минского городского института развития образования по курсу А.А. Нестеренко "Использование ОТСМ-ТРИЗ педагогики в начальной школе".</p>
                    <p>В 2004 - 2007 годах, будучи методистом Минского городского института развития образования, была направлена в Управление образования Ленинского района города Минска и занималась оказанием методической помощи учреждениям образования района, содействовала распространению передового педагогического опыта.</p>
                    <p>С 2007 года на базе начальной школы минской гимназии применяет в учебном процессе инновационные методики развивающего обучения, в том числе ТРИЗ-педагогику.</p>
                    <p>Неоднократно поощрялась комитетом по образованию Мингорисполкома, Управленииями образования Московского и Ленинского районов города Минска за достижения в работе. В 2010 году удостоена диплома и гранта Мингорисполкома за разработку образовательного проекта "Развитие творческого мышления младших школьников посредством использования инструментов технологии ОТСМ-ТРИЗ".</p>
                    <p>С 2011 года систематически приглашается в Минский городской институт развития образования для чтения лекций и ознакомления учителей начальных классов города Минска с практическим опытом применения ТРИЗ-технологии в начальной школе.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Васютинская Алеся Владимировна -->
<div class="modal fade about-teacher__modal" id="aboutTeacherModal-4" tabindex="-1" role="dialog" aria-labelledby="aboutTeacherModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close about-teacher__modal-button button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="page-text-content">
                    <p>Более 20 лет работала учителем начальных классов в средних специализированных учебных заведениях России и Беларуси.</p>
                    <p>Имеет публикации методических разработок по проведению уроков в российских периодических печатных образовательных изданиях. В 2000 и 2005 годах повышала свою квалификацию в Минском городском институте развития образования и Академии последипломного образования. Ежегодно в 2006-2009 годах проходила обучение в информационно-образовательном центре "Наставник" Минского городского института развития образования по курсу А.А. Нестеренко "Использование ОТСМ-ТРИЗ педагогики в начальной школе".</p>
                    <p>В 2004 - 2007 годах, будучи методистом Минского городского института развития образования, была направлена в Управление образования Ленинского района города Минска и занималась оказанием методической помощи учреждениям образования района, содействовала распространению передового педагогического опыта.</p>
                    <p>С 2007 года на базе начальной школы минской гимназии применяет в учебном процессе инновационные методики развивающего обучения, в том числе ТРИЗ-педагогику.</p>
                    <p>Неоднократно поощрялась комитетом по образованию Мингорисполкома, Управленииями образования Московского и Ленинского районов города Минска за достижения в работе. В 2010 году удостоена диплома и гранта Мингорисполкома за разработку образовательного проекта "Развитие творческого мышления младших школьников посредством использования инструментов технологии ОТСМ-ТРИЗ".</p>
                    <p>С 2011 года систематически приглашается в Минский городской институт развития образования для чтения лекций и ознакомления учителей начальных классов города Минска с практическим опытом применения ТРИЗ-технологии в начальной школе.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Молокова Светлана Васильевна -->
<div class="modal fade about-teacher__modal" id="aboutTeacherModal-5" tabindex="-1" role="dialog" aria-labelledby="aboutTeacherModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close about-teacher__modal-button button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="page-text-content">
                    <p>Более 20 лет работала учителем начальных классов в средних специализированных учебных заведениях России и Беларуси.</p>
                    <p>Имеет публикации методических разработок по проведению уроков в российских периодических печатных образовательных изданиях. В 2000 и 2005 годах повышала свою квалификацию в Минском городском институте развития образования и Академии последипломного образования. Ежегодно в 2006-2009 годах проходила обучение в информационно-образовательном центре "Наставник" Минского городского института развития образования по курсу А.А. Нестеренко "Использование ОТСМ-ТРИЗ педагогики в начальной школе".</p>
                    <p>В 2004 - 2007 годах, будучи методистом Минского городского института развития образования, была направлена в Управление образования Ленинского района города Минска и занималась оказанием методической помощи учреждениям образования района, содействовала распространению передового педагогического опыта.</p>
                    <p>С 2007 года на базе начальной школы минской гимназии применяет в учебном процессе инновационные методики развивающего обучения, в том числе ТРИЗ-педагогику.</p>
                    <p>Неоднократно поощрялась комитетом по образованию Мингорисполкома, Управленииями образования Московского и Ленинского районов города Минска за достижения в работе. В 2010 году удостоена диплома и гранта Мингорисполкома за разработку образовательного проекта "Развитие творческого мышления младших школьников посредством использования инструментов технологии ОТСМ-ТРИЗ".</p>
                    <p>С 2011 года систематически приглашается в Минский городской институт развития образования для чтения лекций и ознакомления учителей начальных классов города Минска с практическим опытом применения ТРИЗ-технологии в начальной школе.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT TEACHER modals end  -->



<!-- TEACHERS certificates modal statr -->
<!-- Таипова Марина Евгеньевна -->
<div class="modal fade teacher-certificates__modal" id="teacherCertificatesModal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="swiper-container mySwiper teacher-certificates-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="./img/src/modals/sectificate.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./img/src/modals/sectificate.png" alt="">
                        </div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
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
<!-- Чапего Наталья Николаевна -->
<div class="modal fade teacher-certificates__modal" id="teacherCertificatesModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="swiper-container mySwiper teacher-certificates-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="./img/src/modals/sectificate.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./img/src/modals/sectificate.png" alt="">
                        </div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
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
<!-- Косович Дарья Сергеевна -->
<div class="modal fade teacher-certificates__modal" id="teacherCertificatesModal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="swiper-container mySwiper teacher-certificates-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="./img/src/modals/sectificate.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./img/src/modals/sectificate.png" alt="">
                        </div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
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
<!-- Васютинская Алеся Владимировна -->
<div class="modal fade teacher-certificates__modal" id="teacherCertificatesModal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="swiper-container mySwiper teacher-certificates-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="./img/src/modals/sectificate.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./img/src/modals/sectificate.png" alt="">
                        </div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
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
<!-- Молокова Светлана Васильевна -->
<div class="modal fade teacher-certificates__modal" id="teacherCertificatesModal-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="swiper-container mySwiper teacher-certificates-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="./img/src/modals/sectificate.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./img/src/modals/sectificate.png" alt="">
                        </div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
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
<!-- TEACHERS certificates modal end-->



<!-- HOW TO MAKE FEEDBACK start -->
<!-- Google -->
<div class="modal fade how-to-make-feedback__modal " id="howToMakeFeedbackGoogleModal" tabindex="-1" role="dialog" aria-labelledby="howToMakeFeedbackGoogleModalTitle" aria-hidden="true">
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
                                <img src="../img/src/section32/modals/slide1.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>1-й шаг:</strong> заходим на сайт <a href="http://google.com/" class="link-green">http://google.com/</a> , справа вверху нажимаем оранжевую кнопку «Написать отзыв»</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img-wrapper">
                                <img src="../img/src/section32/modals/slide2.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>2-й шаг:</strong>В раскрывающемся окне заполняем свои данные, в строчке названия компании вводим «Новое поколение», выбираем Детский развивающий центр «Новое поколение»</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img-wrapper">
                                <img src="../img/src/section32/modals/slide3.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>3-й шаг:</strong> Пишем отзыв, кликаем «Опубликовать отзыв».</div>
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
                        <a href="https://www.google.com/" target="_blank" class="swiper-modal-link button-fill button-fill--green block-info__button feedback-button feedback-button-next">Оставить отзыв</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Yandex -->
<div class="modal fade how-to-make-feedback__modal" id="howToMakeFeedbackYandexModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                <img src="../img/src/section32/modals/slide1.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>1-й шаг:</strong> заходим на сайт <a href="http://google.com/" class="link-green">http://google.com/</a> , справа вверху нажимаем оранжевую кнопку «Написать отзыв»</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img-wrapper">
                                <img src="../img/src/section32/modals/slide2.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>2-й шаг:</strong>В раскрывающемся окне заполняем свои данные, в строчке названия компании вводим «Новое поколение», выбираем Детский развивающий центр «Новое поколение»</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img-wrapper">
                                <img src="../img/src/section32/modals/slide3.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>3-й шаг:</strong> Пишем отзыв, кликаем «Опубликовать отзыв».</div>
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
                        <a href="https://www.google.com/" target="_blank" class="swiper-modal-link button-fill button-fill--green block-info__button feedback-button feedback-button-next">Оставить отзыв</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Otzyvy -->
<div class="modal fade how-to-make-feedback__modal" id="howToMakeFeedbackOtzyvyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                <img src="../img/src/section32/modals/slide1.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>1-й шаг:</strong> заходим на сайт <a href="http://google.com/" class="link-green">http://google.com/</a> , справа вверху нажимаем оранжевую кнопку «Написать отзыв»</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img-wrapper">
                                <img src="../img/src/section32/modals/slide2.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>2-й шаг:</strong>В раскрывающемся окне заполняем свои данные, в строчке названия компании вводим «Новое поколение», выбираем Детский развивающий центр «Новое поколение»</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img-wrapper">
                                <img src="../img/src/section32/modals/slide3.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>3-й шаг:</strong> Пишем отзыв, кликаем «Опубликовать отзыв».</div>
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
                        <a href="https://www.google.com/" target="_blank" class="swiper-modal-link button-fill button-fill--green block-info__button feedback-button feedback-button-next">Оставить отзыв</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facebook -->
<div class="modal fade how-to-make-feedback__modal" id="howToMakeFeedbackFacebookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                <img src="../img/src/section32/modals/slide1.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>1-й шаг:</strong> заходим на сайт <a href="http://google.com/" class="link-green">http://google.com/</a> , справа вверху нажимаем оранжевую кнопку «Написать отзыв»</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img-wrapper">
                                <img src="../img/src/section32/modals/slide2.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>2-й шаг:</strong>В раскрывающемся окне заполняем свои данные, в строчке названия компании вводим «Новое поколение», выбираем Детский развивающий центр «Новое поколение»</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img-wrapper">
                                <img src="../img/src/section32/modals/slide3.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>3-й шаг:</strong> Пишем отзыв, кликаем «Опубликовать отзыв».</div>
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
                        <a href="https://www.google.com/" target="_blank" class="swiper-modal-link button-fill button-fill--green block-info__button feedback-button feedback-button-next">Оставить отзыв</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- VK -->
<div class="modal fade how-to-make-feedback__modal" id="howToMakeFeedbackVkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                <img src="../img/src/section32/modals/slide1.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>1-й шаг:</strong> заходим на сайт <a href="http://google.com/" class="link-green">http://google.com/</a> , справа вверху нажимаем оранжевую кнопку «Написать отзыв»</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img-wrapper">
                                <img src="../img/src/section32/modals/slide2.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>2-й шаг:</strong>В раскрывающемся окне заполняем свои данные, в строчке названия компании вводим «Новое поколение», выбираем Детский развивающий центр «Новое поколение»</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img-wrapper">
                                <img src="../img/src/section32/modals/slide3.png" alt="">
                            </div>
                            <div class="slide-discr">
                                <h3 class="slide-title">Как оставить отзыв на сайте google.com</h3>
                                <div class="slide-text"> <strong>3-й шаг:</strong> Пишем отзыв, кликаем «Опубликовать отзыв».</div>
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
                        <a href="https://www.google.com/" target="_blank" class="swiper-modal-link button-fill button-fill--green block-info__button feedback-button feedback-button-next">Оставить отзыв</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HOW TO MAKE FEEDBACK end -->


<!-- answerQuestionModals start -->
<!-- 1st -->
<!-- 2nd -->
<div class="modal fade answer-question" id="answerQuestionModal-2" tabindex="-1" role="dialog" aria-labelledby="answerQuestionModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close answer-question-button button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="page-text-content">
                    <h3>Ответ 2 :</h3>
                    <p>Как же поступили швейцарские айболиты? В шарики из рыбьей муки и жира закатали капсулы с вакциной
                        и разбросали их на звериных тропах. Обладая тонким обонянием,
                        лисы легко находили шарики и съедали их – вместе с лекарством.
                        В Швейцарии таким способом с одного раза полностью искоренили
                        бешенство среди диких животных.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 3rd -->
<div class="modal fade answer-question" id="answerQuestionModal-3" tabindex="-1" role="dialog" aria-labelledby="answerQuestionModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close answer-question-button button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="page-text-content">
                    <h3>Ответ 3 :</h3>
                    <p>Как же поступили швейцарские айболиты? В шарики из рыбьей муки и жира закатали капсулы с вакциной
                        и разбросали их на звериных тропах. Обладая тонким обонянием,
                        лисы легко находили шарики и съедали их – вместе с лекарством.
                        В Швейцарии таким способом с одного раза полностью искоренили
                        бешенство среди диких животных.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 4th -->
<div class="modal fade answer-question" id="answerQuestionModal-4" tabindex="-1" role="dialog" aria-labelledby="answerQuestionModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close answer-question-button button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="page-text-content">
                    <h3>Ответ 4 :</h3>
                    <p>Как же поступили швейцарские айболиты? В шарики из рыбьей муки и жира закатали капсулы с вакциной
                        и разбросали их на звериных тропах. Обладая тонким обонянием,
                        лисы легко находили шарики и съедали их – вместе с лекарством.
                        В Швейцарии таким способом с одного раза полностью искоренили
                        бешенство среди диких животных.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 5th -->
<div class="modal fade answer-question" id="answerQuestionModal-5" tabindex="-1" role="dialog" aria-labelledby="answerQuestionModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close answer-question-button button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="page-text-content">
                    <h3>Ответ 5 :</h3>
                    <p>Как же поступили швейцарские айболиты? В шарики из рыбьей муки и жира закатали капсулы с вакциной
                        и разбросали их на звериных тропах. Обладая тонким обонянием,
                        лисы легко находили шарики и съедали их – вместе с лекарством.
                        В Швейцарии таким способом с одного раза полностью искоренили
                        бешенство среди диких животных.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- answerQuestionModals end -->
