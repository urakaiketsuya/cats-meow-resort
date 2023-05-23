<?php
if (!have_posts()) header('Location: ' . get_site_url());
get_header();
?>
  <main id="app" class="o-page__content">
    <?php 
    if (is_front_page()) {
      get_template_part( 'template-parts/content', get_post_type() );
      $flag = 1;
    } ?>
  </main>
<?php
get_footer();