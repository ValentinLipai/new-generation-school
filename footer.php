<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new-generation
 */

?>
<?php
$option_fields = get_field('settings', 'option');
$footer_fields = $option_fields['footer'];
?>
<footer class="footer">
    <div class="container">
        <div class="footer-wrapper">
            <i class="icon-daub"></i>
            <i class="icon-childrens"></i>
            <i class="icon-scattered"></i>
            <i class="icon-little-star"></i>
            <i class="icon-little-star icon-little-star_1"></i>
            <h2 class="footer-title"><?= $footer_fields['map']['title']; ?></h2>

            <div class="footer-map">
                <div class="footer-map-wraper" style="position:relative;overflow:hidden;">
                    <?= $footer_fields['map']['map_code']; ?>
                </div>
            </div>
            <div class="footer-contacts__row">
                <div class="footer-contacts footer-contacts__item1">
                    <h3 class="footer-contacts__title"><?= $footer_fields['cols']['col1_title']; ?></h3>
                    <div class="footer-contacts__text"><?= $footer_fields['cols']['col1_text']; ?></div>
                </div>
                <div class="footer-contacts footer-contacts__item2">
                    <h3 class="footer-contacts__title">
                        <a href="tel:<?= preg_replace('/[^0-9+]/', '', $footer_fields['cols']['col2_tel']); ?>" class="tel"><?= $footer_fields['cols']['col2_tel']; ?></a>
                    </h3>
                    <div class="footer-contacts-addres">
                           <span><?= $footer_fields['cols']['col2_address']; ?></span>
                    </div>
                </div>
                <div class="footer-contacts footer-contacts__item3">
                    <h3 class="footer-contacts__title footer-contacts__title-mail">
                        <a href="mailto:<?= $footer_fields['cols']['col3_email']; ?>" class="tel"><?= $footer_fields['cols']['col3_email']; ?></a>
                    </h3>
                    <div class="footer-contacts__social-links">
                        <a href="<?= $footer_fields['cols']['vk_link']; ?>" class="vk-link" target="_blank">
                            <i class="icon-vk"></i>
                        </a>
                        <a href="<?= $footer_fields['cols']['ig_link']; ?>" class="instagram-link" target="_blank">
                            <i class="icon-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom__left">
                    <span><?= $footer_fields['copyright']; ?></span>
                </div>
                <div class="footer-bottom__right">
                    <span><?= $footer_fields['company_into']; ?></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Order consultation modals start -->

<?php
    require 'template-parts/modals.php';
?>

<?php wp_footer(); ?>
</body>
</html>