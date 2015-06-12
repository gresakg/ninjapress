<?php get_header(); ?>


<?php if ( have_posts() ): while ( have_posts()) : the_post(); ?>
    <?php if (has_post_thumbnail()): ?>
    	<?php the_post_thumbnail('ninja'); ?>
    <?php endif; ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div>
        <?php the_time('F j, Y'); ?>
    </div>

<?php the_content(); ?>

<p><?php the_meta(); ?></p>
<?php endwhile; else : ?>
    <p>NI najdenih objav.</p>


<?php endif; ?>

<?php
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		'orderby' => 'date',
		'order'   => 'DESC',
	);
	$the_query = new WP_Query( $args );
?>

<?php if(have_posts()): ?>
<h3>Priporočamo še</h3>
<div class="row">
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="col-sm-4">
			<div class="naslov"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></div>
			<div class="datum"><?php the_time('d.m.Y \ob H:i:s'); ?></div>
			<div class="izsek"><?php the_excerpt(); ?></div>
		</div>
	<?php endwhile; ?>
</div>



<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>