<?php wp_footer(); ?>

<footer>

    <div class="container">

        <div class="footer-container">

            <div class="footer-left">

                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container' => 'nav',
                    'container_id' => 'footer-menu'
                )); ?>

                <hr>

            </div>

            <div class="footer-middle">

                <p><a href="/contact/#service">When does the service start?</a></p>
                <p><a href="/live">Watch Live</a></p>

                <hr>

                <img src="<?php print get_template_directory_uri(); ?>/assets/img/full_horizontal_white_vector.svg"
                    alt="WIN Calgary logo">

            </div>

            <div class="footer-right">
                <div class="footer-block">
                    <h3>Give</h3>
                    <ul>
                        <li><a class="tithely-give-btn" href="javascript:;" data-church-id="1381469"
                                data-giving-to="Project Haggai">Project Haggai</a></li>
                        <li><a class="tithely-give-btn" href="javascript:;" data-church-id="1381469"
                                data-giving-to="General Fund">Community</a></li>
                    </ul>
                </div>
                <div class="footer-block">
                    <h3>Connect With Us!</h3>
                    <a href="https://www.facebook.com/WINCalgary" target="_blank"><i class="fa fa-facebook"
                            aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/channel/UCz05qt53NjsRfrA3Of-Th6g" target="_blank"><i
                            class="fa fa-youtube-play" aria-hidden="true"></i></a>
                </div>
                <div class="footer-block">
                    <h3>Come Visit Us! </h3>
                    <p><a href="https://www.google.ca/maps/place/7500+Macleod+Trail+SE,+Calgary,+AB+T2H+0L9/@50.9866579,-114.0724299,17z/data=!3m1!4b1!4m5!3m4!1s0x5371711d57f34bdb:0xbdf2a88a030d6378!8m2!3d50.9866545!4d-114.0702412"
                            target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i> South Campus</a></p>
                    <p><a href="https://www.google.ca/maps/place/228+Whitehorn+Rd+NE,+Calgary,+AB+T1Y+6H5/@51.0887893,-113.969143,17z/data=!3m1!4b1!4m5!3m4!1s0x53716498218ed44f:0x6b2a7ba45bcf57a2!8m2!3d51.088786!4d-113.9669544"
                            target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i> North Campus</a></p>
                </div>
            </div>

        </div>

    </div>

    <p class="copyright"><i class="fa fa-copyright" aria-hidden="true"></i><?php print date('Y') ?> WIN Calgary, All
        rights reserved.</p>

</footer>

<?php if(is_page('contact')){ ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLjAxm_XbNlW6thg9nDi_f0paGlbDebFQ&callback=initMap" async
    defer></script>
<?php } ?>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>
<script src="https://tithe.ly/widget/v3/give.js?3"></script>
<script>
var tw = create_tithely_widget();
</script>

<script>
ScrollOut({
    threshold: .2,
    once: true
});
</script>

</body>

</html>