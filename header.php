<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new-generation
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Neucha&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
    $option_fields = get_field('settings', 'option');
    $header_fields = $option_fields['header'];
?>

    <header class="header">
        <div class="container">
            <div class="header__row">
                <!-- LOGO IMG -->
                <div class="header-logo">
                    <img src="<?= get_template_directory_uri(); ?>/assets/app/img/src/nav-logo_circle.png" alt="" class="header-logo__circleImg">
                    <?= the_custom_logo(); ?>
                </div>
                <!-- NAVIGATION -->
                <div class="header__navigation">
                    <button class="header__nav-toggle"></button>
                    <nav class="nav-links header__nav-links">
                        <div class="nav-links__backdrop-container">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                    'container'      => false,
                                    'menu_class'     => 'nav-links__list',
                                    'depth'          => 2
                                )
                            );
                            ?>
                            <!-- TABLET/MOBILE CONTACTS -->
                            <div class="header-contacts__tablet">
                                <a href="tel:<?= preg_replace('/[^0-9+]/', '', $header_fields['tel']); ?>" class="tel header-contacts__tablet-phone"><?= $header_fields['tel']; ?></a>
                                <div class="header-contacts__tablet-address"><?= $header_fields['address']; ?></div>
                                <div class="header-actions">
                                    <button class="button-fill  button-fill--sm header-button" type="button" data-toggle="modal" data-target="#headerModalForm"><?= $header_fields['btn_text']; ?></button>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- CONTACTS -->
                <div class="header-contacts">
                    <div class="header-contacts__info">
                        <a href="tel:<?= preg_replace('/[^0-9+]/', '', $header_fields['tel']); ?>" class="tel header-contacts__phone"><?= $header_fields['tel']; ?></a>
                        <div class="header-contacts__address"><?= $header_fields['address']; ?></div>
                    </div>
                    <div class="header-actions">
                        <button class="btn btn-primary button-fill button-fill--sm header-button" type="button" data-toggle="modal" data-target="#headerModalForm"><?= $header_fields['btn_text']; ?></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- HEADER CONSULTATION start -->
    <div class="modal fade modal-consultation" id="headerModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="modal-consultation__wrapper">
                        <h3 class="modal-title" id="headerModalFormlTitle"><?= $header_fields['form_title']; ?></h3>
                        <p><?= $header_fields['form_subtitle']; ?></p>
                        <div class="modal-form">
                            <?= do_shortcode($header_fields['form']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER CONSULTATION end -->