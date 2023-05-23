<!-- I've hidden cat paws in various elements, see if you can find them all! Meow-haha -->
<section id="page-<?php the_ID(); ?>">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php 
      get_template_part('template-parts/components/hero');
      get_template_part('template-parts/components/image-with-cta');
      get_template_part('template-parts/components/accordion');
    ?>
  <?php endwhile; endif; ?>
</section>