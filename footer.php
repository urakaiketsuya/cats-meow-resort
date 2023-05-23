</main>
</div>
<footer class="footer">
    <div class="footer--col">
        <p class="footer--title"><?php echo get_bloginfo('name'); ?></p>
       <?php wp_nav_menu( array(
                'menu'           => 'Social Links',
                'menu_class'     => "footer--socials",
                'container'      => 'ul',
              )); 
        ?>
    </div>
    <div class="footer--col">
            <div class="footer--row">
             <div class="footer--col">
                 <p class="footer--menu-title">Company</p>
                    <?php wp_nav_menu( array(
                        'menu'           => 'Company',
                        'menu_class'     => "footer--company",
                        'container'      => 'ul',
                    )); 
                    ?>
             </div>
            <div class="footer--col">
                <p class="footer--menu-title">Support</p>
                <?php wp_nav_menu( array(
                    'menu'           => 'Support',
                    'menu_class'     => "footer--support",
                    'container'      => 'ul',
                )); 
                ?>
            </div>
        </div>
    </div>
</footer>
</div>

<?php get_template_part('template-parts/components/mobile-menu'); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/mobile-menu.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/accordion.js"></script>
<?php wp_footer(); ?>
</body>
</html>