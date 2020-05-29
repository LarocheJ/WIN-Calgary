<?php /* Template Name: Offline */ ?>

<?php get_header();?>

<div class="container">

    <div class="spacer-2"></div>

    <h1><?php the_title(); ?></h1>

    <h2>Sorry, we are currently not Streaming</h2>
    <div class="spacer"></div>
    <iframe src="https://embed.restream.io/player/index.html?token=54210b35fe19ecbe637702b8d0a345c4" width="100%"
        height="720px" frameborder="0" allowfullscreen></iframe>
    <p>Powered by <a href="https://restream.io">Restream.io</a></p>
    <a class="wp-block-button__link" href="https://www.youtube.com/channel/UCSC48vpfHduGAF1MaY5OwdQ/videos">Check out
        our previous streams!</a>

    <div class="spacer-2"></div>

</div>

<?php get_footer(); ?>