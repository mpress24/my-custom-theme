<?php
get_header(); ?>

<section class="single-post" style="width: 50%;">
    <div class="container summary">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <h1 class="summary-title"><?php the_title(); ?></h1>
                <div class="post-thumbnail" style="width:100%">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
                <div class="post-meta">
                    <span class="date"><?php echo get_the_date(); ?></span>
                </div>
            <?php endwhile;
        endif; ?>
    </div>
</section>

<?php get_footer(); ?>
