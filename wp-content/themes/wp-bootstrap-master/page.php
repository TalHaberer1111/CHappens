<?php get_header(); ?>

<div class="container container-normal">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-12">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

        <div class="post">
        <h2><?php the_title(); ?></h2>


            <div class="entry">
            <?php the_content(); ?>

            </div>

        </div>

<?php endwhile; ?>

    <div class="navigation">
        <?php posts_nav_link(); ?>
    </div>

<?php endif; ?>
</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
