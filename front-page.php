<?php get_header();?>

<div class="hero">

    <!-- Hero image goes here -->

</div>

<div class="container">

    <div class="join-us">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>

    </div>

</div>

<div class="give-banner">

    <div class="container">

        <div class="grid">

            <div>
                <img class="building" src="<?php print get_template_directory_uri(); ?>/assets/img/building.svg"
                    alt="Project Haggai" data-aos="fade-right" data-aos-once="true">
            </div>

            <div data-aos="fade-left" data-aos-once="true">
                <h4>Give to <br>our New Home</h4>
                <a class="wp-block-button__link" href="/project-haggai">Learn more</a>
            </div>

        </div>

    </div>

</div>

<div class="watch-live-banner">

    <div class="container" data-aos="fade-up" data-aos-once="true">

        <h4>Messages</h4>
        <h5>Never Miss Out!</h5>
        <h5>Catch us Live or Catch up on Past Sermons</h5>
        <div class="button-container">
            <a class="wp-block-button__link" href="<?php print get_home_url(); ?>/live">Watch Livestream</a>
            <a class="wp-block-button__link" href="https://www.youtube.com/channel/UCSC48vpfHduGAF1MaY5OwdQ/videos"
                target="_blank">Past Video
                Sermons</a>
        </div>

    </div>

</div>

<div class="back-to-top-btn" title="Scroll back to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>

<?php get_footer(); ?>