
<?php get_header(); ?>


<section class="loisirs">
    <div class="petit-article">

        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'actualites',
            'posts_per_page' => -1, 
        );

        $query = new WP_Query( $args );

        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
        ?>           

                <h1><?php the_title(); ?></h1>
                
                <?php the_content(); ?>                

                <?php endwhile; endif; ?>
    </div>
</section>
<h1>Actualités</h1>
    <?php get_footer(); ?>
