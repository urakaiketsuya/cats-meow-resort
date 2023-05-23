<section class="image-with-cta">
    <h2 class="image-with-cta--leading-title"><?php echo get_field('image_cta_heading') ?></h2>
    <div class="image-with-cta--row">
        <div class="image-with-cta--col">
            <div class="image-with-cta--image-wrap">
                <img class="image-with-cta--image" src="<?php echo get_field('image_cta_image') ?>">
            </div>  
        </div>
        <div class="image-with-cta--col">
            <h2 class="image-with-cta--sub-title"><span><?php echo get_field('image_cta_heading') ?></span> <?php echo get_field('image_cta_sub_heading') ?></h2>
            <p class="image-with-cta--text"><?php echo get_field('image_cta_content') ?></p>
            <a href="<?php echo get_field('image_cta_button_link') ?>" class="image-with-cta--button"><?php echo get_field('image_cta_button_text') ?></a>
        </div>
    </div>
</section>