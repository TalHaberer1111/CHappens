<?php
/*
Template Name: Donate Now
*/
?>


<?php get_header(); ?>

<body>
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
  <div class="donate-page">
    <div class="container">
        <div class="donate-content">
            <?php the_content(); ?>
        </div>
    </div>
  </div>

<?php endwhile; ?>

  <?php endif; ?>
</body>

  <?php get_footer(); ?>
