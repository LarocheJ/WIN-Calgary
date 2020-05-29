<?php get_header();?>

<div class="<?php
// Call a CSS class depending on the page. Find "PAGE HEADERS" section in style.css to modify the header background
    if(is_page("small-group")){
        print "header-banner small-group";
    } else if(is_page("meet-our-team")){
        print "header-banner team";
    } else if(is_page("values-beliefs")){
        print "header-banner values-beliefs";
    } else if(is_page("young-people")){
        print "header-banner young-people";
    } else if(is_page("kids")){
        print "header-banner kids";
    } else if(is_page("prayer-music")){
        print "header-banner prayer-music";
    }
?>">
</div>

<h1><?php the_title(); ?></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; endif; ?>

<div class="back-to-top-btn" title="Scroll back to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>

<?php get_footer(); ?>