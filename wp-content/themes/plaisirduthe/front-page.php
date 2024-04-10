<?php get_header(); ?>


<div class="front">
    <div class="front-a">
        <div class="front-article">        
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>  

                    <div class="article">
                     
              
                        <?php the_content(); ?>                 
                    </div>
                <?php endwhile; endif; ?>
        </div>  
    </div>
        <div class="front-carte">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carte.png" alt="Carte Thés">
        </div>
       
   

</div>
<h1>FRONT</h1>
<?php get_footer(); ?>
