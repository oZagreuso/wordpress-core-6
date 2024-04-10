<?php get_header(); ?>
<h1>FRONT</h1>

<section class="front">
    <div class="front-article">
        
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>  

             
                        <h1><?php /*the_title();*/ ?></h1> 

                        <?php the_content(); ?>                 

                <?php endwhile; endif; ?>
        </div>  
       <div classe="carte">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carte.png" alt="Carte Thés">
       </div>
    </div> 

</section>

<?php get_footer(); ?>
