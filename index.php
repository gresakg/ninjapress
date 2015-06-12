<?php get_header(); ?>

<?php if ( have_posts() ): 
		while ( have_posts()) : 
			the_post(); ?>

    <?php if (has_post_thumbnail()): ?>
    	<?php the_post_thumbnail('ninja'); ?>
    <?php endif; ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div>
        <?php the_time('F j, Y'); ?>
    </div>

<?php the_content(); ?>

<?php endwhile; 
		else : ?>
    <p>NI najdenih objav.</p>


<?php endif; ?>
<?php get_sidebar(); ?>

<?php get_footer(); ?>

 