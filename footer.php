<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Firetoss_Theme
 */
?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="top-footer-wrapper">
        <div class="container">
            <div class="newsletter">
            <span id="newsletter-text">
                <p>Sign up for our newsletter</p>
                <p>Get the latest ZYTO news in your inbox!</p>
                <script type="text/javascript" src="//app.icontact.com/icp/core/mycontacts/signup/designer/form/automatic?id=41&cid=328665&lid=103336"></script>
                <?//= do_shortcode('[gravityform id=1 title="false"]'); ?>  
            </span>
            </div>
            <div class="social-media">
            <span id="sm-text">
                <p>Connect with us</p>
                <p>Socialize with the ZYTO community</p>
            </span>
                <ul>
                    <?php
                    /// vars
                    $facebook_link = get_field('facebook_link', 'option');
                    $linkedin_link = get_field('linkedin_link', 'option');
                    $twitter_link = get_field('twitter_link', 'option');
                    $instagram_link = get_field('instagram_link', 'option');

                    $signature_text = get_field('signature_text', 'option');
                    $signature_link = get_field('signature_link', 'option');

                    $footer_image = get_field('footer_image', 'option');
                    $footer_logo = get_field('footer_logo', 'option');
                    $footer_image_link = get_field('footer_image_link', 'option');
                    ?>
                    <?php echo $facebook_link ? "<li class='fa'>
                                                        <a href='$facebook_link'>
                                                            <span class='fa-facebook'>
                                                            </span>
                                                        </a>
                                                      </li>" : ""; ?>
                    <?php echo $linkedin_link ? "<li class='fa'>
                                                        <a href='$linkedin_link'>
                                                            <span class='fa-linkedin'>
                                                            </span>
                                                        </a>
                                                      </li>" : ""; ?>
                    <?php echo $twitter_link ? "<li class='fa'>
                                                        <a href='$twitter_link'>
                                                            <span class='fa-twitter'>
                                                            </span>
                                                        </a>
                                                      </li>" : ""; ?>
                    <?php echo $instagram_link ? "<li class='fa'>
                                                        <a href='$instagram_link'>
                                                            <span class='fa-instagram'>
                                                            </span>
                                                        </a>
                                                      </li>" : ""; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="bot-footer-wrapper">
        <div class="footer-bg" style="background-image:url('<?= $footer_image ? $footer_image : ""; ?>')"></div>
        <div class="container">
            <div class="bot-footer-content">
                <div class="footer-image-wrapper">
                    <a href="<?= $footer_image_link ? $footer_image_link : "" ?>"><img
                            src="<?= $footer_logo ? $footer_logo : ""; ?>"></a>
                </div>
                <div class="footer-menus-wrapper">
                    <div class="footer-1">
                        <h2>Tools & Community</h2>
                        <?php wp_nav_menu(array(
                            'menu' => 'footer-1'
                        )); ?></div>
                    <div class="footer-2">
                        <h2>Support</h2>
                        <?php wp_nav_menu(array(
                            'menu' => 'footer-2'
                        )); ?></div>
                    <div class="footer-4">
                        <h2>Company Info</h2>
                        <?php wp_nav_menu(array(
                            'menu' => 'footer-4'
                        )); ?></div>
                    <div class="footer-3"><?php dynamic_sidebar('footer-3'); ?></div>
                </div>
            </div>
        </div>
        <div class="site-info-wrapper">
            <div class="container">
                <p class="alignleft">©2017 ZYTO Corp. All Rights Reserved</p>
                <p class="alignright">
                    <a href="<?= $signature_link; ?>" target="_blank">
                        <?= $signature_text; ?> Firetoss
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->


<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

<?php wp_footer(); ?>
<?php //dynamic_sidebar("region-pop") ?>


<?php
/*
if (!isset($_COOKIE['geot_country'])) { ?>

    <script type="text/javascript">

        (function ($) {

//        $.magnificPopup.open({
//            items: [
//                {
//                    src: '<div class="white-popup geo">GeoTargeting</div>', // can be a HTML string, jQuery object, or CSS selector
//                    type: 'inline'
//                },
//                {
//                    src: '<div class="white-popup lang">Language Selector</div>',
//                    type: 'inline'
//                }
//            ],
//            type: 'inline'
//        }, 0);
            $.magnificPopup.open({
                items: {
                    src: '<div class="footer-popup white-popup"><h2>Region Select</h2></div>'
                },
                type: 'inline'

                // You may add options here, they're exactly the same as for $.fn.magnificPopup call
                // Note that some settings that rely on click event (like disableOn or midClick) will not work here

            }, 0);

            $('.footer-popup').append($('#geot_widget-8'));


        })(jQuery);


    </script>

<?php } else {
    return;
}
*/

/*
 ?>

<!-- begin olark code -->
<script type="text/javascript" async> ;
    (function (o, l, a, r, k, y) {
        if (o.olark)return;
        r = "script";
        y = l.createElement(r);
        r = l.getElementsByTagName(r)[0];
        y.async = 1;
        y.src = "//" + a;
        r.parentNode.insertBefore(y, r);
        y = o.olark = function () {
            k.s.push(arguments);
            k.t.push(+new Date)
        };
        y.extend = function (i, j) {
            y("extend", i, j)
        };
        y.identify = function (i) {
            y("identify", k.i = i)
        };
        y.configure = function (i, j) {
            y("configure", i, j);
            k.c[i] = j
        };
        k = y._ = {s: [], t: [+new Date], c: {}, l: a};
    })(window, document, "static.olark.com/jsclient/loader.js");
    olark.configure('box.inline', true);
    olark.identify('1754-889-10-6001');</script> 
<!-- end olark code -->

*/ ?>
</body>
</html>


