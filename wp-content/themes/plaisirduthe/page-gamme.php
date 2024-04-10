<?php get_header(); ?>
<h1>Page Gamme</h1>

<div class="gamme">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<h1><?php /*the_title(); */?></h1>
    
    	<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
