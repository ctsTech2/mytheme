<?php get_header() ?>

<?php if( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post() ?>
		<div <?php post_class() ?>>
			<h2><?php the_title() ?></h2>
			<div class='excerpt'>
					<?php the_excerpt() ?>
			</div>
			<a href='<?php the_permalink() ?>' class='button'>Read On</a>  
		</div>
		
	<?php endwhile ?>
<?php else : ?>
	<p>Oh No, there are no posts!</p>
<?php endif ?>


<?php get_footer() ?>