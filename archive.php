<?php get_header();?>

<div class="wrapper">

    <h1><?php single_cat_title(); ?></h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

    <?php if( has_post_thumbnail() ) : ?>

    <img src="<?php the_post_thumbnail('large'); ?>" alt="<?php the_title(); ?>">

    <?php endif; ?>

    <?php the_excerpt(); ?>

    <a href="<?php the_permalink(); ?>">Read more</a>

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>